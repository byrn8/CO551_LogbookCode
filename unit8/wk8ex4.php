<?php     
     $conn = mysqli_connect("127.0.0.1", "root", "", "db1");
       $sql = "SELECT * from lotto;";

       echo "<form action='$_SESSION[PHP_SELF]' method='post' >";
       echo "<br/>Select the lottery week ";
       echo "<select name='selweek' >";
       while($row = mysqli_fetch_array($result)) {
  	  echo "<option value='$row[wk]'>$row[wk]</option>";
       }
       echo "</select><br/>";
       echo "<input type='submit' value='Select' />";
       echo "</form>";
?>
