<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style type="text/css">
<!--
.tab { margin-left: 40px; }
-->
</style>	
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="refresh" content="5" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>WiFI</title>
 <body>
 	<?php include('includes/header.php');
	include('includes/nav.php');
	include('includes/sidebar.php');
	?>
  <h1>UDP server test</h1>
  <p class="tab">Remote WiFi UDP client:<br></br>
  <?php
  $addr = '0.0.0.0';
  $sock = socket_create(AF_INET,SOCK_DGRAM,0);
  if (!(socket_bind($sock,$addr,5001))){
  socket_close($sock);
       echo 'socket_bind failed: '.socket_strerror(socket_last_error())."\n\r";
  }
  else{
  if (!(socket_recvfrom($sock,$buf,14,0,$rip,$rport))){
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);

    if( ! in_array($errorcode, array(35) ) )
    socket_close($sock);
      die("Could not receive data: [$errorcode] $errormsg \n\r");
  }
  else{
  	$buf1=buff>>4;
  echo nl2br(" socket_bind success!\n\r Temperature: $buf1\n\r IP Address: $rip");
  }
  socket_close($sock);
  }
  ?>
  </p>
 </body>
</html>
