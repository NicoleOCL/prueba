<html>
<head>
<center><h1>Ingresa tus datos<h1></center>
</head>
<body>
<form method="post" action="" >
<label><b>Ingresa tu nombre</b></label>
<input type="text" name="realname"/><p>
<label"><b>Ingresa tu email</b></label>
<input type="text" name="nick"/><p>
<label"><b>Ingresa tu password</b></label>
<input type="password" name="pass"/><p>
<label"><b>Repite tu password</b></label>
<input type="password" name="rpass"/><p>
<input  class="btn btn-danger" type="submit" name="submit" value="Enviar"/>
</form>
<?php
if(isset($_POST['submit']))
{
require("registro.php");
}
?>
<a href="formulario2.php">logeate</a><br><br>

<a href="index.html">Pagina principal</a>
</body>
</html>