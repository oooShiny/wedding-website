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
  <script type="text/javascript">

    function LoadGmaps()
    {
      // Setting Lat & Long for each point
      var salem = new google.maps.LatLng(42.7923811,-71.2189494);
      var portland = new google.maps.LatLng(43.660342,-70.2514564);
      var boston = new google.maps.LatLng(42.3133735,-71.057157);
      var portsmouth = new google.maps.LatLng(43.0566295,-70.775502);

      // Text to show up in each bubble
      var infoPortland = new google.maps.InfoWindow({content: '<div class="map-content"><h1 class="firstHeading">Portland, ME</h1><div class="bodyContent"><a href="http://www.portlandmaine.com/discover-portland/" target="_blank">Click here for things to do in Portland.</a></div></div>'});
      var infoPortsmouth = new google.maps.InfoWindow({content: '<div class="map-content"><h1 class="firstHeading">Portsmouth, NH</h1><div class="bodyContent"><a href="http://www.portsmouthnh.com/visitors/" target="_blank">Click here for things to do in Portsmouth.</a></div></div>'});
      var infoSalem = new google.maps.InfoWindow({content: '<div class="map-content"><h1 class="firstHeading">Wedding Venue</h1><div class="bodyContent">5 Stone Post Road<br>Salem, NH 03079</div></div>'});
      var infoBoston = new google.maps.InfoWindow({content: '<div class="map-content"><h1 class="firstHeading">Boston, MA</h1><div class="bodyContent"><a href="http://www.bostonusa.com/" target="_blank">Click here for things to do in Boston.</a></div></div>'});

      // Basic Map Options
      var myOptions = {
        zoom: 7,
        center: salem,
        disableDefaultUI: true,
        panControl: true,
        zoomControl: true,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.DEFAULT
        },

        mapTypeControl: true,
        mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        },
        streetViewControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      // Initialize the map
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
      // Create Markers for each point and initialize the popups for them
      var marker1 = new google.maps.Marker({
        position: salem,
        map: map,
        title:"5 Stone Post Road Salem NH 03079",
        icon: "images/weddingMapIcon50.png"
      });
      google.maps.event.addListener(marker1, 'click', function(){
        infoSalem.open(map,marker1);
      });

      var marker2 = new google.maps.Marker({
        position: portland,
        map: map,
        title:"Portland, Maine",
        icon: "http://maps.google.com/mapfiles/marker_green.png"
      });
      google.maps.event.addListener(marker2, 'click', function(){
        infoPortland.open(map,marker2);
      });

      var marker3 = new google.maps.Marker({
        position: boston,
        map: map,
        title:"Boston, Massachussetts",
        icon: "http://maps.google.com/mapfiles/marker_green.png"
      });
      google.maps.event.addListener(marker3, 'click', function(){
        infoBoston.open(map,marker3);
      });
      var marker4 = new google.maps.Marker({
        position: portsmouth,
        map: map,
        title:"Portsmouth, New Hampshire",
        icon: "http://maps.google.com/mapfiles/marker_green.png"
      });
      google.maps.event.addListener(marker4, 'click', function(){
        infoPortsmouth.open(map,marker4);
      });
    }
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
          <h2 id="visitorh2">Where Would You Like to Stay?</h2>

          <!--Google Map-->
          <div id="map_canvas"></div>
          <div id="floatright">
            <h3>Salem, NH</h3>
            <ul>
              <li><a href="http://www.ihg.com/holidayinn/hotels/us/en/salem/selnh/hoteldetail">Holiday Inn</a></li>
              <li><a href="http://laquintasalemnh.com">La Quinta</a></li>
            </ul>

            <h3>Portsmouth, NH</h3>
            <p>If you’re heading North, take a look at the <a href="http://www.portsmouthnh.com/lodging/">Portsmouth, NH website</a> for lodging suggestions. There are some great places to stay.</p>
  <br>
            <p>Since our beginning together, we’ve spent A LOT of time in Portsmouth. We love it so much, we’re staying there on our wedding night at the Ale House Inn. Downtown Portsmouth has wonderful food and fun shops. Here are some of our favorite places to grab a bite:</p>
            <ul>
              <li><a href="http://www.bngcoffee.com">Breaking New Grounds</a> - coffee and tea shop (great pastries, too!)</li>
              <li><a href="http://thefriendlytoast.com/locations/portsmouth/">The Friendly Toast</a> - unique, fun atmosphere. Often busy, but worth the yummy breakfast (which is served all day!).</li>
              <li><a href="http://popoversonthesquare.com">Popover’s on the Square</a> - café and bakery in Market Square</li>
              <li><a href="http://portsmouthbrewery.com">The Portsmouth Brewery</a> - great beer, great pub food, great atmosphere.</li>
              <li><a href="http://www.jumpinjays.com">Jumpin’ Jay’s Fish Café</a> - just so good. Make a reservation!</li>
            </ul>

            <h3>Boston, MA</h3>
            <p>We have some suggestions for places to stay if you’re heading South, towards Boston/Andover.</p>
            <ul>
              <li><a href="http://www.marriott.com/hotels/travel/mhtch-courtyard-boston-andover/">Courtyard Marriott</a></li>
              <li><a href="http://homewoodsuites3.hilton.com/en/hotels/massachusetts/homewood-suites-by-hilton-boston-andover-BOSANHW/index.html">Homewood Suites by Hilton</a></li>
              <li><a href="http://www.wyndham.com/hotels/massachusetts/andover/wyndham-boston-andover/hotel-overview#">Wyndham Boston/Andover</a></li>
            </ul>

            <p>There’s a lot to see in Boston too.</p>
            <ul>
              <li><a href="http://www.cityofboston.gov/freedomtrail/bostoncommon.asp">Boston Common</a></li>
              <li><a href="http://www.bostonducktours.com">Duck Tours</a></li>
              <li><a href="http://www.neaq.org/index.php">New England Aquarium</a></li>
            </ul>
          </div>
        </div>
				</div>
			</div>
		</div>
	</section>
  </div> <!-- // End of #main -->



</body>
</html>

