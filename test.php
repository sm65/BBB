<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<title>Home Page</title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>

<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");
#feedControlAPS {
margin-top : 10px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlRTR {
margin-top : 10px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
</style>

<script type="text/javascript">
function load() {
var feed ="http://hosted2.ap.org/atom/APDEFAULT/cae69a7523db45408eeb2b3a98c0c9c5";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlAPS", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/Reuters/worldNews";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlRTR", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
</head>
        <body>
                <div id="wrapper">
<?php include('includes/header.php');
	include('includes/nav.php');
	include('includes/sidebar.php');
	?>
<div id="body">
<div id="feedControlAPS">Loading Ap Science...</div>
</div>
<div id="body">
<div id="feedControlRTR">Loading Reuters...</div>
</div>
                </div> <!-- End #wrapper -->
        </body>
</html>
