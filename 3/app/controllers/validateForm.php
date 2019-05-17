<?php

$name_pattern = '/[a-zA-Z]+/';
$email_pattern = '/[a-z\.]+@[a-z\.]+/';
$tel_pattern = '/[0-9]{6,}/';
$edad_pattern = '/[0-9]{0,}/';
$talla_pattern = '/[0-9]{0,}/';
$altura_pattern = '/[0-9]{0,}[,.]{0,1}[0-9]{0,}/';
$color_pattern = '/marron|negro|amarillo|rojo|calvo|\s/';
$horario_pattern = '/.:00|.:15|.:30|.:45/';

$fecha_actual = new DateTime('America/Argentina/Buenos_Aires');
$fecha_nacimiento_enviada = new DateTime($_POST['fecha-nacimiento']);
$fecha_turno_enviada = new DateTime($_POST['fecha-turno']);

$horario_enviado = new DateTime($_POST['hora-turno']);
$horario_inicio = new DateTime('08:00');
$horario_fin = new DateTime('17:00');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (!preg_match($name_pattern, $_POST['paciente'])) {
    $CampoError .= 'paciente, ';
  }
  if (!preg_match($email_pattern, mb_strtolower($_POST['email']))) {
    $CampoError .= 'email, ';
  }
  if (!preg_match($tel_pattern, $_POST['telefono'])) {
    $CampoError .= 'telefono,';
  }
  if (!preg_match($edad_pattern, $_POST['edad'])) {
    $CampoError .= 'edad, ';
  }
  if (!preg_match($altura_pattern, $_POST['altura'])) {
    $CampoError .= 'altura, ';
  }
  if (!preg_match($talla_pattern, $_POST['talla-calzado']) || ($_POST['talla-calzado'] < 20 || $_POST['talla-calzado'] > 45)) {
    $CampoError .= 'talla de calzado, ';
  }
  if (!preg_match($color_pattern, $_POST['color-pelo'])) {
    $CampoError .= 'color de pelo, ';
  }
  if ($fecha_nacimiento_enviada > $fecha_actual) {
    $CampoError .= 'fecha de nacimiento, ';
  }
  if ($fecha_turno_enviada < $fecha_actual) {
    $CampoError .= 'fecha del turno, ';
  }
  if (!preg_match($horario_pattern,$_POST['hora-turno']) || ($horario_inicio > $horario_enviado) || ($horario_fin < $horario_enviado)) {
    $CampoError .= 'hora del turno, ';
  }
}

if ($CampoError != ""){
  $CampoError = substr($CampoError, 0, -2);
}
