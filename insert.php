
<?php
// include db connection
include 'config.php';

if(isset($_POST['Agregar'])){
  
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Sexo = $_POST['Sexo'];
    $Especialidad = $_POST['Especialidad'];
    $Imagen = $_FILES['Imagen'];
    $img_loc = $_FILES['Imagen']['tmp_name'];
    $img_name = $_FILES['Imagen']['name'];
    $img_des = "Imagen/".$img_name;
    move_uploaded_file($img_loc,'Imagen/'.$img_name);

    // insert data

    mysqli_query($con,"INSERT INTO `tblys`(`Nombre`, `Apellido`, `Sexo`,`Especialidad`, `Imagen`) VALUES ('$Nombre','$Apellido','$Sexo', '$Especialidad','$img_des')");
    header("location:index.php");

}

?>