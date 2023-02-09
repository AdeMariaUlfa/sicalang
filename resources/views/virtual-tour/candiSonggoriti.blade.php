<!DOCTYPE html>
<html lang="en">

<head>
	<!--projecttitle-->
	<title>CANDISONGORITI</title><!--projecttitle-end-->
	<!--projectdescription-->
	<meta name="description" content="Baruuuuurururuurru"><!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('CANDISONGGORITI/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('CANDISONGGORITI/style.css') }}">

	<!-- Insert this line above script imports  -->
	<script>
		if (typeof module === 'object') {
			window.module = module;
			module = undefined;
		}
	</script>

	<script src="{{ asset('CANDISONGGORITI/imagedata.js') }}"></script>
	<script src="{{ asset('CANDISONGGORITI/jquery.js') }}"></script>
	<script src="{{ asset('CANDISONGGORITI/three.min.js') }}"></script>
	<script src="{{ asset('CANDISONGGORITI/panolens.min.js') }}"></script>

	<!-- Insert this line after script imports -->
	<script>
		if (window.module) module = window.module;
	</script>

	<style>
		/* SCROLLBAR STYLING */
		/* width */
		::-webkit-scrollbar {
			width: 0.25em;
			height: 0.25em;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: #2c3643;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #0d9e59;
			transition: background .5s;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #00e075;
		}


		html,
		body {
			margin: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			background-color: #000;
			color: black;
		}

		a:link,
		a:visited {
			color: #bdc3c7;
		}

		.fullwrapper {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: black;
		}

		#container {
			width: 100%;
			height: 100%;
		}

		#tmp {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			padding: 3em;
			background-color: rgba(0, 0, 0, .5);
			backdrop-filter: blur(5px);
			display: none;
		}
	</style>
</head>

