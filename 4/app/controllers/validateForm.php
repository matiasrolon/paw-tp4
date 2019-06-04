<?php

$name_pattern = "/^[a-zA-Z'-' ']+$/";
$tel_pattern = '/[0-9]{6,}/';
$edad_pattern = '/[0-9]{0,}/';
$talla_pattern = '/[0-9]{0,}/';
$altura_pattern = '/[0-9]{0,}[,.]{0,1}[0-9]{0,}/';
$color_pattern = '/marron|negro|amarillo|rojo|calvo|\s/';
$horario_pattern = '/.:00|.:15|.:30|.:45/';

$fecha_actual = new DateTime('America/Argentina/Buenos_Aires');
$fecha_nacimiento_enviada = new DateTime($_POST['fecha_nacimiento']);
$fecha_turno_enviada = new DateTime($_POST['fecha_turno']);

$horario_enviado = new DateTime($_POST['hora_turno']);
$horario_inicio = new DateTime('08:00');
$horario_fin = new DateTime('17:00');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (!preg_match($name_pattern, $_POST['paciente'])) {$CampoError['paciente']=' Solo debe contener letras. ';}

  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {$CampoError['email']='no respeta el formato de un email (@ | .com)';}

  if (!preg_match($tel_pattern, $_POST['telefono'])) {$CampoError['telefono']='Debe contener solo numeros y mas de 6 ';}

 $errorEdad = '';
  if (!preg_match($edad_pattern, $_POST['edad'])) {  $errorEdad .= 'Solo debe contener numeros. ';}
  if ($_POST['edad']>150){$errorEdad .= 'Debe ser menor de 150 años. ';}
  if ($_POST['edad']<18){$errorEdad .= 'Debe ser mayor de 18 años. ';}
  if ($errorEdad!=''){
      $CampoError['edad']=$errorEdad;}

  $ErrorAltura = '';
  if (!preg_match($altura_pattern, $_POST['altura'])) {$ErrorAltura .= 'Debe contener solo numero ';}
  if ($_POST['altura']>300){$ErrorAltura .= 'Debe ser menor a 300 cm. ';}
  if ($_POST['altura']<50){$ErrorAltura .= 'Debe ser mayor a 50 cm. ';}
  if ($ErrorAltura!=''){
      $CampoError['altura'] = $ErrorAltura;}

  $ErrorTallaCalzado = '';
  if (!preg_match($talla_pattern, $_POST['talla_calzado'])){$ErrorTallaCalzado.= 'Debe contener solo numeros. ';}
  if ($_POST['talla_calzado'] < 20) {$ErrorTallaCalzado.= 'Debe ser mayor a talla 20';}
  if ($_POST['talla_calzado'] > 60) {$ErrorTallaCalzado.= 'Debe ser menor a talla 60';}
  if ($ErrorTallaCalzado!=''){
      $CampoError['talla_calzado'] = $ErrorTallaCalzado;}

  if (!preg_match($color_pattern, $_POST['color_pelo'])) {
      $CampoError['color_pelo'] = 'Debe estar entre las opciones propuestas. ';}

  if ($fecha_nacimiento_enviada > $fecha_actual) {
      $CampoError['fecha_nacimiento'] = 'Debe ser menor a la fecha actual';}

  if ($fecha_turno_enviada < $fecha_actual) {
      $CampoError['fecha_turno'] =  'Debe ser mayor a la fecha actual '; }

  $ErrorHorarioTurno = '';
  if (!preg_match($horario_pattern,$_POST['hora_turno'])){$ErrorHorarioTurno .= 'Debe terminar con .00/.15/.30/.45. ';}
  if ($horario_inicio > $horario_enviado){$ErrorHorarioTurno .= 'Debe ser despues de las 8:00hs. ';}
  if ($horario_fin < $horario_enviado) {$ErrorHorarioTurno .= 'Debe ser antes de las 17:00. ';}
  if ($ErrorHorarioTurno!=''){
      $CampoError['hora_turno'] = $ErrorHorarioTurno;}


  $actual_name = pathinfo($_FILES["diagnostico"]["name"],PATHINFO_FILENAME);
  $extension = pathinfo($_FILES["diagnostico"]["name"], PATHINFO_EXTENSION);
  $errorImagen ='';
  if($_FILES["diagnostico"]["size"]>10000000){ $errorImagen= "Solo se permiten imagenes de hasta 10MB. ";}
  if(($extension != "jpg") && ($extension != "png") ) { $errorImagen= "Solo se permiten archivos con extensión JPG y PNG. "; }
  if ($errorImagen!=''){
      $CampoError['diagnostico']=$errorImagen;
    }

}
