<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
<TITLE>Logistica Dorrego-----Administrativo</title>
</head>  
<body>
<?php 
session_start();
if( !isset($_SESSION["nombre"]) || $_SESSION["rol"] != 2 ){
	header("Location: index.php");
	exit;
}
?>
<div id="cuerpo">

<form action="validar.php" method="post" class="login"> 
     <p class="tipo"> LOGISITCA DORREGO </p>
    
    <div><input name="login" type="submit" value="Carga      " ></div> 
	<div><input name="login" type="submit" value="Consulta"></div> 
</form> 
</div>
</body>
</html>