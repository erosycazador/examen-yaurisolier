<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clinica-yaurisolier</title>
    <link rel="stylesheet" href="style.css">
   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 
  <style>
  input{
    margin: 10px;
}
            </style>

</head>
<body>
        <center>
        <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data" >
     
        <label for="">Nombre:</label>
        <input type="text" name="Nombre"><br>

        <label for="">Apellido:</label>
        <input type="text" name="Apellido" id=""><br>

        <label for="">Sexo:</label>
        <input type="text" name="Sexo"><br>

        <label for="">Especialidad:</label>
        <input type="text" name="Especialidad" id=""><br>

        <label for="">Imagen:</label>
        <input type="file" name="Imagen" id=""><br>
        <button type="submit" name="Agregar">Agregar</button>

        </form>
    </div>
        </center>

        <!-- fetch data -->

        <div class="container">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Sexo</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Image</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Actualizar</th>
    
      
    </tr>
  </thead>
  <tbody>
     
        <?php
        include 'config.php';
        $pic = mysqli_query($con,"SELECT * FROM `tblys`");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[Id]</td>
                <td>$row[Nombre]</td>
                <td>$row[Apellido]</td>
                <td>$row[Sexo]</td>
                <td>$row[Especialidad]</td>
                <td><img src='$row[Imagen]'  width = '200px'  height = '70px'></td>
                <td><a href='delete.php? Id= $row[Id]' class = 'btn btn-danger'>Eliminar</a></td>
                <td><a href='update.php? Id= $row[Id]' class = 'btn btn-danger'>Actualizar</a></td>
                <td></td>
                
                
                
            </tr>
            ";
        }
        
        ?>


  </tbody>
</table>
</div>
</body>
</html>