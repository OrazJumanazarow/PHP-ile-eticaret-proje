<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8",'root','12345678');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 //echo "baglanti basarili";


} catch(PDOException $e)
{
	echo $e->getMessage();

}


 ?>