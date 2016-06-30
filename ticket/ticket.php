<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;

$template = file_get_contents('template.html');

$dompdf = new Dompdf();
$dompdf->set_paper('A4');
$dompdf->loadHtml($template);
$dompdf->render();
$dompdf->stream('ticket', array('Attachment' => 0));