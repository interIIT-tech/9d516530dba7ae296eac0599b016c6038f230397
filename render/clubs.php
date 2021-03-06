<!DOCTYPE HTML>
<html>
	<head>
	<style media="screen" type="text/css">
		.layer1_class { position: absolute; z-index: 1; top: 0px; left: 0px; visibility: visible;height: 100%;width: 100%;background-color: white;}
		.layer2_class { visibility: hidden }
	</style>
	<script>
		function downLoad(){
			$("body").css("overflow","auto");
				if(localStorage.getItem("lastPage")==window.location){
					var del = 0;	
				}else{
					var del = 750;	
				}
			$("body").animate("left:0px",del,function(){
			if (document.all){
					document.all["layer1"].style.visibility="hidden";
					document.all["layer2"].style.visibility="visible";
			} else if (document.getElementById){
					node = document.getElementById("layer1").style.visibility='hidden';
					node = document.getElementById("layer2").style.visibility='visible';
			}
		localStorage.setItem("lastPage",window.location);
		});
		}
	</script>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" href="http://iwebapp.ml/favicon.png" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Clubs::iWebApp</title>
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/courses/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/courses/css/main.css" />
		<script src="assets/js/modernizr.custom.25376.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				var stat=0;
				$("#showMenu").click(function(){
					$(".mysidebar").fadeOut();
					stat=1;
				});
				$(".container").click(function(){
					if(stat==1 && $(window).width()>723){
						$(".mysidebar").fadeIn();
						stat=0;
					}
				});
				$("#mobile-show-menu").click(function(){
					$('#perspective').addClass('modalview animate');
				});
			});
		</script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/courses/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/courses/css/ie8.css" /><![endif]-->
	<style>
			.wrapper.fullscreen {
				min-height: 40vh !important;
			}
			.outer-nav.right {
				left:10%;
			}
			#mobile-show-menu {
				font-family: fontAwesome;
				font-size: 30px;
				position:fixed;
				color: #312450;
				right: 1em;
				top: 0.5em;
				z-index: 1000;
				cursor: pointer;
			}
			@media screen and (min-width: 736px) {
				#mobile-show-menu {
					display:none;
				}
			}
		}
	</style>
	</head>
	<body style="overflow:hidden;" onload="downLoad()">

		<div id="layer1" class="layer1_class">
			<img src="favicon.png" style=" display: block;position: fixed;left: 50%;top:17%;transform: translate(-50%,-50%);">
			<img src="loading.gif" style="display:block;position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);width:20%;">
		</div>

		<div id="layer2" class="layer2_class">
	<div id="perspective" class="perspective effect-airbnb">
	<div id="mobile-show-menu" href="#back"></div>
	<!-- Sidebar -->
			<section id="sidebar" class="mysidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><button class="button special" id="showMenu" style="margin:auto;" href="#back">Show Menu</button></li>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#njack">NJACK</a></li>
							<li><a href="#sparkonics">Sparkonics</a></li>
							<li><a href="#scme">SCME</a></li>
							<li><a href="#eclub">E-Club</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<div class="container">
				<div class="wrapper">
		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul><li><button>Show Menu</button></li>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#njack">NJACK</a></li>
							<li><a href="#sparkonics">Sparkonics</a></li>
							<li><a href="#scme">SCME</a></li>
							<li><a href="#eclub">E-Club</a></li>
						</ul>
					</nav>
				</div>
			</section>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Clubs</h1>
							<p> Subscribe to any club here to never miss any updates.</p>
							<span id = "mobile-nav">
								<ul class="actions vertical">
								<li><a href="#njack" class="button fit scrolly">NJACK</a></li>
								<li><a href="#sparkonics" class="button fit scrolly">Sparkonics</a></li>
								<li><a href="#scme" class="button fit scrolly">SCME</a></li>
								<li><a href="#eclub" class="button fit scrolly">E-Club</a></li>
								</ul>
							</span>
						</div>
					</section>
				<!-- NJACK Header -->
					<section id="njack" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>NJACK</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<ul class="actions">
										<li><a href="#" class="button">Subscribe</a></li>
							</ul>
						</div>
					</section>


				<!-- Sparkonics Header -->
					<section id="sparkonics" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>Sparkonics</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<ul class="actions">
										<li><a href="#" class="button">Subscribe</a></li>
							</ul>
						</div>
					</section>

				<!-- SCME Header -->
					<section id="scme" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>SCME</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<ul class="actions">
										<li><a href="#" class="button">Subscribe</a></li>
							</ul>
						</div>
					</section>

				<!-- E-Club Header -->
				<section id="eclub" class="wrapper style2 fade-up">
						<div class="inner">
							<h2>E-Club</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<ul class="actions">
										<li><a href="#" class="button">Subscribe</a></li>
							</ul>
						</div>
					</section>
			</div>

		<!-- Scripts -->
			<script src="assets/courses/js/jquery.min.js"></script>
			<script src="assets/courses/js/jquery.scrollex.min.js"></script>
			<script src="assets/courses/js/jquery.scrolly.min.js"></script>
			<script src="assets/courses/js/skel.min.js"></script>
			<script src="assets/courses/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/courses/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/courses/js/main.js"></script>
			<script src="assets/js/classie.js"></script>
		<script src="assets/js/menu.js"></script>
		</div></div>
		<?php require('render/menu.php');?>
	</div></div>
	</body>
</html>