<body id="body">
	@extends('layouts.template')
	@section('content')
	<div id="container" style="color: black;"></div>



	<!--customhtml-->
	<div class='customhotspot' id='CSONGGORITI1copy'>
		<div onclick='chclickinfospotCSONGGORITI1copy2();' id='infospotCSONGGORITI1copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISONGGORITI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CSONGGORITI2copy'>
		<div onclick='chclickinfospotCSONGGORITI2copy2();' id='infospotCSONGGORITI2copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISONGGORITI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CSONGGORITI3copy'>
		<div onclick='chclickinfospotCSONGGORITI3copy2();' id='infospotCSONGGORITI3copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISONGGORITI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CSONGGORITI4copy'></div><!--customhtml-end-->

	<div id="tmp">
		<div style="width: 100%; height: 100%; overflow: hidden; overflow-y: auto; box-sizing: border-box; position: relative;" id="tmpcontent"></div>
		<div class="mediaclosebutton" onclick="hideTemp()"><i class="fa fa-times-circle"></i></div>
	</div>


	<div id="loading" class="fullwrapper" style="display: table; width: 100%; height: 100%;">
		<div style="display: table-cell; vertical-align: middle; text-align: center; color: white; font-size: 30px; padding: 50px;">
			<!--loadingtext-->Loading...<!--loadingtext-end-->
		</div>
	</div>
	@endsection
	<script>
		var container = document.querySelector('#container');
		/*panolens*/

		var viewer = new PANOLENS.Viewer({
			container: container,
			controlBar: false,
			output: 'console',
			autoHideInfospot: false,
		});

		/*panolens-end*/

		viewer.addUpdateCallback(function() {});

		/*panoramas*/

		var CSONGGORITI1copy = new PANOLENS.ImagePanorama("{{ asset('CANDISONGGORITI/panoramas/CSONGGORITI1copy.jpg') }}");
		CSONGGORITI1copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSONGGORITI1copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSONGGORITI1copy.addEventListener('click', function(e) {});


		var infospotCSONGGORITI1copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI1copy0.position.set(3226.28, -886.18, -3706.71);
		CSONGGORITI1copy.add(infospotCSONGGORITI1copy0);

		infospotCSONGGORITI1copy0.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI2copy');

		});

		var infospotCSONGGORITI1copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI1copy1.position.set(3259.13, -255.37, 3772.89);
		CSONGGORITI1copy.add(infospotCSONGGORITI1copy1);

		infospotCSONGGORITI1copy1.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI4copy');

		});

		var infospotCSONGGORITI1copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCSONGGORITI1copy2.position.set(4895.07, -979.04, 80.47);
		infospotCSONGGORITI1copy2.visible = false;
		CSONGGORITI1copy.add(infospotCSONGGORITI1copy2);

		infospotCSONGGORITI1copy2.addEventListener('click', function() {

			showMedia(1, 'images/1.jpg');

		});

		viewer.add(CSONGGORITI1copy);

		var CSONGGORITI2copy = new PANOLENS.ImagePanorama("{{ asset('CANDISONGGORITI/panoramas/CSONGGORITI2copy.jpg') }}");
		CSONGGORITI2copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSONGGORITI2copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSONGGORITI2copy.addEventListener('click', function(e) {});


		var infospotCSONGGORITI2copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI2copy0.position.set(4159.61, -679.69, -2671.95);
		CSONGGORITI2copy.add(infospotCSONGGORITI2copy0);

		infospotCSONGGORITI2copy0.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI3copy');

		});

		var infospotCSONGGORITI2copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI2copy1.position.set(2581.24, -301.38, 4263.27);
		CSONGGORITI2copy.add(infospotCSONGGORITI2copy1);

		infospotCSONGGORITI2copy1.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI1copy');

		});

		var infospotCSONGGORITI2copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCSONGGORITI2copy2.position.set(4669.25, 1512.94, 933.64);
		infospotCSONGGORITI2copy2.visible = false;
		CSONGGORITI2copy.add(infospotCSONGGORITI2copy2);

		infospotCSONGGORITI2copy2.addEventListener('click', function() {

			showMedia(1, 'images/3.jpg');

		});

		viewer.add(CSONGGORITI2copy);

		var CSONGGORITI3copy = new PANOLENS.ImagePanorama("{{ asset('CANDISONGGORITI/panoramas/CSONGGORITI3copy.jpg') }}");
		CSONGGORITI3copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSONGGORITI3copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSONGGORITI3copy.addEventListener('click', function(e) {});


		var infospotCSONGGORITI3copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI3copy0.position.set(1777.43, -916.82, 4571.60);
		CSONGGORITI3copy.add(infospotCSONGGORITI3copy0);

		infospotCSONGGORITI3copy0.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI2copy');

		});

		var infospotCSONGGORITI3copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI3copy1.position.set(2691.94, -673.84, -4147.45);
		CSONGGORITI3copy.add(infospotCSONGGORITI3copy1);

		infospotCSONGGORITI3copy1.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI4copy');

		});

		var infospotCSONGGORITI3copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCSONGGORITI3copy2.position.set(4608.54, 1738.34, -803.95);
		infospotCSONGGORITI3copy2.visible = false;
		CSONGGORITI3copy.add(infospotCSONGGORITI3copy2);

		infospotCSONGGORITI3copy2.addEventListener('click', function() {

			showMedia(1, 'images/2.jpg');

		});

		viewer.add(CSONGGORITI3copy);

		var CSONGGORITI4copy = new PANOLENS.ImagePanorama("{{ asset('CANDISONGGORITI/panoramas/CSONGGORITI4copy.jpg') }}");
		CSONGGORITI4copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSONGGORITI4copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSONGGORITI4copy.addEventListener('click', function(e) {});


		var infospotCSONGGORITI4copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI4copy0.position.set(2790.91, -1476.17, -3872.96);
		CSONGGORITI4copy.add(infospotCSONGGORITI4copy0);

		infospotCSONGGORITI4copy0.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI1copy');

		});

		var infospotCSONGGORITI4copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSONGGORITI4copy1.position.set(1988.82, -1347.50, 4378.77);
		CSONGGORITI4copy.add(infospotCSONGGORITI4copy1);

		infospotCSONGGORITI4copy1.addEventListener('click', function() {

			ChangePanorama('CSONGGORITI1copy');

		});

		viewer.add(CSONGGORITI4copy);

		$(document).ready(function() {
			ChangePanorama('CSONGGORITI1copy');
		});


		/*panoramas-end*/


		function hideTemp() {
			$("#tmp").fadeOut();
			setTimeout(function() {
				$("#tmpcontent").html("");
			}, 1000);
		}

		function showMedia(type, content) {
			switch (type) {
				case 1:
					//Image
					$("#tmpcontent").html("<img src='" + content + "' style='width: 100%;'>");
					$("#tmp").fadeIn();
					break;
				case 2:
					//Video
					$("#tmpcontent").html("<video id='webvideo' controls autoplay style='width: 100%; height: 100%;'><source src='" + content + "' type='video/mp4'> Your browser does not support the video tag. </video>");
					$("#tmp").fadeIn();
					break;
				case 3:
					//Audio
					$("#tmpcontent").html("<audio controls style='width: 100%;'><source src='" + content + "' type='audio/ogg'>Your browser does not support the audio tag.</audio>");
					$("#tmp").fadeIn();
					break;
				case 4:
					//PDF
					$("#tmpcontent").html("<iframe src='pdfjs/web/viewer.html?file=../../" + content + "' style='width: 100%; height: 99%;'></iframe>");
					$("#tmp").fadeIn();
					break;
			}
		}



		//Update Callback
		viewer.addUpdateCallback(function() {

			/*viewerupdatecallback*/
			if (viewer.panorama == CSONGGORITI1copy) {
				ShowMyInfospot(infospotCSONGGORITI1copy2, 'infospotCSONGGORITI1copy2');
			}

			if (viewer.panorama == CSONGGORITI2copy) {
				ShowMyInfospot(infospotCSONGGORITI2copy2, 'infospotCSONGGORITI2copy2');
			}

			if (viewer.panorama == CSONGGORITI3copy) {
				ShowMyInfospot(infospotCSONGGORITI3copy2, 'infospotCSONGGORITI3copy2');
			}

			if (viewer.panorama == CSONGGORITI4copy) {}
			/*viewerupdatecallback-end*/


		});



		var hotspotsvisible = true;

		function ShowMyInfospot(hs, elid) {
			var thehs = toScreenPosition(hs);
			if (thehs.z < 1) {
				$("#" + elid).css({
					"top": (thehs.y - ($("#" + elid).height() / 2)) + "px",
					"left": (thehs.x - ($("#" + elid).width() / 2)) + "px",
				});
				if (hotspotsvisible)
					$("#" + elid).show();
			} else {
				$("#" + elid).hide();
			}

		}

		function toScreenPosition(obj) {
			var vector = new THREE.Vector3();
			var widthHalf = 0.5 * innerWidth;
			var heightHalf = 0.5 * innerHeight;

			//obj.updateMatrixWorld();				
			vector.setFromMatrixPosition(obj.matrixWorld);


			vector.project(viewer.camera);

			vector.x = (vector.x * widthHalf) + widthHalf;
			vector.y = -(vector.y * heightHalf) + heightHalf;


			return {
				x: vector.x,
				y: vector.y,
				z: vector.z,
			};

		};

		var currentPanorama;

		function ChangePanorama(panorama) {
			currentPanorama = panorama;
			HideInfospots();
			$("#loading").fadeIn();
			//$(".customhotspot").fadeOut();
			setTimeout(function() {
				viewer.setPanorama(window[panorama]);
			}, 100);
			setTimeout(function() {
				$("#" + panorama).fadeIn();
				$("#loading").fadeOut();
			}, 1000);

		}



		function HideInfospots() {
			$(".customhotspot").fadeOut();
		}

		/*customjs*/
		function chclickinfospotCSONGGORITI1copy2() {
			showMedia(1, "{{ asset('CANDISONGGORITI/images/1.jpg') }}");

		}

		function chclickinfospotCSONGGORITI2copy2() {
			showMedia(1, "{{ asset('CANDISONGGORITI/images/3.jpg') }}");

		}

		function chclickinfospotCSONGGORITI3copy2() {
			showMedia(1, "{{ asset('CANDISONGGORITI/images/2.jpg') }}");

		}
		/*customjs-end*/
	</script>

</body>

</html>