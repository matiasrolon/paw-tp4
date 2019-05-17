<?php

$target_dir = "uploads/";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Si el archivo existe concatena un numero;

if (isset($_POST['diagnostico'])){
  
  $actual_name = pathinfo($_FILES["diagnostico"]["name"],PATHINFO_FILENAME);
  $extension = pathinfo($_FILES["diagnostico"]["name"], PATHINFO_EXTENSION);

  if($extension != "jpg" && $extension != "png" ) {
      $CampoError .= "Solo se permite archivos con extensión JPG y PNG.\n";
  }

}
