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



<!--
     ****************** 
	 Image Gallery Grid Layout jQuery
     ****************** 
-->

				    <!--[if lt IE 9]>
				    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
				    <![endif]-->
				    <!--[if (gte IE 9) | (!IE)]><!-->
				    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
				    <!--<![endif]-->

				    <!--[if IE]>
				    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
				    <![endif]-->

				    <script src="js/jQueryImageGrid/jquery.collagePlus.js"></script>
				    <script src="js/jQueryImageGrid/extras/jquery.removeWhitespace.js"></script>
				    <script src="js/jQueryImageGrid/extras/jquery.collageCaption.js"></script>
				  
				    <script type="text/javascript">

				    // All images need to be loaded for this plugin to work so
				    // we end up waiting for the whole window to load in this example
				    $(window).load(function () {
				        $(document).ready(function(){
				            collage();
				            $('.Collage').collageCaption();
				        });
				    });


				    // Here we apply the actual CollagePlus plugin
				    function collage() {
				        $('.Collage').removeWhitespace().collagePlus(
				            {
				                'fadeSpeed'     : 2000,
				                'targetHeight'  : 300
				            }
				        );
				    };

				    // This is just for the case that the browser window is resized
				    var resizeTimer = null;
				    $(window).bind('resize', function() {
				        // hide all the images until we resize them
				        $('.Collage .Image_Wrapper').css("opacity", 0);
				        // set a timer to re-apply the plugin
				        if (resizeTimer) clearTimeout(resizeTimer);
				        resizeTimer = setTimeout(collage, 200);
				    });

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

<!-- Gallery Section -->

				<div class="pageContent">
          <br><br>
                    <p style="text-align: center">
                        Our journey in photos...from babes in college to living and enjoying a life together in Goffstown. If you have any photos of us that you would like to share, please pass them along to us and we'll add them to the gallery.
                    </p>
					<section class="Collage effect-parent"><div class="Image_Wrapper"><a><img src="images/gallery/camping.jpg"></a></div><div class="Image_Wrapper"><a><img src="images/gallery/couch.jpg"></a></div><div class="Image_Wrapper"><a><img src="images/gallery/erins25th.jpg"></a></div><div class="Image_Wrapper"><a><img src="images/gallery/iansWedding.jpg"></a></div><div class="Image_Wrapper"><a><img src="images/gallery/myrtleBeach.jpg"></a></div><div class="Image_Wrapper"><a><img src="images/gallery/toothbrushes.jpg"></a></div><div class="Image_Wrapper"><a><img src="images/gallery/weddingphoto1.jpg"></a></div><div class="Image_Wrapper"><a><img src="images/gallery/weddingphoto2.jpg"></a></div></section>
				</div>
			</div>
		</div>
	</section>
  </div> <!-- // End of #main -->



</body>
</html>