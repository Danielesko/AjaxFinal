<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unisevilla";
if (isset($_POST["dni"]) && isset($_POST["clave"])) {
  $dni = $_REQUEST['dni'];
  $clave = $_REQUEST['clave'];
  // Create connection

  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT DISTINCT p.nombre, p.apellido1, p.apellido2, a.proyectos FROM personal p INNER JOIN  academico a ON p.id_usuario = a.id_usuario WHERE nif = '$dni' AND clave = '$clave'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo $row["nombre"] . " " . $row['apellido1'] . " " . $row['apellido2'] . " " . $row['proyectos'] . "<br>";
    }
  } else {
    echo "0 results";
  }

  $conn->close();
}
if (isset($_POST["nombre"]) && isset($_POST["apellido1"])) {
  $nombre = $_POST['nombre'];
  $apellido1 = $_POST['apellido1'];
  $apellido2 = $_POST['apellido2'];
  $dni2 = $_POST['dni'];
  $fechanaci = $_POST['fechanaci'];
  $nacionalidad = $_POST['nacionalidad'];
  $sexo = $_POST['sexo'];
  $ads = $_POST['ads'];
  $categoria = $_POST['categoria'];
  $entidad = $_POST['entidad'];
  $correo = $_POST['correo'];
  $tlf = $_POST['tlf'];
  $movil = $_POST['movil'];
  $id = $nombre[0] . $apellido1[0];

  $clave = rand(0000000000, 9999999999);
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO personal VALUES ('$id','$nombre','$apellido1','$apellido2','$dni2','$fechanaci','$nacionalidad','$sexo','$correo','$tlf','$movil','$clave')";
  $sql1 = "INSERT INTO academico VALUES('$id','$ads','$categoria','$entidad','nose')";

  if ($conn->query($sql) === TRUE) {
    echo "Esta es tu clave   " . $clave;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  if ($conn->query($sql1) === TRUE) {
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
if (isset($_POST['dni3']) && isset($_POST['fechanaci3'])) {
  $nif = $_POST['dni3'];
  $fecha = $_POST['fechanaci3'];
  $clave3 = rand(0000000000, 9999999999);

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT nombre FROM personal WHERE nif = '$nif' AND fecha = '$fecha'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $sql1 = "UPDATE personal SET clave = '$clave3' WHERE nif = '$nif'";
    $result = $conn->query($sql1);
    if ($conn->query($sql1) === TRUE) {
      echo "Esta es tu nueva clave " . $clave3;
    } else {
      echo "Error:2 ";
    }
  } else {
    echo "Error:1 ";
  }
  $conn->close();
}
