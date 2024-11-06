<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mi primera base de datos";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $contraseña = $_POST["contraseña"];

  $sql = "INSERT INTO registro (nombre, correo, contraseña)
    VALUES ('$nombre', '$correo', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
    }


    //nombre, apellido, cedula, 
$conn->close();
?>