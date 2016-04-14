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
  <h1>UDP server test</h1> 

<?php
/* Open a server socket to port 1234 on localhost */
$server = stream_socket_server('udp://127.0.0.1:5001');

/* Accept a connection */
$socket = stream_socket_accept($server);

/* Grab a packet (1500 is a typical MTU size) of OOB data */
echo "Received Out-Of-Band: '" . stream_socket_recvfrom($socket, 14, STREAM_OOB) . "'\n";

/* Take a peek at the normal in-band data, but don't comsume it. */
echo "Data: '" . stream_socket_recvfrom($socket, 14, STREAM_PEEK) . "'\n";

/* Get the exact same packet again, but remove it from the buffer this time. */
echo "Data: '" . stream_socket_recvfrom($socket, 14) . "'\n";

/* Close it up */
fclose($socket);
fclose($server);
?>
<?php include('includes/header.php');
	include('includes/nav.php');
	include('includes/sidebar.php');
	?>
 </body>
</html>
