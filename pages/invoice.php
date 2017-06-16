<?php
$html = '<h1>Invoice</h1>' . $idOrder;


$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output('invoice-'.$idOrder.'.pdf','D');


//echo $html;


?>