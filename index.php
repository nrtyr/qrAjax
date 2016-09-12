<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Generador de QR</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(2000);
    });
    </script>
	<script type="text/javascript">
	function genQRAjax(str){
		var xmlhttp;
		if (str.length == 0) {
			document.getElementById("txtHint").innetHTML="";
		}
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET", "ajaxPhp.php?txtQr="+str,true);
		xmlhttp.send();

	}
	</script>
	<style>
    	body { display: none; }
	</style>
</head>
<body>
<div class="main_wrapper">
	<div class="cuadroUno">
		<h2>Generador de QR</h2>
		<form action="" method="get">
			<input type="text" name="txtQr" placeholder="Escribe aqui tu Codigo" onkeyup="genQRAjax(this.value)" class="txtQRgen" />
			<br>
		</form>
		<div id="txtHint">
			<?php 

			$codigo = "QR";
	     
	    	echo '<img src="soloqr.php?txtQr='.$codigo.'" class="QRimg"/>';
			 ?>
		</div>
	</div>
</div>
</body>
</html>