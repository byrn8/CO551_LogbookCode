<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
    $tax = 0.78;
	$netwage = $hourlyrate * $hoursperweek * $tax;
	echo $netwage;
?>
</body>
</html>
