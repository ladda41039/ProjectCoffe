<html>
<head>
	<title>สำหรับผู้ดูแลระบบ</title>
</head>
<style type="text/css">
body{
	background-color:#E0FFFF;
}
.style2{color:red;font-weight: bold}
.stype3{color:black;font-weight:bold}
.stype8{color: 	#000000;font-weight: bold}
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
</style><meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product - Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
<!-- 	<div id="page">
		<div id="header">
				<div>
				<a href="index.html" class="logo" wi><img src="images/coffee.png" alt="" width="100" height="100"></a>
						<ul id="navigation">
								
								<li class="selection"><a href="product.html">เครื่องดื่ม</a></li>
								<li class="menu">
									<a href="addproduct.html" class="addproduct">เพิ่มสินค้า</a>
								</li>
		
								<li class="menu">
									<a href="#choosseitem">แก้ไขข้อมูลสินค้า </a></li>
							</ul>
					</div>
			</div>>
		</div>
		 -->
<form name="form1" method="post" action="check_login.php">
  <table width="40%" border="0" cellpadding="1" align="center" cellspacing="1">
    <br>
    <br>
    <br>
  <tr>
     <td colspan="2" align="center" > Login For Admin </td>
   </tr>
  <tbody>
      <tr>
        <td class="stype8"> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td class="stype8"> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <tr>
  <td colspan="2"><div align="center"> <input type="submit" name="Submit" alig="center" value="Login">
</form>
</body>
</html>