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
    
    public function delete(){
        $turnos = $this->model->get();
        return view('turnos.delete', compact('turnos'));
    }

    public function borrar(){
        $id = ($_POST['id']);
        $turnos = $this->model->get();
        $this->model->delete($id);
        $turnos = $this->model->get();
        return view('turnos', compact('turnos'));
    }
    
    public function validate()
    {        
        $CampoError = "";

        require 'app/controllers/validateForm.php';
        
        if ($CampoError == "") {
            
            $result = $this->save();
            
            return view('turnoReservado', ['turnoX' => $result]);
        
        } else {
             return view('camposErroneos', ['errores' => $CampoError]);        
        }
    }

    
    public function save()
    {
        $turno = [  
                    'paciente' => ($_POST['paciente']),
                    'email' => $_POST['email'],
                    'telefono' => $_POST['telefono'],
                    'edad' => $_POST['edad'],
                    'talla_calzado' => $_POST['talla_calzado'],
                    'altura' => $_POST['altura'],
                    'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                    'color_pelo' => $_POST['color_pelo'],
                    'fecha_turno' => $_POST['fecha_turno'],
                    'hora_turno' => $_POST['hora_turno'],
                ];
        $this->model->insert($turno);
        return $turno;
    }
    
    
}
