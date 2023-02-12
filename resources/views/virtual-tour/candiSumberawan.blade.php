<!DOCTYPE html>
<html lang="en">

<head>
	<!--projecttitle-->
	<title>CANDISUMBERAWAN</title><!--projecttitle-end-->
	<!--projectdescription-->
	<meta name="description" content="Baruuuuurururuurru"><!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('CANDISUMBERAWAN/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('CANDISUMBERAWAN/style.css') }}">

	<!-- Insert this line above script imports  -->
	<script>
		if (typeof module === 'object') {
			window.module = module;
			module = undefined;
		}
	</script>

	<script src="{{ asset('CANDISUMBERAWAN/imagedata.js') }}"></script>
	<script src="{{ asset('CANDISUMBERAWAN/jquery.js') }}"></script>
	<script src="{{ asset('CANDISUMBERAWAN/three.min.js') }}"></script>
	<script src="{{ asset('CANDISUMBERAWAN/panolens.min.js') }}"></script>

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
	@extends('layouts.template-virtual')
	@section('content')
	<div id="container" style="color: black;"></div>



	<!--customhtml-->
	<div class='customhotspot' id='CSUM1copy'></div>
	<div class='customhotspot' id='CSUM2copy'></div>
	<div class='customhotspot' id='CSUM3copy'>
		<div onclick='chclickinfospotCSUM3copy2();' id='infospotCSUM3copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISUMBERAWAN/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CSUM4copy'></div>
	<div class='customhotspot' id='CSUM6copy'>
		<div onclick='chclickinfospotCSUM6copy2();' id='infospotCSUM6copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISUMBERAWAN/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div><!--customhtml-end-->

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

		var CSUM1copy = new PANOLENS.ImagePanorama("{{ asset('CANDISUMBERAWAN/panoramas/CSUM1copy.jpg') }}");
		CSUM1copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSUM1copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSUM1copy.addEventListener('click', function(e) {});


		var infospotCSUM1copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM1copy0.position.set(4646.74, 535.04, 1737.81);
		CSUM1copy.add(infospotCSUM1copy0);

		infospotCSUM1copy0.addEventListener('click', function() {

			ChangePanorama('CSUM2copy');

		});

		viewer.add(CSUM1copy);

		var CSUM2copy = new PANOLENS.ImagePanorama("{{ asset('CANDISUMBERAWAN/panoramas/CSUM2copy.jpg') }}");
		CSUM2copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSUM2copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSUM2copy.addEventListener('click', function(e) {});


		var infospotCSUM2copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM2copy0.position.set(-1791.31, -185.44, -4652.97);
		CSUM2copy.add(infospotCSUM2copy0);

		infospotCSUM2copy0.addEventListener('click', function() {

			ChangePanorama('CSUM1copy');

		});

		var infospotCSUM2copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM2copy1.position.set(4667.37, -675.63, 1637.70);
		CSUM2copy.add(infospotCSUM2copy1);

		infospotCSUM2copy1.addEventListener('click', function() {

			ChangePanorama('CSUM3copy');

		});

		var infospotCSUM2copy2 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM2copy2.position.set(2583.39, -745.76, -4207.81);
		CSUM2copy.add(infospotCSUM2copy2);

		infospotCSUM2copy2.addEventListener('click', function() {

			ChangePanorama('CSUM6copy');

		});

		viewer.add(CSUM2copy);

		var CSUM3copy = new PANOLENS.ImagePanorama("{{ asset('CANDISUMBERAWAN/panoramas/CSUM3copy.jpg') }}");
		CSUM3copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSUM3copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSUM3copy.addEventListener('click', function(e) {});


		var infospotCSUM3copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM3copy0.position.set(2786.65, -1170.66, -3978.32);
		CSUM3copy.add(infospotCSUM3copy0);

		infospotCSUM3copy0.addEventListener('click', function() {

			ChangePanorama('CSUM2copy');

		});

		var infospotCSUM3copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM3copy1.position.set(2208.95, -1086.79, 4341.52);
		CSUM3copy.add(infospotCSUM3copy1);

		infospotCSUM3copy1.addEventListener('click', function() {

			ChangePanorama('CSUM4copy');

		});

		var infospotCSUM3copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCSUM3copy2.position.set(4534.15, -2034.90, 503.81);
		infospotCSUM3copy2.visible = false;
		CSUM3copy.add(infospotCSUM3copy2);

		infospotCSUM3copy2.addEventListener('click', function() {

			showMedia(1, 'images/i.jpg');

		});

		viewer.add(CSUM3copy);

		var CSUM4copy = new PANOLENS.ImagePanorama("{{ asset('CANDISUMBERAWAN/panoramas/CSUM4copy.jpg') }}");
		CSUM4copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSUM4copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSUM4copy.addEventListener('click', function(e) {});


		var infospotCSUM4copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM4copy0.position.set(2460.47, -1042.21, -4220.91);
		CSUM4copy.add(infospotCSUM4copy0);

		infospotCSUM4copy0.addEventListener('click', function() {

			ChangePanorama('CSUM3copy');

		});

		var infospotCSUM4copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM4copy1.position.set(2302.87, -935.31, 4327.44);
		CSUM4copy.add(infospotCSUM4copy1);

		infospotCSUM4copy1.addEventListener('click', function() {

			ChangePanorama('CSUM6copy');

		});

		viewer.add(CSUM4copy);

		var CSUM6copy = new PANOLENS.ImagePanorama("{{ asset('CANDISUMBERAWAN/panoramas/CSUM6copy.jpg') }}");
		CSUM6copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSUM6copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSUM6copy.addEventListener('click', function(e) {});


		var infospotCSUM6copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM6copy0.position.set(-4113.06, -571.83, 2767.04);
		CSUM6copy.add(infospotCSUM6copy0);

		infospotCSUM6copy0.addEventListener('click', function() {

			ChangePanorama('CSUM4copy');

		});

		var infospotCSUM6copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSUM6copy1.position.set(2303.70, -371.21, -4413.80);
		CSUM6copy.add(infospotCSUM6copy1);

		infospotCSUM6copy1.addEventListener('click', function() {

			ChangePanorama('CSUM1copy');

		});

		var infospotCSUM6copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCSUM6copy2.position.set(4707.08, -1603.97, -498.22);
		infospotCSUM6copy2.visible = false;
		CSUM6copy.add(infospotCSUM6copy2);

		infospotCSUM6copy2.addEventListener('click', function() {

			showMedia(1, 'images/2.jpg');

		});

		viewer.add(CSUM6copy);

		$(document).ready(function() {
			ChangePanorama('CSUM1copy');
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
			if (viewer.panorama == CSUM1copy) {}

			if (viewer.panorama == CSUM2copy) {}

			if (viewer.panorama == CSUM3copy) {
				ShowMyInfospot(infospotCSUM3copy2, 'infospotCSUM3copy2');
			}

			if (viewer.panorama == CSUM4copy) {}

			if (viewer.panorama == CSUM6copy) {
				ShowMyInfospot(infospotCSUM6copy2, 'infospotCSUM6copy2');
			}
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
		function chclickinfospotCSUM3copy2() {
			showMedia(1, "{{ asset('CANDISUMBERAWAN/images/i.jpg') }}");

		}

		function chclickinfospotCSUM6copy2() {
			showMedia(1, "{{ asset('CANDISUMBERAWAN/images/2.jpg') }}");

		}
		/*customjs-end*/
	</script>

</body>

</html>