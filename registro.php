<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO login VALUES('','$realname','$pass','$mail','')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con exito");</script> ';
				mysql_close($link);
             echo "<script>location.href='formulario2.php'</script>";
			}
			
		}else{
			echo 'Las contraseņas son incorrectas';
		}

	
?>