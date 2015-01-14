<!DOCTYPE html>
<!-- Camera is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Camera | a free jQuery slideshow by Pixedelic</title> 
    <meta name="description" content="Camera a free jQuery slideshow with many effects, transitions, adaptive layout, easy to customize, using canvas and mobile ready"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 
    <style>
		html,body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			background: rgba(255,255,255,.9);
			clear: both;
			display: block;
			height: 40px;
			line-height: 40px;
			padding: 20px;
			position: relative;
			z-index: 1;
		}
		.fluid_container {
			bottom: 0;
			height: 100%;
			left: 0;
			position: fixed;
			right: 0;
			top: 0;
			z-index: 0;
			background:transparent;
			background-color:transparent;
		}
		#camera_wrap_4 {
			bottom: 0;
			height: 100%;
			left: 0;
			margin-bottom: 0!important;
			position: fixed;
			right: 0;
			top: 0;
			border-color:transparent;
		}
		.camera_bar {
			z-index: 2;
		}
		.camera_thumbs {
			margin-top: -100px;
			position: relative;
			z-index: 1;
		}
		.camera_thumbs_cont {
			border-radius: 0;
			-moz-border-radius: 0;
			-webkit-border-radius: 0;
		}
		.camera_overlayer {
			opacity: .1;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
    <script type='text/javascript' src='../scripts/jquery.min.js'></script>
    <script type='text/javascript' src='../scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../scripts/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: 'auto',
				loader: 'bar',
				pagination: true,
				thumbnails: false
			});

		});
	</script>
 
</head>
<body>
    
	<div class="fluid_container">
        <div class="camera_wrap camera_blue_skin" id="camera_wrap_4">
            <?php
$slides = array(
            '<div data-src="http://www.bargainhuntermagazine.ca/photos/7055243513-Armoire-cat95-2323.jpg">
                <div class="camera_caption fadeFromBottom">
                  BEAUTIFUL NEW ARMOIRE, never used, solid wood, 75&quot;h x 37&quot;w x 18&quot;d, cedar-lined bottom drawer, behind the bevelled mirror are 1 adjustable shelf &amp; 3 drawers, Asking $550 or reasonable offer, Call for further information
                </div>
            </div>',
            '<div data-src="http://www.bargainhuntermagazine.ca/photos/7055243738-85Camaro-cat531-2030.jpg">
                <div class="camera_caption fadeFromBottom">
                  85 CAMARO Z28, 5spd, T-Tops, 305 w/ mild cam, special interior, 100,000km, has seen no winters, Appraised at $9,000, Call
                </div>
            </div>',
            '<div data-src="http://www.bargainhuntermagazine.ca/photos/7056730111-1979MazdaRX7-cat511-2327.jpg">
                <div class="camera_caption fadeFromBottom">
                    1979 MAZDA RX7, 48,000 original miles, selling certified, ASKING $3,000, CERT, Please Call
                </div>
            </div>',
            '<div data-src="http://www.bargainhuntermagazine.ca/photos/7055243513-SpencerFurnitureLoveseat-cat95-2323.jpg">
                <div class="camera_caption fadeFromBottom">
                  NEW HIGH QUALITY LEATHER LOVESEAT from Spencer Furniture, off white in colour, never used, great accent piece $720, Call for further information
                </div>
            </div>'
);
shuffle($slides);
foreach ($slides as $slides) {
    echo "$slides\n";
}
?>
        </div><!-- #camera_random -->

    </div><!-- .fluid_container -->
    
</body> 
</html>