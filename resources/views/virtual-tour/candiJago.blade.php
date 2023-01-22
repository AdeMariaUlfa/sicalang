<!DOCTYPE html>
<html lang="en">

<head>
	<!--projecttitle-->
	<title>CANDIJAGO</title><!--projecttitle-end-->
	<!--projectdescription-->
	<meta name="description" content="Baruuuuurururuurru"><!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIJAGO/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('CANDIJAGO/style.css') }}">

	<!-- Insert this line above script imports  -->
	<script>
		if (typeof module === 'object') {
			window.module = module;
			module = undefined;
		}
	</script>

	<script src="{{ asset('CANDIJAGO/imagedata.js') }}"></script>
	<script src="{{ asset('CANDIJAGO/jquery.js') }}"></script>
	<script src="{{ asset('CANDIJAGO/three.min.js') }}"></script>
	<script src="{{ asset('CANDIJAGO/panolens.min.js') }}"></script>

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
	<div id="container" style="color: black;"></div>



	<!--customhtml-->
	<div class='customhotspot' id='PANO_20221214_103634_1'>
		<div onclick='chclickinfospotPANO_20221214_103634_12();' id='infospotPANO_20221214_103634_12' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIJAGO/customhotspots/Lokasi.png') }}" style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotPANO_20221214_103634_13();' id='infospotPANO_20221214_103634_13' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIJAGO/customhotspots/Introduction.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='PANO_20221214_103229_0'>
		<div onclick='chclickinfospotPANO_20221214_103229_02();' id='infospotPANO_20221214_103229_02' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIJAGO/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CJAGO7'>
		<div onclick='chclickinfospotCJAGO72();' id='infospotCJAGO72' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIJAGO/customhotspots/Video.png') }}" style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='CANDIJAGO7'>
		<div onclick='chclickinfospotCANDIJAGO72();' id='infospotCANDIJAGO72' style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src="{{ asset('CANDIJAGO/customhotspots/Info.png') }}" style='width: 64px; height: 64px;'></div>
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

		var PANO_20221214_103634_1 = new PANOLENS.ImagePanorama("{{ asset('CANDIJAGO/panoramas/PANO_20221214_103634_1.jpg') }}");
		PANO_20221214_103634_1.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		PANO_20221214_103634_1.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		PANO_20221214_103634_1.addEventListener('click', function(e) {});


		var infospotPANO_20221214_103634_10 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_103634_10.position.set(4353.59, 260.42, -2431.44);
		PANO_20221214_103634_1.add(infospotPANO_20221214_103634_10);

		infospotPANO_20221214_103634_10.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_103229_0');

		});

		var infospotPANO_20221214_103634_11 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_103634_11.position.set(3892.51, 103.34, 3120.89);
		PANO_20221214_103634_1.add(infospotPANO_20221214_103634_11);

		infospotPANO_20221214_103634_11.addEventListener('click', function() {

			ChangePanorama('CANDIJAGO7');

		});

		var infospotPANO_20221214_103634_12 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotPANO_20221214_103634_12.position.set(4811.92, -683.39, 1141.29);
		infospotPANO_20221214_103634_12.visible = false;
		PANO_20221214_103634_1.add(infospotPANO_20221214_103634_12);

		infospotPANO_20221214_103634_12.addEventListener('click', function() {

			window.open('https://goo.gl/maps/yeraGvCUM4Xhwmua7', '_blank');

		});

		var infospotPANO_20221214_103634_13 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotPANO_20221214_103634_13.position.set(4930.81, -715.06, -297.29);
		infospotPANO_20221214_103634_13.visible = false;
		PANO_20221214_103634_1.add(infospotPANO_20221214_103634_13);

		infospotPANO_20221214_103634_13.addEventListener('click', function() {

			window.open('https://id.padlet.com/ningsihandria836/p32qxao3yyl33z1j', '_blank');

		});

		viewer.add(PANO_20221214_103634_1);

		var PANO_20221214_103229_0 = new PANOLENS.ImagePanorama("{{ asset('CANDIJAGO/panoramas/PANO_20221214_103229_0.jpg') }}");
		PANO_20221214_103229_0.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		PANO_20221214_103229_0.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		PANO_20221214_103229_0.addEventListener('click', function(e) {});


		var infospotPANO_20221214_103229_00 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_103229_00.position.set(2015.00, 2.02, 4574.81);
		PANO_20221214_103229_0.add(infospotPANO_20221214_103229_00);

		infospotPANO_20221214_103229_00.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_103634_1');

		});

		var infospotPANO_20221214_103229_01 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotPANO_20221214_103229_01.position.set(2757.67, 59.55, -4160.01);
		PANO_20221214_103229_0.add(infospotPANO_20221214_103229_01);

		infospotPANO_20221214_103229_01.addEventListener('click', function() {

			ChangePanorama('CJAGO7');

		});

		var infospotPANO_20221214_103229_02 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotPANO_20221214_103229_02.position.set(4831.19, -324.32, 1212.63);
		infospotPANO_20221214_103229_02.visible = false;
		PANO_20221214_103229_0.add(infospotPANO_20221214_103229_02);

		infospotPANO_20221214_103229_02.addEventListener('click', function() {

			window.open('https://id.padlet.com/ningsihandria836/uxhm5d0jz9q392fe', '_blank');

		});

		viewer.add(PANO_20221214_103229_0);

		var CJAGO7 = new PANOLENS.ImagePanorama("{{ asset('CANDIJAGO/panoramas/CJAGO7.jpg') }}");
		CJAGO7.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CJAGO7.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CJAGO7.addEventListener('click', function(e) {});


		var infospotCJAGO70 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCJAGO70.position.set(3731.43, -250.73, 3310.62);
		CJAGO7.add(infospotCJAGO70);

		infospotCJAGO70.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_103229_0');

		});

		var infospotCJAGO71 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCJAGO71.position.set(3883.32, -132.92, -3130.40);
		CJAGO7.add(infospotCJAGO71);

		infospotCJAGO71.addEventListener('click', function() {

			ChangePanorama('CANDIJAGO7');

		});

		var infospotCJAGO72 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCJAGO72.position.set(4944.35, -381.91, 605.30);
		infospotCJAGO72.visible = false;
		CJAGO7.add(infospotCJAGO72);

		infospotCJAGO72.addEventListener('click', function() {

			window.open('https://youtu.be/1c6WpEcFAWg', '_blank');

		});

		viewer.add(CJAGO7);

		var CANDIJAGO7 = new PANOLENS.ImagePanorama("{{ asset('CANDIJAGO/panoramas/CANDIJAGO7.jpg') }}");
		CANDIJAGO7.addEventListener('progress', function(e) {
			$("#loading").show();
		});
		CANDIJAGO7.addEventListener('load', function(e) {
			//$("#loading").fadeOut();
		});
		CANDIJAGO7.addEventListener('click', function(e) {});


		var infospotCANDIJAGO70 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIJAGO70.position.set(2938.03, 101.33, 4040.70);
		CANDIJAGO7.add(infospotCANDIJAGO70);

		infospotCANDIJAGO70.addEventListener('click', function() {

			ChangePanorama('CJAGO7');

		});

		var infospotCANDIJAGO71 = new PANOLENS.Infospot(512, hotspotIcons[12].data, true);
		infospotCANDIJAGO71.position.set(2408.59, 85.95, -4372.92);
		CANDIJAGO7.add(infospotCANDIJAGO71);

		infospotCANDIJAGO71.addEventListener('click', function() {

			ChangePanorama('PANO_20221214_103634_1');

		});

		var infospotCANDIJAGO72 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotCANDIJAGO72.position.set(4922.78, 475.18, 676.24);
		infospotCANDIJAGO72.visible = false;
		CANDIJAGO7.add(infospotCANDIJAGO72);

		infospotCANDIJAGO72.addEventListener('click', function() {

			window.open('https://id.padlet.com/ningsihandria836/6akboxberur80cha', '_blank');

		});

		viewer.add(CANDIJAGO7);

		$(document).ready(function() {
			ChangePanorama('CJAGO7');
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
			if (viewer.panorama == PANO_20221214_103634_1) {
				ShowMyInfospot(infospotPANO_20221214_103634_12, 'infospotPANO_20221214_103634_12');
				ShowMyInfospot(infospotPANO_20221214_103634_13, 'infospotPANO_20221214_103634_13');
			}

			if (viewer.panorama == PANO_20221214_103229_0) {
				ShowMyInfospot(infospotPANO_20221214_103229_02, 'infospotPANO_20221214_103229_02');
			}

			if (viewer.panorama == CJAGO7) {
				ShowMyInfospot(infospotCJAGO72, 'infospotCJAGO72');
			}

			if (viewer.panorama == CANDIJAGO7) {
				ShowMyInfospot(infospotCANDIJAGO72, 'infospotCANDIJAGO72');
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
		function chclickinfospotPANO_20221214_103634_12() {
			window.open('https://goo.gl/maps/yeraGvCUM4Xhwmua7', '_blank');

		}

		function chclickinfospotPANO_20221214_103634_13() {
			window.open('https://id.padlet.com/ningsihandria836/p32qxao3yyl33z1j', '_blank');

		}

		function chclickinfospotPANO_20221214_103229_02() {
			window.open('https://id.padlet.com/ningsihandria836/uxhm5d0jz9q392fe', '_blank');

		}

		function chclickinfospotCJAGO72() {
			window.open('https://youtu.be/1c6WpEcFAWg', '_blank');

		}

		function chclickinfospotCANDIJAGO72() {
			window.open('https://id.padlet.com/ningsihandria836/6akboxberur80cha', '_blank');

		}
		/*customjs-end*/
	</script>
</body>

</html>