<?php
  $db_host= "localhost";
  $db_username ="root";
  $db_pass="123456789";
  $db_name ="coffeshop";
  mysql_connect("$db_host","$db_username","db_pass")
     or die ("could not connect to mysql");
  mysql_select_db("$db_name")or die ("no database");
  mysql_query("SET NAMES utf8");
?>


<?
	include "../include/connection_Db.php";


//บันทึกเครื่องดื่ม
	 if($_REQUEST['do']=="add"){
	 	$CategoryNo=$_REQUEST['CategoryNo'];
	 	$CategoryName=$_REQUEST['CategoryName'];

	 	$sql="select*from tbCateegory where catname='$CategoryName'";
	 	$result=mysql_query($sql);
	 	$num=mysql_num_rows($result);
	 	if($num>0){
	 		echo "<h1>ชื่อประเภทเครื่องดื่มซ้ำ!!</h1>";
	 		echo "<meta http-equiv='refresh' constant= '2; url =addCategory.php'>";
	 	}else{
	 		$sql_add="INSERT INTO tbCateegory(catid,catname) VALUES ('$CategoryNo','$CategoryName');";
	 		$result_add=mysql_query($sql_add);
	 		echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	 		echo "<meta http-equiv='refresh' content='2;url=addCategory.php'>";
	 	}elseif($_REQUEST['do']=="delete") { //ลบเครื่องดื่ม
	 		$CategoryNo=$_REQUEST['id'];

	 		$sql_del="DELETE FROM tbCateegory WHERE catid='$CategoryNo';";
	 		$result_del=mysql_query($sql_del);

	 		if($result_del){
	 			echo "ระบบได้ทำการลบข้อมูลเรียบร้อยแล้ว";
	 			echo "<meta http-equiv='refresh' cobtent='2;url=addCategory.php'>";
	 		}else{
	 			echo "ไม่สามารถลบข้อมูลได้";

	 		//ฟอร์มแก้ไขประเภทเครื่องดื่ม
	 		}elseif ($_REQUEST['do']=="frmedit") {
	 			$CategoryNo=$_REQUEST['id'];

	 			$sql="SELECT*FROM tbCateegory WHERE catid=$CategoryNo";
	 			$result=mysql_query($sql);
	 			$dbarr=mysqli_fetch_array($result);
	 		}
?>

<from method ="post" action="Category_action.php? do=edit">
	<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
		<tr bgcolor="FFCC99">
			<td>
				<strong>:: แก้ไขประเภทเครื่องดื่ม ::<?=$dbarr['catid'];?></strong>
			</td>
		</tr>

		<tr>
			<td align="right">
				รหัสประเภทเครื่องดื่ม
			</td>
			<td><?=$dbarr['catid'];?></td>
		</tr>

		<tr>
			<td align="right">ชื่อประเภทเครื่องดื่ม</td>
			<td><input type ="text" name="CategoryName" value="<?=$dbarr['catname'];?>"></td>
		</tr>

		<tr>
			<td colspan="2" align="right">
				<div align="center">
					<input type="hidden" name="id" value="<?=$dbarr['catid'];?>">
				<input type="submit" name="Submit" value="Edit" />
				<input type="reset" name="Reset" value="Reset" />
			</div>
			</td>
		</tr>
	</table>
</from>

<?
}elseif ($_REQUEST['do']=="edit") { //แก้ไขประเภทเครื่องดื่ม
	$CategoryNo=$_REQUEST['id'];
	$CategoryName=$_REQUEST['CategoryName'];

	$sql_update="UPDATE tbCateegory SET catname='$CategoryName' WHERE catid='$CategoryNo';";
	$result_update=mysql_query($sql_update);
	if ($result_update) {
		echo "ระบบได้ทำการแก้ไขข้อมูลเรียบร้อยแล้ว";
		echo "<meta http-equiv='refresh' content'2;url=addCategory.php'>";
	}else{
		echo "ไม่สามารถแก้ไขข้อมูลได้";
	}
}
include "../include/CloseDb.php";
?>