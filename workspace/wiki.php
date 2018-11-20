<?php

// include QR_BarCode class 
include "QR_BarCode.php";

if ($_GET['search']) {

// QR_BarCode object 
$qr = new QR_BarCode(); 

// create text QR code 
$qr->url("http://flora.ipvc.pt/Flora/workspace/Gerador.php?search=".ucwords($_GET['search'])); 

// display QR code image
$qr->qrCode(500);

}

?>
