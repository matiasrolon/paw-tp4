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
        return view('turnos', ['turnos'=>$turnos]);
    }

    public function showTurno(){
        $turno = $this->model->getTurno($_GET["id"]);
        //print_r($turno[0]);
        $diag = base64_encode($turno[0]->diagnostico);
        return view('ficha-turno', ['turnoX' => $turno[0], 'diag'=>$diag]);
    }

    public function create()
    {
      return view('turnos.create',
                                  [ 'errores' => $CampoError,
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
                                    'diagnostico' => $_FILES["diagnostico"]["tmp_name"]
                                  ]
                 );
    }

    public function validate()
    {
        $CampoError =  array();

        require 'app/controllers/validateForm.php';
        require 'app/controllers/validateImage.php';

        if (empty($CampoError)) {
            $result = $this->save();
          //  $diag = [];
          //  if (isset($_POST['diagnostico'])){
              $diag = base64_encode($result['diagnostico']);
            //}
            return view('turnoReservado', ['turnoX' => $result, 'diag'=>$diag]);
        } else {
             return view('turnos.create',
                                         [ 'errores' => $CampoError,
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
                                           'diagnostico' => $_FILES["diagnostico"]["tmp_name"]
                                         ]
                        );
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
