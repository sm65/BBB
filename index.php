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
#feedControlAPWorld {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlAPNational {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlAPScience {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlAPEntertainment {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlAPSports {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlAPStrange {
margin-top : 1px;
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
new GFdynamicFeedControl(feed, "feedControlAPWorld", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

<script type="text/javascript">
function load() {
var feed ="http://hosted2.ap.org/atom/APDEFAULT/386c25518f464186bf7a2ac026580ce7";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlAPNational", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

<script type="text/javascript">
function load() {
var feed ="http://hosted2.ap.org/atom/APDEFAULT/b2f0ca3a594644ee9e50a8ec4ce2d6de";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlAPScience", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

</script>
<script type="text/javascript">
function load() {
var feed ="http://hosted2.ap.org/atom/APDEFAULT/4e67281c3f754d0696fbfdee0f3f1469";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlAPEntertainment", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

</script>
<script type="text/javascript">
function load() {
var feed ="http://hosted2.ap.org/atom/APDEFAULT/347875155d53465d95cec892aeb06419";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlAPSports", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
</script>
<script type="text/javascript">
function load() {
var feed ="http://hosted2.ap.org/atom/APDEFAULT/aa9398e6757a46fa93ed5dea7bd3729e";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlAPStrange", options);
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
<div id="feedControlAPWorld">Loading AP World...</div>
</div>
<div id="body">
<div id="feedControlAPNational">Loading AP National...</div>
</div>
<div id="body">
<div id="feedControlAPScience">Loading AP Science...</div>
</div>
<div id="body">
<div id="feedControlAPEntertainment">Loading AP Entertainment...</div>
</div>
<div id="body">
<div id="feedControlAPSports">Loading AP Sports...</div>
</div>
</div>
<div id="body">
<div id="feedControlAPStrange">Loading AP Sports...</div>
</div>
                </div> <!-- End #wrapper -->
        </body>
</html>
