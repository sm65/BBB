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
//Create socket.
$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
if (!$socket) { die("socket_create failed.\n"); }

//Set socket options.
socket_set_nonblock($socket);
socket_set_option($socket, SOL_SOCKET, SO_BROADCAST, 1);
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);
if (defined('SO_REUSEPORT'))
    socket_set_option($socket, SOL_SOCKET, SO_REUSEPORT, 1);

//Bind to any address & port 5001.
if(!socket_bind($socket, '0.0.0.0', 5001))
    die("socket_bind failed.\n");

//Wait for data.
$read = array($socket); $write = NULL; $except = NULL;
while(socket_select($read, $write, $except, NULL)) {

    //Read received packets with a maximum size of 5120 bytes.
    while(is_string($data = socket_read($socket, 5120))) {
        echo $data;
    }
}
?>
 </body>
</html>
