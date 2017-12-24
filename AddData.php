<?php
include("include/ConnectionDb.php");
$realname = $_FILES['fileupload']['name'];
$str = substr($realname,-3,3);
echo $realname;
echo "********";

if(is_uploaded_file($_FILES['fileupload']['tmp_name']))
{
    $target_Path="./images/coffe/".$realname;
    move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_Path);
    //move_uploaded_file( $realname, $target_Path );
    //copy($_FILES['fileupload']['name'],"./images/coffe/$realname");
    $Url="./images/coffe/$realname";
    echo $Url;
    $Filename=$_FILES['fileupload']['name'];
    //$size=$_FILES['fileupload']['size']/1024/1024;
    $size1=number_format($size,3);
}else{
    echo"Upload  not complelte";
};

$sql="INSERT INTO tdproduct('Itemid','Itemname','Uniprice','Picture')values ('$PID',$Pname','$Pprice','$Url')";

$sqlquery=mysql_db_query('coffeshop',$sql)or die ("ไม่สามารถเพิ่มข้อมูลได้ กรุณาตรวจสอบข้อมูลอีกครั้ง");
mysql_close();
print"เพิ่มข้อมูลเรียบร้อยแล้ว"
?>
<script language = "JavaScript">
    window.parent.AddOk('<?=$Pname?>');
</script>
