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
 
//Reduce errors
error_reporting(~E_WARNING);
 
//Create a UDP socket
if(!($sock = socket_create(AF_INET, SOCK_DGRAM,  SOL_UDP)))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);
    echo "Socket create failed \n"; 
    die("Couldn't create socket: [$errorcode] $errormsg \n");
}
socket_set_option($sock, SOL_SOCKET, SO_REUSEADDR, 1) 
echo "Socket created \n";
socket_close($sock);
?>
 </body>
</html>
