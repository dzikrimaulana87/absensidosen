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

  public function save()
  {
      $name = $this->Validator->validator($this->request->getVar('nik'));
  
      if ($name === null) {
          $error = 'Data tidak dapat ditemukan di data dosen';
          echo json_encode(['error' => $error]);
      } else {
          $nik = $this->request->getVar('nik');
  
          $this->AbsensiModel->save([
              'nik' => $nik,
              'nama' => $name
          ]);
  
          echo json_encode(['success' => true]);
      }
  }
  


}