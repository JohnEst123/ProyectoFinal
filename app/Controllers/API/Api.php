<?php
// Redireccionar el namespace con \API
namespace App\Controllers\API;
// LLamar al padre BaseController
use App\Controllers\BaseController;
use App\Models\ApiSelect;

// Cambiar el nombre = al del archivo
class Api extends BaseController
{
    public function ApiSelectControlador(){
        $instancia = new ApiSelect();
        $data = $instancia->getUsuario();
        return $this->response->setJSON($data);
    }

}
