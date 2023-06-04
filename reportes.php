<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {

    private $widths;
    private $aligns;

    function SetWidths($widths) {
        $this->widths = $widths;
    }

    function SetAligns($aligns) {
        $this->aligns = $aligns;
    }

    function Row($data) {
        $nb = 0;
        $aligns = $this->aligns;
        $widths = $this->widths;

        for ($i = 0; $i < count($data); $i++) {
            $nb = max($nb, $this->NbLines($widths[$i], $data[$i]));
        }

        $h = 10 * $nb;

        $this->CheckPageBreak($h);

        for ($i = 0; $i < count($data); $i++) {
            $w = $widths[$i];
            $a = isset($aligns[$i]) ? $aligns[$i] : 'L';
            $x = $this->GetX();
            $y = $this->GetY();

            $this->Rect($x, $y, $w, $h);
            $this->SetTextColor(0, 0, 0); // Cambia el color de las letras a negro
            $this->MultiCell($w, 10, $data[$i], 0, $a);

            $this->SetXY($x + $w, $y);
        }

        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        if ($this->GetY() + $h > $this->PageBreakTrigger) {
            $this->AddPage($this->CurOrientation);
        }
    }

    function NbLines($w, $txt) {
        $cw = $this->CurrentFont['cw'];
        $nb = 0;
        $b = strlen($txt);

        if ($w == 0) {
            return 1;
        }

        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;

        $s = str_replace("\r", '', $txt);
        $nb = ceil(strlen($s) * $this->FontSize / $wmax);

        return $nb;
    }

    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Reporte de Pacientes', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer() {
        $this->SetFillColor(20, 5, 19);
        $this->Rect(0, 270, 220, 30, 'F');
        $this->SetY(-15);
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(255, 255, 255);
        $this->Cell(0, 10, 'Proyecto Final de Desarrollo de Aplicaciones Web', 0, 0, 'C', true);
    }
}

$pdf = new PDF('L'); // Establece la orientación de la página como horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

$pdf->SetY(50);
$pdf->SetFillColor(79, 59, 120);
$pdf->SetTextColor(255, 255, 255);

$cellWidths = array(15, 50, 40, 15, 30, 30, 30, 30, 40);
$cellAligns = array('C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C');

$pdf->SetWidths($cellWidths);
$pdf->SetAligns($cellAligns);

$pdf->Row(array('', 'Nombre Completo', 'Fecha de Nacim.', 'Edad', 'Estado Civil', 'Municipio', 'Localidad', 'F. de Regis.', 'CURP')); // Agrega los encabezados de la tabla

require("cn.php");

$consulta = "SELECT * FROM registro";
$resultado = mysqli_query($con, $consulta);

$pdf->SetTextColor(0, 0, 0);

while ($row = $resultado->fetch_assoc()) {
    $id = $row['id'];
    $nombre_completo = $row['nombre_completo'];
    $fecha = $row['fecha'];
    $edad = $row['edad'];
    $civil = $row['civil'];
    $municipio = $row['municipio'];
    $localidad = $row['localidad'];
    $regis = $row['regis'];
    $curp = $row['curp'];

    $pdf->Row(array($id, $nombre_completo, $fecha, $edad, $civil, $municipio, $localidad, $regis, $curp));
}

$pdf->Output();
?>