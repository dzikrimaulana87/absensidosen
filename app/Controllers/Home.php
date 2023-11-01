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

  public function save()
  {
      $nik = $this->request->getVar('nik');
      $name = $this->Validator->isValid($nik);
  
      if ($name === null) {
          $error = 'Data tidak dapat ditemukan di data dosen';
          echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
      } else {
  
          $valid = $this->today($nik);
  
          if ($valid) {
              $error = "Data sudah ada untuk NIK " . $nik . " hari ini";
              echo '<div class="alert alert-warning" role="alert">' . $error . '</div>';
          } else {
              $this->AbsensiModel->save([
                  'nik' => $nik,
                  'nama' => $name
              ]);
  
              $successMessage = 'Data berhasil disimpan';
              echo '<div class="alert alert-success" role="alert">' . $successMessage . '</div>';
          }
      }
  }
  



}