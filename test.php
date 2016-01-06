<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Google AJAX Feed API - AJAX Slide Show Sample</title>
  <script src="https://www.google.com/jsapi/?key=YOUR-KEY"
    type="text/javascript"></script>
  <script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
    type="text/javascript"></script>

  <style type="text/css">
    @import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

    #feedControl { 
      margin-top : 20px;
      margin-left: auto;
      margin-right: auto;
      width : 440px;
      font-size: 16px;
      color: #9CADD0;
    }
  </style>
  <script type="text/javascript">
    function load() {
      var feed ="http://rss.people.com/web/people/rss/topheadlines/index.xml";
      new GFdynamicFeedControl(feed, "feedControl");

    }
    google.load("feeds", "1");
    google.setOnLoadCallback(load);
  </script>
</head>

<body>
  <div id="body">
    <div id="feedControl">Loading...</div>
  </div>
</body>
</html>
