<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>Live O2 Page</title>
</head>
        <body>
                <div id="wrapper">
<?php include('includes/header.php');
	include('includes/nav.php');
	include('includes/sidebar.php');
/*if(isset($_POST['value'])){
    if($_POST['value']=='unload'){
	    session_start();
	    $a = session_id();
	    $file ='/tmp/'.$a.'.json';
            unlink($file); // remove file
        }
    }*/
?>
<iframe id='O2-content' src='chart.php' frameborder='0' </iframe>
                </div> <!-- End #wrapper -->
        </body>
</html>
