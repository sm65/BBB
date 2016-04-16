<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>Test Page</title>
 <body>
 	<?php include('includes/header.php');
	include('includes/nav.php');
	include('includes/sidebar.php');
	?>
  <h1>UDP server test</h1> 

<?php
echo"test1 \n";
$server = stream_socket_server('udp://127.0.0.1:5001');
$socket = stream_socket_accept($server);
if (!$socket) {
    die("$errstr ($errno)");
    echo"failed \n";
}
echo"$socket \n";
for ($x = 0; $x <= 10; $x++){
echo "Data: '" . stream_socket_recvfrom($socket, 14) . "'\n";
}
echo"test2 \n";
?>
 </body>
</html>
