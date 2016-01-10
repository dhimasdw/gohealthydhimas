<?php 
	$db = null;
	$config['debug'] = true;
	try{
		$db = new PDO("mysql:host=mysql.idhostinger.com;dbname=u415631604_login", "u415631604_admin", "sembarang");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo $e->getMessage();
	}
?>