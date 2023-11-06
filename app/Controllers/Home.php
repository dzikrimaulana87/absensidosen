<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index(): string
  {
    $absensi = $this->AbsensiModel->getAllAbsensi();
    $data = [
      "title" => "Home",
      "absensi" => $absensi

    ];
    return view('index', $data);
  }

  public function absen(): string
  {

    return view('absensi');
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
    $nik = $this->request->getVar('nik');
    $name = $this->Validator->isValid($nik);

    if ($name === null) {
      $this->session->setFlashData("error", "Data tidak dapat ditemukan di data dosen");
    } else {
      $valid = $this->today($nik);
      if ($valid) {
        $this->session->setFlashData("error", "Data sudah ada untuk NIK " . $nik . " hari ini");
      } else {
        $this->AbsensiModel->save([
          'nik' => $nik,
          'nama' => $name
        ]);
        $this->session->setFlashData("success", "Data berhasil disimpan");
      }
    }
    return redirect()->to(base_url("/absen"));
  }
}
