<?php
include("dbconn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon1.ico">

    <title>Oglasnik</title>
</head>
<body>
<?php include("navbar1.php"); ?>
<div class="row">

<div class="col" style="width:20%">

 

</div>

<div class="col-mid">

    <?php include("navbar.php");  ?>
    <div class="addiv">
<a href="loginpage.php" class="button4" style="background-color:#111">+ PREDAJ OGLAS</a>

</div>
<?php 
    include("filter.php");
    ?>
    <script>
      !(function() {
        var analytics = (window.analytics = window.analytics || []);
        if (!analytics.initialize)
          if (analytics.invoked)
            window.console &&
              console.error &&
              console.error("Segment snippet included twice.");
          else {
            analytics.invoked = !0;
            analytics.methods = [
              "trackSubmit",
              "trackClick",
              "trackLink",
              "trackForm",
              "pageview",
              "identify",
              "reset",
              "group",
              "track",
              "ready",
              "alias",
              "debug",
              "page",
              "once",
              "off",
              "on"
            ];
            analytics.factory = function(t) {
              return function() {
                var e = Array.prototype.slice.call(arguments);
                e.unshift(t);
                analytics.push(e);
                return analytics;
              };
            };
            for (var t = 0; t < analytics.methods.length; t++) {
              var e = analytics.methods[t];
              analytics[e] = analytics.factory(e);
            }
            analytics.load = function(t, e) {
              var n = document.createElement("script");
              n.type = "text/javascript";
              n.async = !0;
              n.src =
                "https://cdn.segment.com/analytics.js/v1/" +
                t +
                "/analytics.min.js";
              var a = document.getElementsByTagName("script")[0];
              a.parentNode.insertBefore(n, a);
              analytics._loadOptions = e;
            };
            analytics.SNIPPET_VERSION = "4.1.0";
            analytics.load("FQ5NJmRc6LrFKVAC6ofHlSU7WIwGAdj5");
            analytics.page();
          }
      })();
    </script>
    <?php 
    include("footer.php");
    ?>
    
</div>


<div class="col" style="width:20%">
  
  

</div>

</div>

</body>
</html>