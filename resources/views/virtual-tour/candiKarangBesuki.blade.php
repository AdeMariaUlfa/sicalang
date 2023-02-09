<!DOCTYPE html>
<html lang="en">

<head>
	<!--projecttitle-->
	<title>CANDIKARANGBESUKI</title><!--projecttitle-end-->
	<!--projectdescription-->
	<meta name="description" content="Baruuuuurururuurru"><!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIKARANGBESUKI/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIKARANGBESUKI/style.css') }}">

	<!-- Insert this line above script imports  -->
	<script>
		if (typeof module === 'object') {
			window.module = module;
			module = undefined;
		}
	</script>

	<script src="{{ asset('CANDIKARANGBESUKI/imagedata.js') }}"></script>
	<script src="{{ asset('CANDIKARANGBESUKI/jquery.js') }}"></script>
	<script src="{{ asset('CANDIKARANGBESUKI/three.min.js') }}"></script>
	<script src="{{ asset('CANDIKARANGBESUKI/panolens.min.js') }}"></script>

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
	<div class='customhotspot' id='CKB1copy'></div>
	<div class='customhotspot' id='CKB2copy'></div>
	<div class='customhotspot' id='CKB3copy'>
		<div onclick='chclickinfospotCKB3copy2();' id='infospotCKB3copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKARANGBESUKI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CKB4copy'>
		<div onclick='chclickinfospotCKB4copy2();' id='infospotCKB4copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIKARANGBESUKI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
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

		var CKB1copy = new PANOLENS.ImagePanorama("{{ asset('CANDIKARANGBESUKI/panoramas/CKB1copy.jpg') }}");
		CKB1copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CKB1copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CKB1copy.addEventListener('click', function(e) {});


		var infospotCKB1copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB1copy0.position.set(4423.34, -1104.33, -2040.69);
		CKB1copy.add(infospotCKB1copy0);

		infospotCKB1copy0.addEventListener('click', function() {

			ChangePanorama('CKB2copy');

		});

		var infospotCKB1copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB1copy1.position.set(2663.48, -436.33, 4199.40);
		CKB1copy.add(infospotCKB1copy1);

		infospotCKB1copy1.addEventListener('click', function() {

			ChangePanorama('CKB4copy');

		});

		viewer.add(CKB1copy);

		var CKB2copy = new PANOLENS.ImagePanorama("{{ asset('CANDIKARANGBESUKI/panoramas/CKB2copy.jpg') }}");
		CKB2copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CKB2copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CKB2copy.addEventListener('click', function(e) {});


		var infospotCKB2copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB2copy0.position.set(3664.54, -68.41, 3393.04);
		CKB2copy.add(infospotCKB2copy0);

		infospotCKB2copy0.addEventListener('click', function() {

			ChangePanorama('CKB1copy');

		});

		var infospotCKB2copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB2copy1.position.set(3847.33, -93.84, -3177.29);
		CKB2copy.add(infospotCKB2copy1);

		infospotCKB2copy1.addEventListener('click', function() {

			ChangePanorama('CKB3copy');

		});

		viewer.add(CKB2copy);

		var CKB3copy = new PANOLENS.ImagePanorama("{{ asset('CANDIKARANGBESUKI/panoramas/CKB3copy.jpg') }}");
		CKB3copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CKB3copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CKB3copy.addEventListener('click', function(e) {});


		var infospotCKB3copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB3copy0.position.set(4062.65, -671.07, 2823.12);
		CKB3copy.add(infospotCKB3copy0);

		infospotCKB3copy0.addEventListener('click', function() {

			ChangePanorama('CKB2copy');

		});

		var infospotCKB3copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB3copy1.position.set(4109.93, -634.70, -2758.20);
		CKB3copy.add(infospotCKB3copy1);

		infospotCKB3copy1.addEventListener('click', function() {

			ChangePanorama('CKB4copy');

		});

		var infospotCKB3copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCKB3copy2.position.set(4708.69, -1623.71, -335.59);
		infospotCKB3copy2.visible = false;
		CKB3copy.add(infospotCKB3copy2);

		infospotCKB3copy2.addEventListener('click', function() {

			showMedia(1, "{{ asset('CANDIKARANGBESUKI/images/1.jpg') }}");

		});

		viewer.add(CKB3copy);

		var CKB4copy = new PANOLENS.ImagePanorama("{{ asset('CANDIKARANGBESUKI/panoramas/CKB4copy.jpg') }}");
		CKB4copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CKB4copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CKB4copy.addEventListener('click', function(e) {});


		var infospotCKB4copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB4copy0.position.set(2905.62, -663.11, 4010.20);
		CKB4copy.add(infospotCKB4copy0);

		infospotCKB4copy0.addEventListener('click', function() {

			ChangePanorama('CKB3copy');

		});

		var infospotCKB4copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCKB4copy1.position.set(4449.22, -354.55, -2235.62);
		CKB4copy.add(infospotCKB4copy1);

		infospotCKB4copy1.addEventListener('click', function() {

			ChangePanorama('CKB1copy');

		});

		var infospotCKB4copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCKB4copy2.position.set(4614.54, -1435.96, 1244.87);
		infospotCKB4copy2.visible = false;
		CKB4copy.add(infospotCKB4copy2);

		infospotCKB4copy2.addEventListener('click', function() {

			showMedia(1, "{{ asset('CANDIKARANGBESUKI/images/2.jpg') }}");

		});

		viewer.add(CKB4copy);

		$(document).ready(function() {
			ChangePanorama('CKB3copy');
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
			if (viewer.panorama == CKB1copy) {}

			if (viewer.panorama == CKB2copy) {}

			if (viewer.panorama == CKB3copy) {
				ShowMyInfospot(infospotCKB3copy2, 'infospotCKB3copy2');
			}

			if (viewer.panorama == CKB4copy) {
				ShowMyInfospot(infospotCKB4copy2, 'infospotCKB4copy2');
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
		function chclickinfospotCKB3copy2() {
			showMedia(1, "{{ asset('CANDIKARANGBESUKI/images/1.jpg') }}");

		}

		function chclickinfospotCKB4copy2() {
			showMedia(1, "{{ asset('CANDIKARANGBESUKI/images/2.jpg') }}");

		}
		/*customjs-end*/
	</script>

</body>

</html>