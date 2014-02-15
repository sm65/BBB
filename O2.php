<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="refresh" content="60" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>O2 Readings Page</title>
</head>
        <body>
                <div id="wrapper">
<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
<div id="content">
<h3>Last 10 O2 Readings</h3>
<?php
$filepath='temp/Log.csv';
$lines = 11;
$Last10 = implode("", array_slice(file($filepath), -$lines));
echo nl2br($Last10);
?>
<h3>Log file</h3>
<form method="get" action="temp/Log.csv">
<button type="submit">Download</button>
</form>
</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>
                </div> <!-- End #wrapper -->
</body></html>

