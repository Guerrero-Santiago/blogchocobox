<?php
// Incluir FPDF
require('../fpdf186/fpdf.php');
require_once '../config/database.php';

// Conectar a la base de datos
$database = new Database();
$conn = $database->getConnection();

// Crear una instancia de FPDF con márgenes personalizados
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetMargins(20, 20, 20); // Márgenes izquierda, superior, derecha
$pdf->AddPage();

// Colores principales inspirados en chocolate
$colorFondo = array(245, 230, 215);      // Beige suave
$colorTitulo = array(139, 69, 19);       // Marrón chocolate
$colorEncabezado = array(210, 105, 30);  // Marrón dorado
$colorTexto = array(50, 30, 10);         // Negro muy oscuro

// Establecer color de fondo de la página
$pdf->SetFillColor($colorFondo[0], $colorFondo[1], $colorFondo[2]);
$pdf->Rect(0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), 'F');

// Agregar logo (opcional) - Debe ser una imagen PNG/JPG accesible desde servidor
// Si no tienes logo, puedes omitir esta parte o usar un texto bonito
$pdf->Image('../img/logo_chocobox.png', 95, 25, 20); // Ruta relativa al logo

// Título principal
$pdf->SetFont('Arial', 'B', 20);
$pdf->SetTextColor($colorTitulo[0], $colorTitulo[1], $colorTitulo[2]);
$pdf->Cell(0, 20, 'ChocoBox - Lista de Usuarios', 0, 1, 'C');
$pdf->Ln(5);

// Subtítulo decorativo
$pdf->SetFont('Arial', 'I', 10);
$pdf->SetTextColor($colorTexto[0], $colorTexto[1], $colorTexto[2]);
$pdf->Cell(0, 5, 'Generated on ' . date('d/m/Y'), 0, 1, 'C');
$pdf->Ln(10);

// Línea divisoria decorativa
$pdf->SetDrawColor($colorEncabezado[0], $colorEncabezado[1], $colorEncabezado[2]);
$pdf->Line(20, $pdf->GetY(), 190, $pdf->GetY());
$pdf->Ln(7);

// Encabezados de tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor($colorEncabezado[0], $colorEncabezado[1], $colorEncabezado[2]);

$pdf->Cell(20, 10, 'ID', 1, 0, 'C', true);
$pdf->Cell(45, 10, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(45, 10, 'Apellido', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Email', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'Fecha Nac.', 1, 1, 'C', true);

// Datos de usuarios
$pdf->SetFont('Arial', '', 11);
$pdf->SetTextColor($colorTexto[0], $colorTexto[1], $colorTexto[2]);

// Consulta SQL
$query = "SELECT id, nombre, apellido, email, fecha_nacimiento FROM users";
$stmt = $conn->prepare($query);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $pdf->Cell(20, 10, $usuario['id'], 1, 0, 'C');
    $pdf->Cell(45, 10, $usuario['nombre'], 1, 0, 'C');
    $pdf->Cell(45, 10, $usuario['apellido'], 1, 0, 'C');
    $pdf->Cell(50, 10, $usuario['email'], 1, 0, 'C');
    $pdf->Cell(30, 10, $usuario['fecha_nacimiento'], 1, 1, 'C');
}

// Pie de página
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 9);
$pdf->SetTextColor($colorTexto[0], $colorTexto[1], $colorTexto[2]);
$pdf->Cell(0, 10, '© ChocoBox - Todos los derechos reservados', 0, 1, 'C');

// Salida del PDF
$pdf->Output();
?>