<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Edad=$_POST['Edad'];
$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];

try {
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "INSERT INTO usuario (Nombre, Apellidos, Edad, Correo, Contraseña)
 VALUES('$Nombre', '$Apellido', '$Edad', '$Correo', '$Contraseña')";
 //use exec() because no results are returned
 $conn->exec($sql);
 echo "Registrado en Nuestra Base de datos";
} catch(PDOException $e) {
 echo $sql . " error<br>" . $e->getMessage();
}

$conn = null;
?>

