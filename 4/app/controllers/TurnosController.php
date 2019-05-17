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
        $diagnosticos = $this->model->getAllDiagnosticos();
        //foreach ($diagnosticos as $diag){ $diag["diagnostico"] =  base64_encode($diag["diagnostico"]); }
        //print_r ($diagnosticos);
        return view('turnos', ['turnos'=>$turnos,'diagnosticos'=>$diagnosticos]);
    }

    public function create()
    {
        return view('turnos.create');
    }

    public function validate()
    {        
        $CampoError = "";
        
        require 'app/controllers/validateForm.php';
        require 'app/controllers/validateImage.php';
        
        if ($CampoError == "") {
            
            $result = $this->save();
            
            $diag = base64_encode($result['diagnostico']);
            return view('turnoReservado', ['turnoX' => $result, 'diag'=>$diag]);
        
        } else {
             return view('camposErroneos', ['errores' => $CampoError]);        
        }
    }

    
    public function save()
    {
        $turno = [
                    'paciente' => $_POST['paciente'],
                    'email' => $_POST['email'],
                    'telefono' => $_POST['telefono'],
                    'edad' => $_POST['edad'],
                    'talla_calzado' => $_POST['talla_calzado'],
                    'altura' => $_POST['altura'],
                    'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                    'color_pelo' => $_POST['color_pelo'],
                    'fecha_turno' => $_POST['fecha_turno'],
                    'hora_turno' => $_POST['hora_turno'],
                    'diagnostico' => file_get_contents($_FILES["diagnostico"]["tmp_name"])
                ];
        $this->model->insert($turno);
        return $turno;
    }
    
    
}
