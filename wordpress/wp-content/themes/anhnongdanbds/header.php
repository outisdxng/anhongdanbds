<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- <link href="https://fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
		<link rel="stylesheet" href="./css/core.min.css">
		<link rel="stylesheet" href="./css/main.min.css"> -->
		<script>
			; (function () {
				function id(v) { return document.getElementById(v); }
				function loadbar() {
					var ovrl = id("overlay"),
						prog = id("progress"),
						stat = id("progstat"),
						img = document.images,
						c = 0,
						tot = img.length;
					if (tot == 0) return doneLoading();

					function imgLoaded() {
						c += 1;
						var perc = ((100 / tot * c) << 0);
						prog.style.width = perc;
						stat.innerHTML = perc;
						if (c === tot) return doneLoading();
					}
					function doneLoading() {
						ovrl.style.opacity = 0;
						setTimeout(function () {
							ovrl.style.display = "none";
						}, 1200);
					}
					for (var i = 0; i < tot; i++) {
						var tImg = new Image();
						tImg.onload = imgLoaded;
						tImg.onerror = imgLoaded;
						tImg.src = img[i].src;
					}
				}
				document.addEventListener('DOMContentLoaded', loadbar, false);
			}());
		</script>
		<?php
			wp_head()
		?>
	</head>
	<body class="home-page"><div id="overlay">
		<div class="loader">
			<div class="logo-loader" style="padding: 20px 10px; background: #fff;border:3px solid #e5e5e5"><img src="/wp-content/themes/anhnongdanbds/img/logo.png" style="width: 192px" alt=""></div><div class="progstat-wrapper" style='display: none'>Loading: <span id="progstat"></span>%</div>
<div id="progress"></div>
		</div></div>
		<header class="lmp-header">
			<div class="main-wrapper">
				<div class="left-wrapper"></div>
				<div class="logo-wrapper"><a href="/"><img src="/wp-content/themes/anhnongdanbds/img/logo.png" alt=""></a></div>
				<div class="main-list-wrapper">

					<?php wp_nav_menu( array('menu' => 'primary', 'theme_location' => 'primary', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
				</div>
				<div class="right-wrapper">
					<div class="searchicon"><em class="mdi mdi-magnify"></em></div>
					<div class="toggle-mobile-wrapper"><span></span></div>
				</div>
			</div>
			<div class="search-wrapper">
				<div class="close-button"><em class="lnr lnr-cross"></em></div>
				<div class="container">
					<div class="searchbox">
						<input type="text" placeholder="Search ...">
						<button type="submit">Search</button>
					</div>
				</div>
			</div>
			<div class="backdrop-wrapper"></div>
			<div class="mobile-wrapper">
				<div class="close-mobile-wrapper"><em class="lnr lnr-cross"></em></div>
				<div class="mobile-logo-wrapper"><a href="#"><img src="./img/mainlogo.svg" alt=""></a></div>
			</div>
		</header>