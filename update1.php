<?php
include 'config.php';
if(isset($_POST['Actulizar'])){
    $ID = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Sexo = $_POST['Sexo'];
    $Especialidad = $_POST['Especialidad'];
    $Imagen = $_FILES['Imagen'];
    $img_loc = $_FILES['Imagen']['tmp_name'];
    $img_name = $_FILES['Imagen']['name'];
    $img_des = "Imagen/".$img_name;
    move_uploaded_file($img_loc,'Imagen/'.$img_name);

    mysqli_query($con,"UPDATE `tblys` SET `Nombre`='$Nombre',`Apellido`='$Apellido',`Sexo`='$Sexo',`Especialidad`='$Especialidad',`Imagen`='$img_des' WHERE Id = '$ID' ");
    header("location:index.php");

}
?>
