<?php
session_start();
if(isset($_SESSION['O2'])){
?><meta http-equiv="refresh" content="5" /><?php
}
else{
?><meta http-equiv="refresh" content="0" /><?php
}
?>
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
      chart.draw(data, {width: 740, height: 480, hAxis: {title: "Seconds"}});
    }
    </script>

<div id="content">
<h3>Live Oxygen Readings</h3>
<?php
$AtoD = file_get_contents('/sys/devices/ocp.3/44e0d000.tscadc/tiadc/iio:device0/in_voltage4_raw');
$spanAtoD=file_get_contents('temp\spanAtoD.csv');
$zeroAtoD=400;
$calfactor=20.9/($spanAtoD-$zeroAtoD);
$O2=($AtoD-$zeroAtoD)*$calfactor;
$O2= round($O2,2);
echo $O2,' %O2';
$_SESSION['O2'] = $O2;
session_write_close();
if (isset($_POST['button']))
{
$file='spanAtoD.csv';
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
