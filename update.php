<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    input{
        margin: 10px;
    }
</style>
</head>
<body>


<?php

include 'config.php';
$ID = $_GET['Id'];
$Record = mysqli_query($con,"SELECT * FROM `tblys` WHERE Id = $ID");
$data = mysqli_fetch_array($Record);

?>
    

<center>
        <div class="main">
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
        <label for="">Nombre:</label>
        <input type="text" value="<?php echo $data['Nombre'] ?>" name="Nombre"><br>
        <label for="">Apellido:</label>
        <input type="text" value="<?php echo $data['Apellido'] ?>" name="Apellido"><br>
        <label for="">Sexo:</label>
        <input type="text" value="<?php echo $data['Sexo'] ?>" name="Sexo"><br>
        <label for="">Especialidad:</label>
        <input type="text" value="<?php echo $data['Especialidad'] ?>" name="Especialidad" id=""><br>
        <label for="">Imagen:</label>
        <td><input type="file" name="Imagen" value="<?php echo $data['Imagen'] ?>"><img src="<?php echo $data['Imagen'] ?>"  width = '200px'  height = '70px' alt=""> </td><br>
            <input type="hidden" name="Id"  value="<?php echo $data['Id'] ?>">
        <button type="submit" name="Actualizar" class = 'btn btn-danger m-2'>Actualizar</button>

        </form>
    </div>
        </center>


       

    </body>    
</html>