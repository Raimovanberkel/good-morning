<!DOCTYPE html>

<?php
date_default_timezone_set("Europe/Amsterdam");

$hour = date ('H');

echo "<h1>Goede";

if ($hour >='6' && $hour <='12') {
	echo "morgen";
	$bodyclass = 'morning';
}

if ($hour >= '12' && $hour <'18') {
	echo "middag";
	$bodyclass = 'afternoon';
}
	echo "-avond";
	$bodyclass = 'evening';

if ($hour >='18') {
}

if ($hour >='1' && $hour <='6') {
	echo "nacht";
	$bodyclass = 'night';
}

echo "</h1><br><h2>Het is nu " . date("H:i:s</h2>");
?>

<!--auto refresh-->
<meta http-equiv="refresh" content="1">

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>goede.php</title>
</head>
<body class="<?php echo $bodyclass; ?>">


</body>
</html>