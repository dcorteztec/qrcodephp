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

	// Extrai o valor da variável name
	echo "<div class='videoContainer' >";
	  echo " <video autoplay controls>";
	   echo " <source src='".$_GET["name"]."' type='video/webm'; >";
	 echo " Desculpe; seu navegador não suporta vídeos HTML5 em WebM com VP8. </video> ";
	echo "</div> ";
	?>

</body>
</html>
	