<?
$dbhost = 'localhost';
	$dbusername = 'root';
	$dbpass = '0883493353';
	$dbname = 'webapp';
	
	$con = mysqli_connect($dbhost,$dbusername,$dbpass,$dbname); 
?>
<?
	//		inclue "inclode/ConnectionDb.php";
			$sql = "SELECT*FROM tbTable";
			$result =mysql_query($sql);
				echo "<table border =0 width='760'>";
				$check=1
				while ($record =mysqli_fetch_array($result)) {
					if ($check%4==1){
						echo "<tr>";
					}
					

					echo "<td align='center' width='25%' >";
					if($record[status]=="0"){
						echo "<a href ='chooseitem.php?tableNo=$record[tableNo]'><img src='images/table.jpg' width='104' height='104' border='0'></a><br>;
						echo"[โต๊ะ&nbsp; <a href='chooseitem.php?tableNo=$record[tableNo]'>$record[tableNo]</a>]</td>";
					}else{
						echo "<img src ='images/table.jpg' width='104' height='104' border='0' <br>";
						echo"[โต๊ะ&nbsp; $record[tableNo]] ไใ่ว่าง </td>";
					}
					if($check%4==0){
						echo"</tr>";
						$check=0;
					}

					$check++
				}
				echo"</table>;
			?>