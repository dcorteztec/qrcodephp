<!DOCTYPE html>
<html>
	<head>
	<title>Nova Vida</title>
	<style type="text/css">
		.videoContainer 
		{
		    position:absolute;
		    height:100%;
		    width:100%;
		    overflow: hidden;
		}

		.videoContainer video 
		{
		    min-width: 100%;
		    min-height: 100%;
		}
	</style>
	</head>
	<body>

	<?php
	$file_name = $_GET["name"];
	$file_url = 'http://10.5.114.18/qrcode/videos/' . $file_name;
	header('Content-Type: application/octet-stream');
	header("Content-Transfer-Encoding: Binary"); 
	header("Content-disposition: attachment; filename=\"".$file_name."\""); 
	readfile($file_url);

	// Extrai o valor da variável name
	/*echo "<div class='videoContainer' >";
	  echo " <video autoplay controls>";
	   echo " <source src='".$_GET["name"]."' type='video/webm'; >";
	 echo " Desculpe; seu navegador não suporta vídeos HTML5 em WebM com VP8. </video> ";
	echo "</div> ";*/
	?>

</body>
</html>
	
