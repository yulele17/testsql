<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testsql";

$ID=$_GET['id'];

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT id, firstname, lastname FROM user where id='".$ID."'";
//echo $sql;
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br />";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>