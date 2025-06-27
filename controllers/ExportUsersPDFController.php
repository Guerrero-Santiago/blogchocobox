<?php
require_once __DIR__ . '/../fpdf186/fpdf.php';
require_once __DIR__ . '/UserController.php';

class ExportUsersPDFController {
    private $userController;

    public function __construct() {
        $this->userController = new UserController();
    }

    public function export() {
        $usuarios = $this->userController->listUsers();

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'Lista de Usuarios', 0, 1, 'C');
        $pdf->Ln(5);

        // Cabecera de tabla
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 10, 'ID', 1);
        $pdf->Cell(40, 10, 'Nombre', 1);
        $pdf->Cell(40, 10, 'Apellido', 1);
        $pdf->Cell(60, 10, 'Email', 1);
        $pdf->Cell(30, 10, 'Rol', border: 1);
        $pdf->Ln();

        // Datos
        $pdf->SetFont('Arial', '', 10);
        foreach ($usuarios as $usuario) {
            $pdf->Cell(10, 10, $usuario['id'], 1);
            $pdf->Cell(40, 10, $usuario['nombre'], 1);
            $pdf->Cell(40, 10, $usuario['apellido'], 1);
            $pdf->Cell(60, 10, $usuario['email'], 1);
            $pdf->Cell(30, 10, $usuario['role'], 1);
            $pdf->Ln();
        }

        // Limpia el búfer de salida para evitar errores
        if (ob_get_length()) {
            ob_end_clean();
        }

        $pdf->Output('I', 'usuarios.pdf'); // 'I' = abrir en navegador
    }
}
