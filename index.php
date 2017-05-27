<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
	<title>QrCode</title>
	<style type="text/css">
		div.figura {
		  float: right;
		  width: 16%;
		  border: thin silver solid;
		  margin: 0.5em;
		  padding: 0.5em;
		}
		div.figura p {
		  text-align: center;
		  font-style: italic;
		  font-size: smaller;
		  text-indent: 0;
		}
	</style>
	</head>
	<body>
<?php
include('phpqrcode/qrlib.php');


$f = fopen("inscritos.txt", "r");

	// Lê cada uma das linhas do arquivo
	while(!feof($f)) { 
	    $linha = fgets($f);
	    $nomeInscrito = trim($linha, "\n");
	    $inscritoVideo = 'http://192.168.0.107/qrcode/videos/videos.php?name='.$nomeInscrito.'.webm'; 

	    QRcode::png($inscritoVideo,$nomeInscrito.'.png',QR_ECLEVEL_H , 4); 

	    echo '<div class="figura">';
		echo '<p><img src="'.$nomeInscrito.'.png"/> </p>';
		echo '<p><b>'.$nomeInscrito.'</b> </p>';
		echo '</div>';

	}

	fclose($f);

?>
</body>
</html>
