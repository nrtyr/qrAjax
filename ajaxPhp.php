<?php 

$ajax = $_GET['txtQr'];

if (isset($ajax) && !empty($ajax)) {

	echo '<img src="soloqr.php?txtQr='.$ajax.'" class="QRimg"/>';
}else{

echo '<span><img src="soloqr.php?txtQr=QR" class="QRimg"/>';

}

 ?>