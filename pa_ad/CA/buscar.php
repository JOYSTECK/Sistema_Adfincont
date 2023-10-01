<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto por tu usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos
$dbname = "baul"; // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener la búsqueda del formulario
$busqueda = $_POST['busqueda'];

// Consulta SQL para buscar en la base de datos
$sql = "SELECT * FROM tabla_demo WHERE nombres LIKE '%$busqueda%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["nombres"] . "<br>";
        // Agrega más campos según tu base de datos
        echo "<hr>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
