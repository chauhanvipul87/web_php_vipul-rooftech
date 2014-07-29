	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	<title>Roofing Sheet - FRP Decorative Art Panel and FRP Door Manufacturer and Supplier | Vipul Rooftech, Padra</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="css/theme-strawberry.css" id="template-color" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/infobox.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/selectnav.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">
	function initialize() {
		var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

		var myMapOptions = {
			 zoom: 15
			,center: secheltLoc
			,mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(49.47216, -123.76307),
			visible: true
		});

		var boxText = document.createElement("div");
		boxText.innerHTML = "<strong>Best ipsum hotel</strong><br />1400 Pennsylvania Ave,<br />Washington DC<br />www.bestipsumhotel.com";

		var myOptions = {
			 content: boxText
			,disableAutoPan: false
			,maxWidth: 0
			,pixelOffset: new google.maps.Size(-140, 0)
			,zIndex: null
			,closeBoxURL: ""
			,infoBoxClearance: new google.maps.Size(1, 1)
			,isHidden: false
			,pane: "floatPane"
			,enableEventPropagation: false
		};

		google.maps.event.addListener(marker, "click", function (e) {
			ib.open(theMap, this);
		});

		var ib = new InfoBox(myOptions);
		ib.open(theMap, marker);
	}
</script>
<script type="text/javascript">			
			/* Template Styles-----------------------------------------------------------------------------------*/

		window.console = window.console || (function(){
			var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
			return c;
		})();


		jQuery(document).ready(function($) {
	
		// Color Changer
		$(".yellow" ).click(function(){
			$("#template-color" ).attr("href", "css/theme-yellow.css" );
			return false;
		});
		
		$(".orange" ).click(function(){
			$("#template-color" ).attr("href", "css/theme-orange.css" );
			return false;
		});
		
		$(".strawberry" ).click(function(){
			$("#template-color" ).attr("href", "css/theme-strawberry.css" );
			return false;
		});
		
		$(".pink" ).click(function(){
			$("#template-color" ).attr("href", "css/theme-pink.css" );
			return false;
		});		
		
		$(".purple" ).click(function(){
			$("#template-color" ).attr("href", "css/theme-purple.css" );
			return false;
		});

		$(".blue" ).click(function(){
			$("#template-color" ).attr("href", "css/theme-blue.css" );
			return false;
		});		
		
		$(".black" ).click(function(){
			$("#template-color" ).attr("href", "css/theme-black.css" );
			return false;
		});		
		
		


		$("#template-styles h2 a").click(function(e){
			e.preventDefault();
			var div = $("#template-styles");
			console.log(div.css("left"));
			if (div.css("left") === "-135px") {
				$("#template-styles").animate({
					left: "0px"
				}); 
			} else {
				$("#template-styles").animate({
					left: "-135px"
				});
			}
		})
		

		$(".colors li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
		})
		
		$(".bg li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
			var bg = $(this).css("backgroundImage");
			$("body,.main").css("backgroundImage",bg)
		})

			

	});

	</script>
	<link rel="stylesheet" href="css/styler.css" type="text/css" media="screen,projection,print" />