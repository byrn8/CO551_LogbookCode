<?php	

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "db1";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

	$sql = "SELECT * from test where name = '$_GET[id]' ";
	
    $result = $conn->query($sql);
	
    $row = mysqli_fetch_assoc($result);
?>

<html>
<body>
<form action="wk6ex2.php" method=”post”>

	Name :
	<input type=text name=txtname value="<? echo $row[name] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<? echo $row[phone_number] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<? echo $row[email] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
