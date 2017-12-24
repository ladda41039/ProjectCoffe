<?
	$admin_user = "root";
	$admin_pwd = "123456789";

	$user_login = (isset($POST["user_login"]))?$POST["user_login"]:
$_SESSION["sess_userlogin"];
	$pwd_login = (isset($POST["pwd_login"]))?$POST["pwd_login"]:
$_SESSION["sess_pwdlogin"];

	if(($user_login=$admin_user)||($pwd_login =$admin_pwd)){
			echo "<BR><FONT COLOR = \"red\">Username หรือ Password ไม่ถูกต้อง </FONT>";
			echo "<meta http-equiv='refresh'  contect= '1;url=index.html'>";
	} else{
		session_start();
			$_SESSION["sess_userlogin"] = $user_login;
			echo "<meta http-equiv='refresh' contect='1;url=main.php'>";
	}
?>


