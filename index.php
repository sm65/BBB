<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>Steve's page</title>

</head>

	<body>

		<div id="wrapper">

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">

<h1>Page under construction.</h1>
<h2>Heading2</h2>
<h3>Hey Dan</h3>
<h4>Heading4</h4>
<h5>Heading5</h5>

<h3>Paragraph Element</h3>

<p>

O2 AtoD:
</p>

<p>
<li>
<?php
$dummy = system('tail /var/www/O2/Log.csv', $retval);
?>
</li>
</p>

<h3>Another Heading Starting Point</h3>

<p>
<?php

?>
</p>

<p>

f
</p>

</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>

<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>

