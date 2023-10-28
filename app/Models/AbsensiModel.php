<?php
namespace App\Models;

use CodeIgniter\Model;


class AbsensiModel extends Model
{
    protected $allowedFields = ['nama', 'nik'];
    protected $table = 'absensi';
    protected $primaryKey = 'id';

    protected $useTimestamp = true;
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function getAllAbsensi()
    {
        $today = date('Y-m-d');
        return $this->where('DATE(timestamp)', $today)->findAll();
    }

    public function isAlreadyToday($nik)
    {
        $today = date('Y-m-d');
        $result = $this->where(['nik' => $nik, 'DATE(timestamp)' => $today])->first();
        return !empty($result);
    }



}


?>