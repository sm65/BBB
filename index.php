<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="refresh" content="5" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var jsonData = $.ajax({
          url: "getData.php",
          dataType:"json",
          async: false
          }).responseText;
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 800, height: 480, hAxis: {title: "Seconds"}});
    }
    </script>

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
$spanAtoD=file_get_contents('/tmp/spanAtoD.csv');
$zeroAtoD=400;
$calfactor=20.9/($spanAtoD-$zeroAtoD);
$O2=($AtoD-$zeroAtoD)*$calfactor;
$O2= round($O2,2);
echo $O2,' %O2';
session_start();
$_SESSION['O2'] = $O2;
session_write_close();
if (isset($_POST['button']))
    {
        $file='/tmp/spanAtoD.csv';
        file_put_contents($file, $AtoD);
    }
?>
<form method="post">
    <p>
        <button name="button">Calibrate O2</button>
    </p>
    </form>
<p></p>
<div id="chart_div"></div>
</div> <!-- end #content -->

<?php include('includes/sidebar.php'); ?>
<?php include('includes/footer.php'); ?>
		</div> <!-- End #wrapper -->
	</body>
</html>

