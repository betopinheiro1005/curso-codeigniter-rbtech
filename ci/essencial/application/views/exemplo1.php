<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>View de exemplo</title>
</head>
<body>

<div id="container">
    <!--<h1>Essa é a minha primeira view</h1>-->
	<h1><?= $titulo ?></h1> 

	<div id="body">
	<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->    
	<p><?= $conteudo ?></p>
	</div>
</div>

</body>
</html>