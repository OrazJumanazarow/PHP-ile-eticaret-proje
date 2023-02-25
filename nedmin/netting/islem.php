<?php 
 session_start();
//error_reporting(0);
require_once 'baglan.php';


//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if (isset( $_POST['ayar_kaydet']))

{
	 
  try {
   	$sql=$db->prepare("UPDATE ayar SET 
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_author=:ayar_author,
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
        ayar_il=:ayar_il,
        ayar_adres=:ayar_adres,
        ayar_mesai=:ayar_mesai,
		ayar_maps=:ayar_maps,
		ayar_analystic=:ayar_analystic,
		ayar_zopin=:ayar_zopin,
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_google=:ayar_google,
		ayar_youtube=:ayar_youtube,
		ayar_smtphost=:ayar_smtphost,
		ayar_smtppassword=:ayar_smtppassword,
		ayar_smtpport=:ayar_smtpport
		WHERE ayar_id=1");
	$update=$sql->execute(
		[
			'ayar_title' => $_POST['ayar_title'],

	        'ayar_description' => $_POST['ayar_description'],
			'ayar_author' => $_POST['ayar_author'],
			'ayar_tel' => $_POST['ayar_tel'],
			'ayar_gsm' => $_POST['ayar_gsm'],
			'ayar_faks' => $_POST['ayar_faks'],
			'ayar_mail' => $_POST['ayar_mail'],
			'ayar_ilce' => $_POST['ayar_ilce'],
			'ayar_il' => $_POST['ayar_il'],

            'ayar_adres' => $_POST['ayar_adres'],

			'ayar_mesai' => $_POST['ayar_mesai'],
			'ayar_maps' => $_POST['ayar_maps'],
			'ayar_analystic' => $_POST['ayar_analystic'],
			'ayar_zopin' => $_POST['ayar_zopin'],
			'ayar_facebook' => $_POST['ayar_facebook'],
			'ayar_twitter' => $_POST['ayar_twitter'],
			'ayar_google' => $_POST['ayar_google'],
			'ayar_youtube' => $_POST['ayar_youtube'],
			'ayar_smtphost' => $_POST['ayar_smtphost'],
			'ayar_smtppassword' => $_POST['ayar_smtppassword'],
			'ayar_smtpport' => $_POST['ayar_smtpport']
			
		]);

 
  } catch (Exception $e) {
  	 echo "<pre>";
  	 print_r($e->getMessage());
  	 exit();
  }
 
	
	 if ($update) {
	    $_SESSION['durum']="ok";
		Header("Location:../production/ayar.php");
		exit;
	}
	else {
		$_SESSION['durum']="no";
		Header("Location:../production/ayar.php");
		exit;
	}
}

?>
