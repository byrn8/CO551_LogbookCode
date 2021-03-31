<?php
     $lottodate = date("Ymd");
     echo "The lottery numbers for $lottodate are ";
     for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }
     $conn = mysqli_connect("127.0.0.1", "root", "", "db1");
     if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
     }

     $sql = "INSERT INTO lotto (lottodate,number1,number2,";
     $sql = $sql . "number3,number4,number5,number6)";
     $sql = $sql . " values ($lottodate,$number[1],$number[2],";
     $sql = $sql . "$number[3],$number[4],$number[5],$number[6]);";

     if ($conn->query($sql) === TRUE) {
      echo "<br/>This weeks numbers have been saved";
     } 
     else {
      echo "Error: " . $sql . "<br>" . $conn->error;
     }
?>
