<?
include "checksession.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset= UTF-8"/>
	<title>Main Menu for Admin </title>

</head>
<body>
	<table width="50%" border="0" align="center" cellpadding="1" cellspacing="1">
		<tr>
			<td colspan="2" align="center"><h1>Main Menu fot Admin</h1></td>
		</tr>
		<tr>
			<td align="center"><h3>ข้อมูลหลัก</h3></td>
			<td align="center"><h3>รายงาน</h3></td>
		</tr>

		<tr>
			<td>[ <a href="javascript:void window.open ('addCategory.php','category','width=550, height=400, scrollbars')">ข้อมูลชนิดเครื่องดื่ม </a>]</td>
			<td>[<a href="viewsellbymonth.php" target="_blank">สรุปการขายประจำเดือน</a>]</td>
		</tr>

		<tr>
			<td>[<a href="javascript:void window.open('addProduct.php,'product','width=550,height=400,scrollbars')">ข้อมูลเครื่องดื่ม </a>]</td>
			<td>[<a href="viewsellbyyear.php" target="_blank">สรุปการขายประจำปี</a>]</td>
		</tr>

		<tr>
			<td>[<a href="javascript:void window.open('addTableCategory.php','table','width=550, height=400, scrollbars')">ข้อมูลโต๊ะ </a>]</td>
			<td>&nbsp;</td>
		</tr>
		
	</table>
</body>
</html>