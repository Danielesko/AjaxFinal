<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alimentacion";

if (isset($_POST['contra']) && isset($_POST['correo'])) {
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT nomape,fecha,sexo,ccid FROM datos WHERE correo = '$correo' AND contrasena = '$contra'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row['nomape'] . " </p> <p id='quesexo'>" . $row['sexo'] . "</p> <p>" . $row['fecha'] . "</p><p>Último CCID: " . $row['ccid'] . "Kcal</p>";
            $sexo2 = $row['sexo'];
        }
        if (strcmp($sexo2, "Hombre") == 0) {
            echo "  <form> <input type='hidden' id='hola' value='1'>";
            echo "66,473 + (13,752 x peso en kg<input type='text' id='peso'>) + (5,0033 x altura en cm <input type='text' id='altura'>) - (6,755 x edad<input type='text' id='edad' onchange='calcular()'>)= <input type='text' id='r1'><br>";
            echo "
                <select name='tipo' id='tipo' onchange='oyente()'>
                <option value='0'>Selecciona una opcion</option>
                <option value='1'>Inactiva</option>
                <option value='1.2'>Ligera</option>
                <option value='1.4'>Media</option>
                <option value='1.6'>Activa</option>
                <option value='1.8'>Extrema</option>
                </select>";
        } else if (strcmp($sexo2, "Mujer") == 0) {
            echo "<div>       <form> <input type='hidden' id='hola' value='1' >";
            echo "655,0955 + (9,463 x peso en kg<input type='text' id='peso'>) + (1,8496 x altura en cm <input type='text' id='altura'>) - (4,6756 x edad<input type='text' id='edad' onkeyup='calcular()'>)= <input type='text' id='r1' readonly><br>";
            echo "
                <select name='tipo' id='tipo' onchange='oyente()'>
                <option value='0'>Selecciona una opcion</option>
                <option value='1'>Inactiva</option>
                <option value='1.2'>Ligera</option>
                <option value='1.4'>Media</option>
                <option value='1.6'>Activa</option>
                <option value='1.8'>Extrema</option>
                </select>";
        }
        echo "<p id='resultado'></p>";
        echo "<p id='resultado3'></p>";
    } else {
        echo "0 results";
    }
    $conn->close();
}
if (isset($_POST['ccid'])) {
    $ccid = $_POST['ccid'];
    $correo = $_POST['correo2'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE datos SET ccid='$ccid' WHERE correo = '$correo'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
if (isset($_POST['correo3'])) {
    $correo = $_POST['correo3'];
    $contra = $_POST['contra3'];
    $nombre = $_POST['nombreyapellido'];
    $sexo = $_POST['sexo'];
    $fecha = $_POST['fechanaci'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO datos VALUES ('$correo', '$contra', '$nombre','$sexo','$fecha',0)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
if (isset($_POST['correo4'])) {
    $correo = $_POST['correo4'];
    $fecha = $_POST['fecha4'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT contrasena FROM datos WHERE correo = '$correo' AND fecha='$fecha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row['contrasena'];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}
if (isset($_POST['correoactualizar'])) {
    $correo = $_POST['correoactualizar'];
    $contra = $_POST['contraactualizar'];
    $nombre = $_POST['nombreyapellidoactualizar'];
    $sexo = $_POST['sexoactualizar'];
    $fecha = $_POST['fechanaciactualizar'];
    $correo5 = $_POST['correo5'];
    $contra5 = $_POST['contra5'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE datos SET correo='$correo', contrasena='$contra',nomape='$nombre',sexo='$sexo',fecha='$fecha' WHERE correo ='$correo5' AND contrasena='$contra5'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
if (isset($_POST['contra6'])) {
    $correo = $_POST['correo6'];
    $contra = $_POST['contra6'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "DELETE FROM datos WHERE correo='$correo' AND contrasena='$contra'";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
