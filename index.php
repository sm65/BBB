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
#feedControlWorld {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlNational {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlScience {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlEntertainment {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlSports {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlStrange {
margin-top : 1px;
margin-left: 10px;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
#feedControlTech {
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
var feed ="http://feeds.reuters.com/Reuters/worldNews";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlWorld", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/Reuters/domesticNews";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlNational", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/reuters/scienceNews";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlScience", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

</script>
<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/reuters/entertainment";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlEntertainment", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>

</script>
<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/reuters/sportsNews";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlSports", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
</script>
<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/reuters/oddlyEnoughNews";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlStrange", options);
}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
</script>
<script type="text/javascript">
function load() {
var feed ="http://feeds.reuters.com/reuters/technologyNews";
  var options = {
    numResults : 6
  }
new GFdynamicFeedControl(feed, "feedControlTech", options);
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
<div id="feedControlWorld">Loading World...</div>
</div>
<div id="body">
<div id="feedControlNational">Loading National...</div>
</div>
<div id="body">
<div id="feedControlScience">Loading AP Science...</div>
</div>
<div id="body">
<div id="feedControlEntertainment">Loading Entertainment...</div>
</div>
<div id="body">
<div id="feedControlSports">Loading Sports...</div>
</div>
<div id="body">
<div id="feedControlStrange">Loading Strange...</div>
</div>
<div id="body">
<div id="feedControlTech">Loading Tech...</div>
</div>
<?php include('includes/footer.php'); ?>
                </div> <!-- End #wrapper -->
        </body>
</html>
