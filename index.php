<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="refresh" content="5" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Steve's page</title>

</head>

	<body>

		<div id="wrapper">

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<div id="content">

<h3>Live Oxygen Readings</h3>
<?php
$AtoD = file_get_contents('/sys/devices/ocp.3/44e0d000.tscadc/tiadc/iio:device0/in_voltage4_raw');
$spanAtoD=file_get_contents('spanAtoD.csv');
$zeroAtoD=400;
$calfactor=20.9/($spanAtoD-$zeroAtoD);
$O2=($AtoD-$zeroAtoD)*$calfactor;
echo round($O2,2),' %O2';
?>
<form method="post">
    <p>
        <button name="button">Calibrate O2</button>
    </p>
    </form>
<?php
if (isset($_POST['button']))
    {
        $file='spanAtoD.csv';
        file_put_contents($file, $AtoD);
    }
?>

</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>

