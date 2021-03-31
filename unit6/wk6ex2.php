<?php	

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "db1";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
	
    $sql = "SELECT * from test";
	
    $result = $conn->query($sql);
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";  	
}
?>
</body>
</html>
