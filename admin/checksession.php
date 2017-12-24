<?
		session_start();
		$sess_userlogin=$_SESSION["sess_userlogin"];

		if($sess_userlogin==""){
			echo "<BR><FONT COLOR = \"red\">ไม่อนุญาติให้เข้าระบบ กรุณา Login ใหม่อีกครั้ง</FONT>";
			echo "<meta http-equiv='refresh' content='2;url=index.html'>";
			exit();
		}
?>