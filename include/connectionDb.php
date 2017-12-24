<?

$conn = mysql_connect("localhost","root","123456789","coffeshop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>