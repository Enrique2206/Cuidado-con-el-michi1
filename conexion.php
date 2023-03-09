<HTML>
<HEAD>
  <style>
    table, th, td {
      border: 1px solid black;
    }
    </style>
    
</HEAD>
<BODY>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$Nombre=$_POST["Nombre"];
$Apellidos=$_POST["Apellidos"];
$Edad=$_POST["Edad"];
$CorreoElectronico=$_POST["Correo"];
$Contrasena=$_POST["Contrasena"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuario (Nombre, Apellidos, Edad, Correo, Contrasena) 
VALUES ('$Nombre', '$Apellidos', '$Edad', '$CorreoElectronico', '$Contrasena')";

//echo $sql;
if (mysqli_query($conn, $sql)) {
  echo "<h3>Usurio Registrado Exitosamente, !!Muchas Gracias¡¡</h3>";
} else {
  echo "Usuario no Registrado: " . $sql . "<br>" . mysqli_error($conn);
}
//tabla de los ingresados
$sql = "SELECT Nombre, Apellidos, Edad, Correo, Contrasena FROM usuario";
$result = $conn->query($sql);



mysqli_close($conn);
?>
<br>

<form action="Usuario.php" method="POST">
</form><br>


</HTML>

