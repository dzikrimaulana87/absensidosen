<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index(): string
  {
    $absensi = $this->AbsensiModel->getAllAbsensi();
    $idabsenDESC = $this->AbsensiModel->PresenceByDate();

    $data = [
      "title" => "Home",
      "absensi" => $absensi,
      "idabsenDESC" => $idabsenDESC
    ];

    return view('index', $data);
  }

  public function absen(): string
  {
    return view('absensi');
  }

  public function absensinya()
  {
    return $this->response->setJSON($this->AbsensiModel->PresenceByDate());
  }

  public function today($nik)
  {
    $valid = $this->AbsensiModel->isAlreadyToday($nik);
    return $valid;
  }

  public function __construct()
  {
    $this->session = \Config\Services::session(); // Load the session library
  }
  public function save()
  {
    $nik = preg_replace('/[^0-9]/', '', $this->request->getVar('nik'));
    $name = $this->Validator->isValid($nik);

    if ($name === null) {
      $response = [
        'status' => 'failed',
        'boldMessage' => 'Data tidak tersedia',
        'message' => 'hubungi operator jika Anda rasa ini adalah kesalahan',
      ];
    } else {
      $valid = $this->today($nik);
      if ($valid) {
        $response = [
          'status' => 'already',
          'boldMessage' => 'Dosen sudah absen hari ini',
          'message' => 'hubungi operator jika Anda rasa ini adalah kesalahan'
        ];
      } else {
        $this->AbsensiModel->save([
          'nik' => $nik,
          'nama' => $name
        ]);
        $response = [
          'status' => 'success',
          'boldMessage' => 'Absensi berhasil',
          'message' => 'selamat bekerja!'

        ];
      }
    }

    // Return the response as JSON
    return $this->response->setJSON($response);
  }

}
