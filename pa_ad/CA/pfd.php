<?php
require_once('tcpdf/tcpdf.php'); // Asegúrate de incluir la librería TCPDF

// Crear una instancia de TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Establecer el título del documento
$pdf->SetTitle('Informe de Clientes');

// Agregar una página
$pdf->AddPage();

// Conectarse a la base de datos (reemplaza con tus credenciales)
$mysqli = new mysqli('localhost', 'root', '', 'baul');

// Verificar la conexión
if ($mysqli->connect_error) {
    die('Error de conexión a la base de datos: ' . $mysqli->connect_error);
}

// Consulta SQL para obtener los datos de clientes (ajusta según tu tabla)
$query = "SELECT * FROM tabla_demo";
$result = $mysqli->query($query);

// Crear una tabla para mostrar los datos
$html = '<table border="1">';
$html .= '<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>';

while ($row = $result->fetch_assoc()) {
    $html .= '<tr>';
    $html .= '<td>' . $row['id'] . '</td>';
    $html .= '<td>' . $row['nombre'] . '</td>';
    $html .= '<td>' . $row['email'] . '</td>';
    $html .= '</tr>';
}

$html .= '</table>';

// Agregar la tabla al PDF
$pdf->writeHTML($html, true, false, false, false, '');

// Cerrar la conexión a la base de datos
$mysqli->close();

// Salida del PDF al navegador
$pdf->Output('InformeClientes.pdf', 'D'); // 'D' descarga el archivo

?>
