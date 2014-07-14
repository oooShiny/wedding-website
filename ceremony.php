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
  <script type="text/javascript" src='js/libs/gmap3v5.1.1/gmap3.js'></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en">
  <script type="text/javascript">
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");
  <![endif]-->
  </script>

</head>

<body onload="LoadGmaps()">

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

				<div id="visitors" class="pageContent">
          <p class="centered">Our wedding celebration begins at 3 o'clock in the afternoon.  <br>Please feel free to arrive a little early, enter into the backyard and make yourself at home. We're so excited to have you there!</p>
          <br><br><br>
          <img src="images/attire.png" style="float: left;height: 50px;padding-right: 10px;">
          <p>
            The ceremony and reception will both take place outdoors on uneven terrain, so please consider the safety of your ankles and the comfort of your feet.  It may become chilly as the sun sets, but dancing into the evening will keep you warm!
          </p>
          <br><br>
          <img src="images/parking.png" style="float: left;height: 50px;padding-right: 10px;">
          <p>You are welcome to park on both sides of Stone Post Road in the Mill Village neighborhood.  Please do not park in the driveway, as vendors will be coming and going.  This may mean that you will have a short walk from your car to the house.</p>
          <br><br>
          <img src="images/phones.png" style="float: left;height: 50px;padding-right: 10px; padding-bottom: 10px;">
          <p>Please consider joining us in celebrating our wedding ceremony...unplugged!   We would love it if you could enjoy present moments with us through your own personal view, rather than the view through your screen (phone or otherwise!).  We have hired a wonderfully warm and talented photographer to capture moments throughout our day, and we will share those photos with you.  Once the ceremony has ended, feel free to whip out those cameras and smartphones and take photos to your heart's content! </p>
				</div>
			</div>
		</div>
	</section>
  </div> <!-- // End of #main -->



</body>
</html>
