
<html>
<head>
	<title>SamAng219255</title>
	<link rel="stylesheet" type="text/css" href="theme.css">
	<link href="./img/icon.png" rel="shortcut icon">
	<script src="./christmas.js"></script>
	<link rel="stylesheet" type="text/css" href="thanos.css">
</head>
<body>
	<div id="topBar">
		<div id="name">SamAng219255</div>
		<div id="navigationButtons">
			<div class="topFullFadeBar"></div><div class="bottomFullFadeBar"></div>
			<a class="navButHolder" href="https://github.com/SamAng219255"><div class="navButton"><div class="topFadeBar"></div><div class="bottomFadeBar"></div><div class="navTxt">Github</div></div></a>
			<a class="navButHolder" href="https://github.com/SamAng219255?tab=repositories"><div class="navButton"><div class="topFadeBar"></div><div class="bottomFadeBar"></div><div class="navTxt">Repositories</div></div></a>
			<a class="navButHolder" href="/computerbuild.html"><div class="navButton"><div class="topFadeBar"></div><div class="bottomFadeBar"></div><div class="navTxt">Computer Build</div></div></a>
			<a class="navButHolder" href="/OSI-Layer3/"><div class="navButton"><div class="topFadeBar"></div><div class="bottomFadeBar"></div><div class="navTxt">OSI Layer 3</div></div></a>
			<a class="navButHolder" href="/presentation/"><div class="navButton"><div class="topFadeBar"></div><div class="bottomFadeBar"></div><div class="navTxt">Tri-Tech Presentation</div></div></a>
			<script>
				var navBars=document.getElementsByClassName("navButton");
				var bottomFadeBars=document.getElementsByClassName("bottomFadeBar");
				var topFadeBars=document.getElementsByClassName("topFadeBar");
				for(var i=0; i<navBars.length; i++) {
					bottomFadeBars[i].style="width: "+(navBars[i].offsetWidth-4)+";";
					topFadeBars[i].style="width: "+(navBars[i].offsetWidth-4)+";";
				}
			</script>
		</div>
	</div>
	<div id="leftSideBar"></div>
	<div id="content">
		<?php require 'thanos.html'; ?>
		<a href="https://docs.google.com/presentation/d/1hUPB4qvlSCXZCcVANWkt9PtjHS-dTLv81bR2ZkN9Wwo/edit?usp=sharing" style="color: #000000;">Government Class Presentation</a>
		<div id="tree"></div>
		<script>if((new Date()).getMonth()==11){colortree();}</script>
	</div>
	<div id="rightSideBar"></div>
</body>
</html>
