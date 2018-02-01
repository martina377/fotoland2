<?php
	$connection = mysql_connect('localhost','root','',);
		if(!connection){
			die("Database conection faled". mysql_error($connection));
	}	
	select_db = mysql_select_db($connection, 'fotoland');
		if(!select_db){
			die("Deatabase connection faled" .mysql_error($connection));
		}

?>