<html>
 <head>
  <title>Size Page</title>
 </head>
 <body>
  <form  action="selectcolour.php" method="post">
   Select the size of the <?php echo $_POST['selqty'] ?> widgets you are ordering
   <select name="widsiz">
		<option>15.75</option>
		<option>16.75</option>
		<option>17.75</option>
		<option>18.75</option>
   </select>
   <br/><br/>	
   <input type="submit" value="Buy"/>
   <input type="hidden" name="hiddenqty" value="<?php echo $_POST["selqty"] ?>" />
  </form>
 </body>
</html>
