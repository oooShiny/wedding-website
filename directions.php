<!doctype html>
<html class="no-js" lang="en">
<head>
  <link rel="shortcut icon" href="images/treeIcon.png" type="image/x-icon">
  <link rel="icon" href="images/treeIcon.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Andy and Erin's Wedding Website</title>
  <meta name="description" content="Andy and Erin's Wedding Website">
  <meta name="author" content="Andrew Brown">

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="js/jQueryImageGrid/support/examples.css" media="all" />
  <link rel="stylesheet" type="text/css" href="js/jQueryImageGrid/css/transitions.css" media="all" />
  <script src='js/libs/jquery-1.6.1.min.js'></script>
  <script src="js/script.js"></script>
    <script type="text/javascript">
      <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
  <script>DD_belatedPNG.fix("img, .png_bg");
    <![endif]-->
  </script>

</head>

<body>

<div id="main" role="main">
  <!-- Fancy scrolling sky with stars that fade in/out -->
  <section id="first" class="story" data-speed="8" data-type="background">
    <div class="scrollingHeader" data-speed="2" data-type="background">
      <div class="treeHeader">
        <div class="stars">
          <!-- This is where the fancy stars fade into -->
        </div>

        <?php include('nav.php'); ?>

        <div class="dirt">
          <div class="roots">
            <img id="rootLeft" src="images/rootsErinSmall.png" />
            <img id="rootRight" src="images/rootsFlipAndySmall.png" />
          </div>

          <div id="example-one">

            <div id="directions" class="pageContent">
              <h2>For those with GPS Navigation:</h2>
                <p>The address you're looking for is <strong>5 Stone Post Road Salem, NH 03079</strong></p>
              <p><a href="http://maps.google.com/?&daddr=<?php print urlencode('5 Stone Post Road Salem, NH 03079');?>">Google Map</a> | <a href="http://maps.apple.com/?&daddr=<?php print urlencode('5 Stone Post Road Salem, NH 03079');?>">Apple Map</a></p>
              <h2>From the South (Boston):</h2>
              <ul>
                <li>Head up <strong>Route 93 North</strong> into New Hampshire</li>
                <li><strong>Take Exit 1</strong> once you cross into NH</li>
                <li>Stay left through the off ramp (avoid the bridge in the right hand lanes).</li>
                <li>Go straight through the big set of lights to cross over Broadway.</li>
                <li>Take your second left after passing the Toys R Us (at the blinking yellow light).</li>
                <li>Straight through the next set of lights at the library.</li>
                <li>Stay on Meisner, wave to #12 (the old Brown house!). At the end, take a left.</li>
                <li>After passing the church on your left, take the next right onto Stone Post Road.</li>
                <li>Number 5 is the second house on the left. Welcome!</li>
              </ul>
              <h2>From the North (Manchester/Concord):</h2>
              <ul>
                <li>Head down <strong>Route 93 South</strong> towards Massachusetts</li>
                <li><strong>Take Exit 1</strong>. If you get to Massachusetts, you've gone too far.</li>
                <li>Stay left through the off ramp (avoid the bridge in the right hand lanes).</li>
                <li>Go straight through the big set of lights to cross over Broadway.</li>
                <li>Take your second left after passing the Toys R Us (at the blinking yellow light).</li>
                <li>Straight through the next set of lights at the library.</li>
                <li>Stay on Meisner, wave to #12 (the old Brown house!). At the end, take a left.</li>
                <li>After passing the church on your left, take the next right onto Stone Post Road.</li>
                <li>Number 5 is the second house on the left. Welcome!</li>
              </ul>
              <h2>From the East (Portsmouth):</h2>
              <ul>
                <li>Head down <strong>Route 95 South</strong></li>
                <li>At the split, stay right to merge onto <strong>Route 495 South</strong></li>
                <li>Take <strong>Exit 50</strong> towards Route 97.</li>
                <li>Head down 97 for about 3.5 miles, until you get to the lights at the Red Bard.</li>
                <li>Take a right at the Red Barn lights onto School Street.</li>
                <li>You're on School Street for another mile or 2. Look for a church just around a bend.</li>
                <li>After passing the church on your left, take the next right onto Stone Post Road.</li>
                <li>Number 5 is the second house on the left. Welcome!</li>
              </ul>
              <h2>From the West (Nashua/Merrimack):</h2>
              <ul>
                <li>Head up <strong>Route 3 North (Everett Turnpike)</strong> towards Manchester.</li>
                <li>Take the exit for <strong>293 East</strong> once you get past the tolls.</li>
                <li>Once you pass the mall, stay right at the fork to merge onto <strong>Route 93 South</strong> towards Massachusetts.</li>
                <li><strong>Take Exit 1</strong>. If you get to Massachusetts, you've gone too far.</li>
                <li>Stay left through the off ramp (avoid the bridge in the right hand lanes).</li>
                <li>Go straight through the big set of lights to cross over Broadway.</li>
                <li>Take your second left after passing the Toys R Us (at the blinking yellow light).</li>
                <li>Straight through the next set of lights at the library.</li>
                <li>Stay on Meisner, wave to #12 (the old Brown house!). At the end, take a left.</li>
                <li>After passing the church on your left, take the next right onto Stone Post Road.</li>
                <li>Number 5 is the second house on the left. Welcome!</li>
              </ul>

            </div>
          </div>
        </div>
  </section>
</div> <!-- // End of #main -->



</body>
</html>
