<?php
namespace App\Models;
use CodeIgniter\Model;


class AbsensiModel extends Model{
    protected $allowedFields = ['nama', 'nik'];
    protected $table = 'absensi';
    protected $primaryKey = 'id';

    protected $useTimestamp = true;

    public function getAllAbsensi(){
        return $this->findAll();

    }
}


?>