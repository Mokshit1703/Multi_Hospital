<?php

//iclude autoload
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
$document = new Dompdf();

$document->loadhtml('new-register.html');
$document->setPaper('A4','landscape');
$document->render();
$document->stream("weblession",array("Attachment"=>0));

?>