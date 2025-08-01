<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiSelect extends Model
{
    // Select de API para usuarios
    public function getUsuario()
    {
        try {
            $db = \Config\Database::connect();
            $query = $db->query("CALL 	SP_SELECT_USUARIO()");
            return $query->getResultArray();
        } catch (\Throwable $th) {
            return $th;
        }
    }

}
