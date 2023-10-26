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
}
