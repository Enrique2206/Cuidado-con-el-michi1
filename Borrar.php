<html>
<HEAD>
  <style>
    table, th, td {
      border: 1px solid black;
    }
    </style>
    
</HEAD>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$Nombre=$_POST["Nombre"];
$Correo=$_POST["Correo"];
$Color=$_POST["Color"];
$Medida=$_POST["Medida"];
$Pago=$_POST["Pago"];
$Referencias=$_POST["Referencias"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "INSERT INTO ventas (Nombre, Correo, Color, Medida, Pago, Referencias) 
VALUES ('$Nombre', '$Correo', '$Color', '$Medida', '$Pago', '$Referencias')";

//echo $sql;
if (mysqli_query($conn, $sql)) {
  echo "<h3>Compra realizada Exitosamente, ¡¡¡Muchas Gracias por su compra!!!</h3>";
} else {
  echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
//tabla de los ingresados
$sql = "SELECT Nombre, Correo, Color, Medida, Pago, Referencias FROM ventas";
$result = $conn->query($sql);


mysqli_close($conn);
?>
<br>
</html>