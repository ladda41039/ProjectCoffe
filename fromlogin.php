<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>สำำหรับผู้ดูแลระบบ</title>
</head>
<style type="text/css">
body{
	background-color: aquamarine;
}
.style2{color:red;font-weight: bold}
.stype8{color: #FFFFFF;font-weight: bold}
</style>
<body>
<form name = "from1" method="post" action="Checkuser.php">
    <br>
    <br>
	<table width="40%" border="0" cellpadding="1" align="center" cellspacing="1">
		<tr>
			<td colspan="2" align="center" > Login For Admin </td>
		</tr>
		<tr>
			<td><span class="style8">Username : </span></td>
			<td><input name ="logname" type ="text" maxlength="15 ">*</td>
		</tr>
		<tr>
			<td><span class="style8">Password : </span></td>
			<td><input name="pw" type="password" maxlength="10 ">*</td>
		</tr>
		<tr>
			<td colspan="2"><div align="center"><input type="submit" name="Submit" value="Login"></div></td>
		</tr>
	</table>
	<div alige="center"><? print"$code_error"; ?></div>
</body>
</html>