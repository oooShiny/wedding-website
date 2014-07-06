<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Andy and Erin's Wedding Website</title>
  <meta name="description" content="Andy and Erin's Wedding Website">
  <meta name="author" content="Andrew Brown">

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <script src='js/libs/jquery-1.6.1.min.js'></script>
  <script src='js/colorbox/jquery.colorbox-min.js'></script>
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
		<div class="scrollingHeaderHome">

      <?php include('nav.php'); ?>

			<div class="dirtHome">
<!-- 				<div class="roots">
					<img id="rootLeft" src="images/rootsErinSmall.png" />
					<img id="rootRight" src="images/rootsFlipAndySmall.png" />
				</div>
 -->
				<div id="example-two">

				<div id="home" class="pageContent">
					<ul class="timeline" id="time-erin">
						<li id="erin-family"><a class="timelink" href="#cb-efam">Her Family</a></li>
						<li id="erin-home"><a class="timelink" href="#cb-ehome">She grew up here</a></li>
						<li id="erin-birth"><a class="timelink" href="#cb-ebirth">Born 3.15.1983</a></li>
					</ul>

					<ul class="timeline" id="time-andy">
						<li id="andy-family"><a class="timelink" href="#cb-afam">His Family</a></li>
						<li id="andy-home"><a class="timelink" href="#cb-ahome">He grew up here</a></li>
						<li id="andy-birth"><a class="timelink" href="#cb-abirth">Born 4.27.1983</a></li>
					</ul>
				</div>
				<script>
            jQuery('a.timelink').colorbox({inline:true});
        </script>
			</div>
		</div>
  </div> <!-- // End of #main -->

<div style="display:none">

	<!-- Erin's Popups -->
	<div class="modal" id="cb-efam">The Marchal Family</div>
	<div class="modal" id="cb-ehome">Merrimack, NH</div>
	<div class="modal" id="cb-ebirth">Erin Marie Marchal<br>Born March 15th, 1983</div>

	<!-- Andy's Popups -->
	<div class="modal" id="cb-afam">The Brown Family</div>
	<div class="modal" id="cb-ahome">Salem, NH</div>
	<div class="modal" id="cb-abirth">Andrew Robert Brown<br>Born April 27th, 1983</div>
</div>


</body>
</html>