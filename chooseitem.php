<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><H1>Coffe Shop</H1></a>
				<ul id="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="menu">
						<a href="table.php">สินค้า</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="choosseitem.html">Product</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="basket_add.php">สั่ง</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href=".php">เช็คบิน</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="viewSellbydate.php">สรุปยอดขายประจำวัน</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<?
			include"include/ConnectionDb.php";

			$sql0="SELECT*FROM tbCategory";
			$result0=mysql_query($sql 0);
			while ($dbarr0=mysql_fetch_array($result0){
				echo "<p>".$adbarr0['catname']."</p>";
				$sql="SELECT*FROM tbProduct WHRER ref_catid='dbarr0[catid]' GROUP BY itemname";
				$result=mysql_query($sql);

				echo"<table width='700' border='0' cellspacing='0' cellpadding='0' bordercolor ='#663300'>";

				$check=1;
				while($record=mysql_fetch_array($result)){
					if ($check%4==1){
						echo "<tr>";
					}
?>
			<tidy valign ="top" align ="center"
		//<div id="body" class="menu">
			//<table width="760" border="0" cellspacing="0" cellpadding="0" bgcolor="">
			//</table>
		//</div>
		?>
		
</body>
</html>
