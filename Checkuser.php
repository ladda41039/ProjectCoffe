<?php
session_start();
$host="localhost";
$user="root";
$passwd="123456789";
$dbname="coffeshop";
mysql_connect($host,$user,$passwd) or die("ติดต่อ host ไม่ได้");
mysql_select_db($dbname) or die("ติดต่อฐานข้อมูลไม่ได้");
$sql ="select*from useradmin where useradmin='$logname' and pwdamin='$pw'";
$dbquery= mysql_db_query($dbname,$sql);
$num_rows=mysql_num_rows($dbquery);
if($num_rows==1)
{
    if($check=="on")
    {
        setcookie("logname",$logname,time()+3600*24*356);
        setcookie("pw",$pw,time()+3600*24*356);
        header("location:localhost/ProjectCoffe/Mainadmin.php");
    }else{
        header("location:localhost/ProjectCoffe/Mainadmin.php");}
}else{
        $code_error="<span class=style2>ข้อมูลไม่ถูกกรุณา login ใหม่ </span>";
        session_register("code_error");
        header("location:formlogin.php");
    };
?>