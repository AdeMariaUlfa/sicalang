<!DOCTYPE html>
<html lang="en">

<head>
	<!--projecttitle-->
	<title>CANDIBADUT</title><!--projecttitle-end-->
	<!--projectdescription-->
	<meta name="description" content="Baruuuuurururuurru"><!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIBADUT/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIBADUT/style.css') }}">

	<!-- Insert this line above script imports  -->
	<script>
		if (typeof module === 'object') {
			window.module = module;
			module = undefined;
		}
	</script>

	<script src="{{ asset('CANDIBADUT/imagedata.js') }}"></script>
	<script src="{{ asset('CANDIBADUT/jquery.js') }}"></script>
	<script src="{{ asset('CANDIBADUT/three.min.js') }}"></script>
	<script src="{{ asset('CANDIBADUT/panolens.min.js') }}"></script>

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
	<div class='customhotspot' id='PANO_20221214_114518_3'></div>
	<div class='customhotspot' id='PANO_20221214_113745_1copy'></div>
	<div class='customhotspot' id='PANO_20221214_114135_2'></div>
	<div class='customhotspot' id='CANDIBADUT6'></div>
	<div class='customhotspot' id='CANDIBADUT1'></div>
	<div class='customhotspot' id='CANDIBADUT2'></div><!--customhtml-end-->

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

		var PANO_20221214_114518_3 = new PANOLENS.ImagePanorama("{{ asset('CANDIBADUT/panoramas/PANO_20221214_114518_3.jpg') }}");
		PANO_20221214_114518_3.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		PANO_20221214_114518_3.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		PANO_20221214_114518_3.addEventListener('click', function(e) {});


		var infospotPANO_20221214_114518_30 = new PANOLENS.Infospot(512, hotspotIcons[9].data, true);
		infospotPANO_20221214_114518_30.position.set(4936.32, 264.48, 685.42);
		PANO_20221214_114518_3.add(infospotPANO_20221214_114518_30);

		infospotPANO_20221214_114518_30.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_113745_1copy');

		});

		var infospotPANO_20221214_114518_31 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_114518_31.position.set(4204.55, -169.20, -2681.18);
		PANO_20221214_114518_3.add(infospotPANO_20221214_114518_31);

		infospotPANO_20221214_114518_31.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_114135_2');

		});

		var infospotPANO_20221214_114518_32 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_114518_32.position.set(2428.42, -160.06, 4359.55);
		PANO_20221214_114518_3.add(infospotPANO_20221214_114518_32);

		infospotPANO_20221214_114518_32.addEventListener('click', function() {

			ChangePanorama('CANDIBADUT1');

		});

		viewer.add(PANO_20221214_114518_3);

		var PANO_20221214_113745_1copy = new PANOLENS.ImagePanorama("{{ asset('CANDIBADUT/panoramas/PANO_20221214_113745_1copy.jpg') }}");
		PANO_20221214_113745_1copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		PANO_20221214_113745_1copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		PANO_20221214_113745_1copy.addEventListener('click', function(e) {});


		var infospotPANO_20221214_113745_1copy0 = new PANOLENS.Infospot(512, hotspotIcons[10].data, true);
		infospotPANO_20221214_113745_1copy0.position.set(4876.87, -381.76, -1031.37);
		PANO_20221214_113745_1copy.add(infospotPANO_20221214_113745_1copy0);

		infospotPANO_20221214_113745_1copy0.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_114518_3');

		});

		viewer.add(PANO_20221214_113745_1copy);

		var PANO_20221214_114135_2 = new PANOLENS.ImagePanorama("{{ asset('CANDIBADUT/panoramas/PANO_20221214_114135_2.jpg') }}");
		PANO_20221214_114135_2.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		PANO_20221214_114135_2.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		PANO_20221214_114135_2.addEventListener('click', function(e) {});


		var infospotPANO_20221214_114135_20 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_114135_20.position.set(2876.19, -47.76, 4083.59);
		PANO_20221214_114135_2.add(infospotPANO_20221214_114135_20);

		infospotPANO_20221214_114135_20.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_114518_3');

		});

		var infospotPANO_20221214_114135_21 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_114135_21.position.set(3825.92, -132.79, -3201.30);
		PANO_20221214_114135_2.add(infospotPANO_20221214_114135_21);

		infospotPANO_20221214_114135_21.addEventListener('click', function() {

			ChangePanorama('CANDIBADUT6');

		});

		viewer.add(PANO_20221214_114135_2);

		var CANDIBADUT6 = new PANOLENS.ImagePanorama("{{ asset('CANDIBADUT/panoramas/CANDIBADUT6.jpg') }}");
		CANDIBADUT6.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CANDIBADUT6.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CANDIBADUT6.addEventListener('click', function(e) {});


		var infospotCANDIBADUT60 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT60.position.set(2774.31, -32.15, 4150.49);
		CANDIBADUT6.add(infospotCANDIBADUT60);

		infospotCANDIBADUT60.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_114135_2');

		});

		var infospotCANDIBADUT61 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT61.position.set(2392.39, -193.61, -4376.43);
		CANDIBADUT6.add(infospotCANDIBADUT61);

		infospotCANDIBADUT61.addEventListener('click', function() {

			ChangePanorama('CANDIBADUT1');

		});

		viewer.add(CANDIBADUT6);

		var CANDIBADUT1 = new PANOLENS.ImagePanorama("{{ asset('CANDIBADUT/panoramas/CANDIBADUT1.jpg') }}");
		CANDIBADUT1.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CANDIBADUT1.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CANDIBADUT1.addEventListener('click', function(e) {});


		var infospotCANDIBADUT10 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT10.position.set(4879.07, -673.45, 802.43);
		CANDIBADUT1.add(infospotCANDIBADUT10);

		infospotCANDIBADUT10.addEventListener('click', function() {

			ChangePanorama('CANDIBADUT2');

		});

		var infospotCANDIBADUT11 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT11.position.set(4484.73, -396.08, -2161.69);
		CANDIBADUT1.add(infospotCANDIBADUT11);

		infospotCANDIBADUT11.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_114518_3');

		});

		var infospotCANDIBADUT12 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT12.position.set(3428.12, -328.56, 3615.02);
		CANDIBADUT1.add(infospotCANDIBADUT12);

		infospotCANDIBADUT12.addEventListener('click', function() {

			ChangePanorama('CANDIBADUT6');

		});

		viewer.add(CANDIBADUT1);

		var CANDIBADUT2 = new PANOLENS.ImagePanorama("{{ asset('CANDIBADUT/panoramas/CANDIBADUT2.jpg') }}");
		CANDIBADUT2.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CANDIBADUT2.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CANDIBADUT2.addEventListener('click', function(e) {});


		var infospotCANDIBADUT20 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT20.position.set(-4914.85, -836.55, -243.84);
		CANDIBADUT2.add(infospotCANDIBADUT20);

		infospotCANDIBADUT20.addEventListener('click', function() {

			ChangePanorama('CANDIBADUT1');

		});

		var infospotCANDIBADUT21 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT21.position.set(2684.01, 111.04, -4205.44);
		CANDIBADUT2.add(infospotCANDIBADUT21);

		infospotCANDIBADUT21.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_114518_3');

		});

		var infospotCANDIBADUT22 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIBADUT22.position.set(2233.13, 129.85, 4460.39);
		CANDIBADUT2.add(infospotCANDIBADUT22);

		infospotCANDIBADUT22.addEventListener('click', function() {

			ChangePanorama('CANDIBADUT6');

		});

		viewer.add(CANDIBADUT2);

		$(document).ready(function() {
			ChangePanorama('PANO_20221214_114518_3');
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
			if (viewer.panorama == PANO_20221214_114518_3) {}

			if (viewer.panorama == PANO_20221214_113745_1copy) {}

			if (viewer.panorama == PANO_20221214_114135_2) {}

			if (viewer.panorama == CANDIBADUT6) {}

			if (viewer.panorama == CANDIBADUT1) {}

			if (viewer.panorama == CANDIBADUT2) {}
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
		/*customjs-end*/
	</script>
	
</body>

</html>