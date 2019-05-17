<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Turnos;

class TurnosController extends Controller
{
    public function __construct()
    {
        $this->model = new Turnos();
    }

    /**
     * Show all task
     */
    public function index()
    {
        $turnos = $this->model->get();
        return view('turnos', compact('turnos'));
    }

    public function create()
    {
        return view('turnos.create');
    }

    public function validate()
    {        
        $CampoError = "";

        require 'app/controllers/validateForm.php';
        
        if ($CampoError == "") {
            
            $resultado  = $this->save();
            
            return view('turnoReservado', ["turno" => $resultado]);
        } else {
             return view('camposErroneos', ['errores' => $CampoError]);        
        }
    }

    
    public function save()
    {
        $turno = [
                    'paciente' => ($_POST['paciente']),
                    'fecha-turno' => $_POST['fecha-turno'],
                    'hora-turno' => $_POST['hora-turno'],
                    'telefono' => $_POST['telefono'],
                    'email' => $_POST['email'],
                    'edad' => $_POST['edad'],
                    'talla-calzado' => $_POST['talla-calzado'],
                    'altura' => $_POST['altura'],
                    'fecha-nacimiento' => $_POST['fecha-nacimiento'],
                    'color-pelo' => $_POST['color-pelo']
                ];
        $this->model->insert($turno);
        return $turno;
    }
    
    
}
