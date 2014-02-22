<?php
session_start();
if(isset($_SESSION['laststat'])){
?><meta http-equiv="refresh" content="5" /><?php
}
else{
?><meta http-equiv="refresh" content="0" /><?php
}
?>
<div id="content">
<h3>Core Temperature:</h3>
<?php
$CoreDegC = file_get_contents('/sys/devices/ocp.3/44e10448.bandgap/temp1_input');
$CoreDegC = $CoreDegC/1000;
echo $CoreDegC , ' DegC';
?>
<h3>Current CPU Frequency:</h3>
<?php
$Current_CPU = file_get_contents('/sys/devices/system/cpu/cpu0/cpufreq/scaling_cur_freq');
$Current_CPU = $Current_CPU/1000;
echo $Current_CPU, ' MHz';
?>
</div> <!-- end #content -->
<h3>%CPU:</h3>
<?php
/* Gets individual core information */
function GetCoreInformation() {
$data = file('/proc/stat');
$cores = array();
foreach( $data as $line ) {
if( preg_match('/^cpu[0-9]/', $line) )
{
$info = explode(' ', $line );
$cores[] = array(
'user' => $info[1],
'nice' => $info[2],
'sys' => $info[3],
'idle' => $info[4]
);
}
}
return $cores;
}
/* compares two information snapshots and returns the cpu percentage */
function GetCpuPercentages($stat1, $stat2) {
if( count($stat1) !== count($stat2) ) {
return;
}
$cpus = array();
for( $i = 0, $l = count($stat1); $i < $l; $i++) {
$dif = array();
$dif['user'] = $stat2[$i]['user'] - $stat1[$i]['user'];
$dif['nice'] = $stat2[$i]['nice'] - $stat1[$i]['nice'];
$dif['sys'] = $stat2[$i]['sys'] - $stat1[$i]['sys'];
$dif['idle'] = $stat2[$i]['idle'] - $stat1[$i]['idle'] + 1;
$total = array_sum($dif);
$cpu = array();
foreach($dif as $x=>$y) $cpu[$x] = round($y / $total * 100, 1);
$cpus['cpu' . $i] = $cpu;
}
return $cpus;
}
/* get core information (snapshot) */
$stat1 = GetCoreInformation();
//session_start();
if(isset($_SESSION['laststat'])){
$data = GetCpuPercentages($stat1, $_SESSION['laststat']);
$_SESSION['laststat']= $stat1;
}
else{
$_SESSION['laststat']= $stat1;
$data = GetCpuPercentages($stat1, $_SESSION['laststat']);
}
session_write_close();
//$stat1 = GetCoreInformation();
/* makes a google image chart url */
function makeImageUrl($title, $data) {
$url = 'http://chart.apis.google.com/chart?chs=440x240&cht=pc&chco=0062FF|498049|F2CAEC|D7D784&chd=t:';
$url .= $data['user'] . ',';
$url .= $data['nice'] . ',';
$url .= $data['sys'] . ',';
$url .= $data['idle'];
$url .= '&chdl=User|Nice|Sys|Idle&chdlp=b&chl=';
$url .= $data['user'] . '%25|';
$url .= $data['nice'] . '%25|';
$url .= $data['sys'] . '%25|';
$url .= $data['idle'] . '%25';
$url .= '&chtt=Core+' . $title;
return $url;
}
/* ouput pretty images */
foreach( $data as $k => $v ) {
echo '<img src="' . makeImageUrl( $k, $v ) . '" />';
}
?>

