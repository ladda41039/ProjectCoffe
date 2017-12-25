<!doctype html>

<?php
header("Content-Type:text/plain;charset=TIS-620");
session_start();
$sessionID = session_id();
$removeProductID = $_POST['productID']; //เปิดการใช้งาน session แล้วปิดคำสั่ง php
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product - CoffeeShop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	<style>
		/* Remove the navbar's default margin-bottom and rounded borders */ 
		.navbar {
		  margin-bottom: 0;
		  border-radius: 0;
		}
		
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		.row.content {height: 450px}
		
		/* Set gray background color and 100% height */
		.sidenav {
		  padding-top: 20px;
		  background-color: #f1f1f1;
		  height: 100%;
		}
		
		/* Set black background color, white text and some padding */
		footer {
		  background-color: #555;
		  color: white;
		  padding: 15px;
		}
		
		/* On small screens, set height to 'auto' for sidenav and grid */
		@media screen and (max-width: 767px) {
		  .sidenav {
			height: auto;
			padding: 15px;
		  }
		  .row.content {height:auto;} 
		}
      </style>
</head>
<body>
    <?php
    include("include/ConnectionDb.php");
    if($ProductID>0){
        $sql="UPDATE 'coffeshop'.'tdproduct' SET 'Itemname'='$Pname','Unitprice'='$Price' WHERE 'tdproduct'.'Itemid';";
        mysql_query($sql);
    }
    $sql="SELECT*FROM 'tdproduct'";
    $resuit = mysql_query($sql);
    $tatalPrice =0;
    echo"<tbale width ='75%' border ='1' bordercolor='#A59A1B' bgcolor='#D3BC38' ><tr> align = 'center'><td><b>ภาพสินค้า</b></td>
    <td><b>รหัสเครื่องดื่ม</b></td>
        <td><b>รหัสเครื่องดื่ม</b></td>
            <td><b>ราคา</b></td>
            <td><b>แก้ไขเครื่องดื่ม</b></td>
            <td><b></b></td></tr>";
    while($row=mysql_fetch_array($result)){
        $ProductID=$row["Itemid"];
        $ProductName=$row["Itemname"];
        $ProductPrice=$row["Unitprice"]
        $pic=$row["Picture"]
        echo "<tr bgcolor ='#D3BC38' align ='center'><form id ='from1' name='from1' method='post' action= 'Editproduct.php'>";
        echo "<td><img src ='$pic'></td>";
        echo "<td>$ProductID<input name ='Itemid' type='hidden' value ='$ProductID'></td><td><input name='Pname' type='text' value='$ProductName'></td>";
        echo "<td><input name ='PPrice' type='text' value='$ProductPrice บาท'></td>";
        echo "<td><input type ='submit' name='Delete' id='Edit' value='Edit' onclick="?>" return confirm('คุณแน่ใจว่าต้องการแก้ไขข้อมูลนี้หรือไม่ ?')"/><?"/>";
        echo "</td></from></tr>";*/
    }

    echo"</td></from></tr>";
    ?>
		
		<div id="footer">
			<div>
				<div class="connect">
					<a href="https://www.facebook.com/" class="facebook">facebook</a>
					<a href="https://twitter.com/twitch" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
