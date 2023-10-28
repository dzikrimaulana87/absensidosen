<?php

namespace App\Models;

use CodeIgniter\Model;

class Validator extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';
    protected $useTimestamp = true;

    public function isValid($nik)
    {
        $result = $this->where('nik', $nik)->first();

        if ($result) {
            return $result['nama'];
        } else {
            return null;
        }
    }
}
