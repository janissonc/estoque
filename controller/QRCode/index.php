<?php
include ("vendor/autoload.php");

$url = 'http://192.168.0.1';

$teste = (new \chillerlan\QRCode\QRCode())->render($url);

echo '<div><center><img src="'.$teste.'" /><br> 192.168.0.1 <br> teste de qrCode</center></div>';
