<!DOCTYPE html>
<html lang="en">

<head>
	<!--projecttitle-->
	<title>CANDISINGOSARI</title><!--projecttitle-end-->
	<!--projectdescription-->
	<meta name="description" content="Baruuuuurururuurru"><!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('CANDISINGOSARI/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('CANDISINGOSARI/style.css') }}">

	<!-- Insert this line above script imports  -->
	<script>
		if (typeof module === 'object') {
			window.module = module;
			module = undefined;
		}
	</script>

	<script src="{{ asset('CANDISINGOSARI/imagedata.js') }}"></script>
	<script src="{{ asset('CANDISINGOSARI/jquery.js') }}"></script>
	<script src="{{ asset('CANDISINGOSARI/three.min.js') }}"></script>
	<script src="{{ asset('CANDISINGOSARI/panolens.min.js') }}"></script>

	<!-- Insert this line after ascript imports -->
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
			color:
				black;
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
	<div class='customhotspot' id='CSI7copy'>
		<div onclick='chclickinfospotCSI7copy2();' id='infospotCSI7copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISINGOSARI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotCSI7copy3();' id='infospotCSI7copy3' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISINGOSARI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='PANO_20221215_101516_1'>
		<div onclick='chclickinfospotPANO_20221215_101516_12();' id='infospotPANO_20221215_101516_12' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISINGOSARI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='PANO_20221215_101154_0'></div>
	<div class='customhotspot' id='GS__1638copy'>
		<div onclick='chclickinfospotGS__1638copy2();' id='infospotGS__1638copy2' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDISINGOSARI/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
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

		var CSI7copy = new PANOLENS.ImagePanorama("{{ asset('CANDISINGOSARI/panoramas/CSI7copy.jpg') }}");
		CSI7copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CSI7copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CSI7copy.addEventListener('click', function(e) {});


		var infospotCSI7copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSI7copy0.position.set(-3684.08, -1433.91, -3046.17);
		CSI7copy.add(infospotCSI7copy0);

		infospotCSI7copy0.addEventListener('click', function() {

			ChangePanorama('PANO_20221215_101516_1');

		});

		var infospotCSI7copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCSI7copy1.position.set(-3816.32, -1294.23, 2945.37);
		CSI7copy.add(infospotCSI7copy1);

		infospotCSI7copy1.addEventListener('click', function() {

			ChangePanorama('GS__1638copy');

		});

		var infospotCSI7copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCSI7copy2.position.set(4948.65, -470.28, 509.60);
		infospotCSI7copy2.visible = false;
		CSI7copy.add(infospotCSI7copy2);

		infospotCSI7copy2.addEventListener('click', function() {

			showMedia(1, 'images/11.jpg');

		});

		var infospotCSI7copy3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCSI7copy3.position.set(-4602.32, -1869.95, -533.25);
		infospotCSI7copy3.visible = false;
		CSI7copy.add(infospotCSI7copy3);

		infospotCSI7copy3.addEventListener('click', function() {

			showMedia(1, 'images/22.jpg');

		});

		viewer.add(CSI7copy);

		var PANO_20221215_101516_1 = new PANOLENS.ImagePanorama("{{ asset('CANDISINGOSARI/panoramas/PANO_20221215_101516_1.jpg') }}");
		PANO_20221215_101516_1.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		PANO_20221215_101516_1.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		PANO_20221215_101516_1.addEventListener('click', function(e) {});


		var infospotPANO_20221215_101516_10 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221215_101516_10.position.set(3797.62, 85.52, -3239.19);
		PANO_20221215_101516_1.add(infospotPANO_20221215_101516_10);

		infospotPANO_20221215_101516_10.addEventListener('click', function() {

			ChangePanorama('CSI7copy');

		});

		var infospotPANO_20221215_101516_11 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221215_101516_11.position.set(4085.93, 40.60, 2873.10);
		PANO_20221215_101516_1.add(infospotPANO_20221215_101516_11);

		infospotPANO_20221215_101516_11.addEventListener('click', function() {

			ChangePanorama('PANO_20221215_101154_0');

		});

		var infospotPANO_20221215_101516_12 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotPANO_20221215_101516_12.position.set(4986.58, -174.08, 125.56);
		infospotPANO_20221215_101516_12.visible = false;
		PANO_20221215_101516_1.add(infospotPANO_20221215_101516_12);

		infospotPANO_20221215_101516_12.addEventListener('click', function() {

			showMedia(1, 'images/33.jpg');

		});

		viewer.add(PANO_20221215_101516_1);

		var PANO_20221215_101154_0 = new PANOLENS.ImagePanorama("{{ asset('CANDISINGOSARI/panoramas/PANO_20221215_101154_0.jpg') }}");
		PANO_20221215_101154_0.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		PANO_20221215_101154_0.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		PANO_20221215_101154_0.addEventListener('click', function(e) {});


		var infospotPANO_20221215_101154_00 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221215_101154_00.position.set(3678.34, -44.34, -3380.58);
		PANO_20221215_101154_0.add(infospotPANO_20221215_101154_00);

		infospotPANO_20221215_101154_00.addEventListener('click', function() {

			ChangePanorama('PANO_20221215_101516_1');

		});

		var infospotPANO_20221215_101154_01 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221215_101154_01.position.set(3863.14, 87.69, 3158.14);
		PANO_20221215_101154_0.add(infospotPANO_20221215_101154_01);

		infospotPANO_20221215_101154_01.addEventListener('click', function() {

			ChangePanorama('GS__1638copy');

		});

		viewer.add(PANO_20221215_101154_0);

		var GS__1638copy = new PANOLENS.ImagePanorama("{{ asset('CANDISINGOSARI/panoramas/GS__1638copy.jpg') }}");
		GS__1638copy.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		GS__1638copy.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		GS__1638copy.addEventListener('click', function(e) {});


		var infospotGS__1638copy0 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotGS__1638copy0.position.set(4209.05, 199.20, -2672.10);
		GS__1638copy.add(infospotGS__1638copy0);

		infospotGS__1638copy0.addEventListener('click', function() {

			ChangePanorama('PANO_20221215_101154_0');

		});

		var infospotGS__1638copy1 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotGS__1638copy1.position.set(3331.34, 257.07, 3714.34);
		GS__1638copy.add(infospotGS__1638copy1);

		infospotGS__1638copy1.addEventListener('click', function() {

			ChangePanorama('CSI7copy');

		});

		var infospotGS__1638copy2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotGS__1638copy2.position.set(4962.33, 397.38, 413.22);
		infospotGS__1638copy2.visible = false;
		GS__1638copy.add(infospotGS__1638copy2);

		infospotGS__1638copy2.addEventListener('click', function() {

			showMedia(1, 'images/44.jpg');

		});

		viewer.add(GS__1638copy);

		$(document).ready(function() {
			ChangePanorama('CSI7copy');
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
			if (viewer.panorama == CSI7copy) {
				ShowMyInfospot(infospotCSI7copy2, 'infospotCSI7copy2');
				ShowMyInfospot(infospotCSI7copy3, 'infospotCSI7copy3');
			}

			if (viewer.panorama == PANO_20221215_101516_1) {
				ShowMyInfospot(infospotPANO_20221215_101516_12, 'infospotPANO_20221215_101516_12');
			}

			if (viewer.panorama == PANO_20221215_101154_0) {}

			if (viewer.panorama == GS__1638copy) {
				ShowMyInfospot(infospotGS__1638copy2, 'infospotGS__1638copy2');
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
		function chclickinfospotCSI7copy2() {
			showMedia(1, "{{ asset('CANDISINGOSARI/images/11.jpg') }}");

		}

		function chclickinfospotCSI7copy3() {
			showMedia(1, "{{ asset('CANDISINGOSARI/images/22.jpg') }}");

		}

		function chclickinfospotPANO_20221215_101516_12() {
			showMedia(1, "{{ asset('CANDISINGOSARI/images/33.jpg') }}");

		}

		function chclickinfospotGS__1638copy2() {
			showMedia(1, "{{ asset('CANDISINGOSARI/images/44.jpg') }}");

		}
		/*customjs-end*/
	</script>
</body>

</html>