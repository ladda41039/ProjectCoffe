<?
include "../include/ConnectionDb.php";
//include "checksession.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Tpye" content="text/html; charset=utf-8" />
	<title>เพิ่มข้อมูลประเภทเครื่องดื่ม</title>
</head>
<body>
	<?
		$objDB = mysql_select_db("coffeshop");
		$strSQL = "SELECT * FROM tbcategory";
		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>

	<from method ="post" action="Category_action.php?do=add">
		<table width = "100%" align=center cellpadding=2 cellspacing=0>
			<tr bgcolor=#FFCC99>
				<td colspan="2" bgcolor="#FF9933"><strong>:: เพิ่ทข้อมูลประเภทเครื่องดื่ม ::</strong></td>
			</tr>

			<tr bgcolor="##FFFFFF">
				<td align="right">รหัสประเภทเครื่องดื่ม</td>
				<td><?=$total;?></td>				
			</tr>

			<tr bgcolor="#FFFFFF">
				<td align="right">ชื่อประเภทเครื่งดื่ม</td>
				<td><input name= CategoryName ></td>
			</tr>

			<tr>
				<td colspan="2" align="right">
					<div align="center">
						<INPUT type ="submit" value "บันทึก" name="Submit">
						<input type="reset" name="Submit2" value="ล้างข้อมูล">
						<input type="hidden" name="CategoryNo" value="<?=$total; ?>">
					</INPUT></div>
				</td>
			</tr>
		</table>

		<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
			<tr bgcolor="#FFCC99">
			<tr>
			
					<th width="91"> <div align="center">ลำดับที่ </div></th>
				
					<th width="98"> <div align="center">รายการ</div></th>
				
					<th width="198"> <div align="center">แก้ไข </div></th>
					
					<th width="97"> <div align="center">ลบ </div></th>
					
			</tr>

			<?
				$item = 1;
				while($objResult = mysql_fetch_array($objQuery))
				{
				?>
				<tr>
					<td><div align="center"><?=$item?></div></td>
					<td><?=$objResult["Name"];?></td>
					<td><?=$objResult["Email"];?></td>
					<td><div align="center"><?=$objResult["CountryCode"];?></div></td>
					<td align="right"><?=$objResult["Budget"];?></td>
					<td align="right"><?=$objResult["Used"];?></td>
				</tr>
				<?
				$item++;
				}
				?>
				</table>
				<?
				mysql_close($objConnect);
				?>

			<tr bgcolor="#FFFFFF">
				<td align="center" width="10%"><? echo $dbarr_category['catid']?></td>
				<td ><? echo $dbarr_category['catName']?></td>
				<td align="center" width="15%">[<a href="../admin/Category_action.php?do=frmedit&id=<? echo $dbarr_category['catid']?>">แก้ไข</a>]</td>
				<td align="center" width="15%">[<a href="../admin/Category_action.php?do=delete&id=<? echo $dbarr_category['catid']?>">ลบ</a>]</td>
			</tr> 
		
			<tr>
				<td align="center"></td>
				<td colspan="3" align="right"> รวมทั้งหมด <?=$totals?>รายการ : 
				<? if($totalpages>1){
					for ($i=1;$i<=$totalpages;$i++){
						if($i==$page){
							echo "<b> หน้า $page </b>";
						}else{
							echo "| <a href =\"viewCategory.php&page=$i\">$i</a>&nbsp;";
						}
					}
				}?>
				</td>
			</tr>

		</table>
</body>
</html>

<?
include "../include/CloseDb.php";
?>