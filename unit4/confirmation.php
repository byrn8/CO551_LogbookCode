<?php
   $totalprice = $_POST['hiddenqty'] * 15.75;

   echo "<h2> Your order qty is $_POST[hiddenqty] </h2></br>";
   echo "<h2> The overall price is $totalprice </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>"
?>
