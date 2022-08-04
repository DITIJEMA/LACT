<?php
$target_dir = "../../img/clientes/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "La foto es un archivo valido- " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "El archivo no es una foto. por favor manda un archivo valido.";
    $uploadOk = 0;
  }
//}

// Check if file already exists
if (file_exists($target_file)) {
  echo "El archivo ya existe, por favor cargue otra imagen.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["foto"]["size"] > 5000000) {
  echo "Tu archivo es muy grande, prueba a reducir el tamaño de la imagen o subir otra.";
  $uploadOk = 0;
}

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Solo se permite subir imagenes de las siguientes extensiones: JPG, JPEG, PNG & GIF";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Tu archivo no se subio correctamente, pruebe mas tarde a subirlo de nuevo.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    echo "El archivo ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " fue cargado con exito.";
  } else {
    echo "Tu archivo no se puede subir. Pruebe en otra ocasion";
  }
}
?>