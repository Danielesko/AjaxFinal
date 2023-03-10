<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "highcostcars";
if (isset($_POST['clave'])) {
    $matricula = $_POST['matricula'];
    $clave = $_POST['clave'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM etiquetas WHERE matricula = '$matricula' AND clave = '$clave'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row['marcaymodelo'] . "</p><p>" . $row['combustible'] . "</p>";
            $color = $row['color'];
            echo "<input type ='text' id='colorcito' value='$color'>";
        }
    } else {
        $frase = "Inicio de sesion incorrecto, si quiere registrarse pulse";
        echo "<input type='text' id='registro' value='$frase' style='width:35%'>";
    }
    $conn->close();
}
if (isset($_POST['ano'])) {
    $ano = $_POST['ano'];
    $matricula = $_POST['matricula2'];
    $color;
    if($ano<2003){
        $color = "rojo";
    }else if($ano>2003 && $ano<2005){
        $color = "amarillo";
    }else if($ano>=2005 && $ano<2008){
        $color = "azul";
    }else if($ano>2008){
        $color = "verde";
    }
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO etiquetas VALUES ('$matricula', 123456, '$color','sinmarcar','gasolina','$ano')";

    if ($conn->query($sql) === TRUE) {
        echo "Correcto, su contraseña es 123456";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
