<?php
session_start();
$a = session_id();
$O2 = $_SESSION['O2'];
if(isset($_SESSION['seconds']))
$_SESSION['seconds']=$_SESSION['seconds']+5;
else{
$_SESSION['seconds']=0;
$testdata ='{
  "cols": [
        {"id":"","label":"Time","pattern":"","type":"number"},
        {"id":"","label":"%O2","pattern":"","type":"number"}
      ],
  "rows": [';
$file ='temp/'.$a.'.json';
file_put_contents($file, $testdata);
}
session_write_close();
$testdata ='
        {"c":[{"v":' .$_SESSION['seconds'].',"f":null},{"v":'.$O2.',"f":null}]},';
$file ='temp/'.$a.'.json';
file_put_contents($file, $testdata, FILE_APPEND | LOCK_EX);
$string = file_get_contents('temp/'.$a.'.json');
$string = substr($string, 0, -1) . '
      ]
}
';
echo $string;
?>
