<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="refresh" content="5" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>BBB Interface Page</title>
</head>
	<body>
		<div id="wrapper">
<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
<div id="content">

<h3>Core Temperature:</h3>
<?php
$CoreDegC = file_get_contents('/sys/devices/ocp.3/44e10448.bandgap/temp1_input');
$CoreDegC = $CoreDegC/1000;
echo $CoreDegC , ' DegC';
?>

</div> <!-- end #content -->
<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>
		</div> <!-- End #wrapper -->
	</body>
</html>
