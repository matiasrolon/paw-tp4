<?php



if (isset($_POST['diagnostico'])){

  $actual_name = pathinfo($_FILES["diagnostico"]["name"],PATHINFO_FILENAME);
  $extension = pathinfo($_FILES["diagnostico"]["name"], PATHINFO_EXTENSION);

  $errorImagen ='';
  if($extension != "jpg" && $extension != "png" ) { $errorImagen= "Solo se permiten archivos con extensión JPG y PNG. "; }
  if($_FILES["diagnostico"]["name"]>1000000){ $errorImagen= "Solo se permiten imagenes de hasta 1MB";}

  if ($errorImagen!=''){
    $CampoError['diagnostico']=$errorImagen;
  }

}
