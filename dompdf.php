<?php

//iclude autoload
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
$document = new Dompdf();

$page = file_get_contents('viewdetail.html');

$document->loadHtml($page);
$document->setPaper('A4','portrait','border=2');
$document->render();
$document->stream("weblession",array("Attachment"=>0));

?>