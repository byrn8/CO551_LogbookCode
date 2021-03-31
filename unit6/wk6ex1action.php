<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]',$_POST[txtPhoneNumber])";

	$servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "db1";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br/>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

	$sql = "SELECT * from test";
    
    $result = $conn->query($sql);
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "Name: $row[name]  Email: $row[email]  Phone Number: $row[phone_number] <br/>";
	}
?>
