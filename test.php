<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
<style>@import url('https://fonts.googleapis.com/css2?family=Cinzel&family=Erica+One&family=Syncopate&family=Kanit:wght@800&family=Montserrat:wght@300&Oswald:wght@500&family=Ramabhadra&family=Work+Sans:wght@300&display=swap');</style>
<script crossorigin="anonymous" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" src="https://code.jquery.com/jquery-3.6.0.js"></script>
<title>Les stats qui déboîtent</title>
</head>
<body>
<script>
				$(window).bind('load',function(){
					$('#load').css({
						'opacity' : '0'
					});
					$('#load').css({
						'z-index' : '-1000'
					});
				});
				$(window).ready(function(){
					if ($(window).width() <= 768) {  
						$(".Tall").click(function(){
							$("#mtopbar").css({
								"left" : "-100vw"
							});
							$("#mb2").css({
								"color" : "white"
							});
							$("#mb1").css({
								"right" : "20px",
								"transform" : "rotate(0deg)"
							});
							$("#mb3").css({
								"left" : "20px",
								"transform" : "rotate(0deg)"
							});
							$("#mtopbar").css({
								"left" : "-100vw"
							});
						});
					}
				});
				$(window).resize(function(){
					if ($(window).width() <= 768) {
						$(".Tall").click(function(){
							$("#mtopbar").css({
								"left" : "-100vw"
							});
							$("#mb2").css({
								"color" : "white"
							});
							$("#mb1").css({
								"right" : "20px",
								"transform" : "rotate(0deg)"
							});
							$("#mb3").css({
								"left" : "20px",
								"transform" : "rotate(0deg)"
							});
							$("#mtopbar").css({
								"left" : "-100vw"
							});
						});
					}
				});
				$(window).on('scroll',function() {
					var scrollTop = $(window).scrollTop();
					if ( scrollTop > $('.filtre').offset().top ) { 
						$('#div4').css({
							'opacity' : '1',
							'left' : '10vw',
							'box-shadow' : '-50px 0px 0px rgba(26, 196, 187, 15%)'
						})
						$('#p1').css({
							'opacity' : '1'
						})
						$('#p1').css({
							'margin-bottom' : '0'
						})
					}
				});
				$(document).ready(function(){
					let bouton=0
					$("#left_arrow").click(function(){
						$("#img1").css({
							"width" : "700px",
							"height" : "400px",
							"left" : "calc(50% - 350px)",
							"opacity" : "1",
							"z-index" : "2"
						});
						$("#img2").css({
							"width" : "500px",
							"height" : "300px",
							"margin-left" : "57.5%",
							"opacity" : "0.25",
							"z-index" : "1"
						});
						$("#img3").css({
							"width" : "500px",
							"height" : "300px",
							"right" : "-15%",
							"opacity" : "0"
						});
						$("#right_arrow").css({
							"z-index" : "3"
						});
						$("#right_arrow2").css({
							"z-index" : "4"
						});
					});
					$("#left_arrow2").click(function(){
						$("#img1").css({
							"width" : "500px",
							"height" : "300px",
							"left" : "7.5%",
							"opacity" : "0.25",
							"z-index" : "1"
						});
						$("#img2").css({
							"width" : "700px",
							"height" : "400px",
							"margin-left" : "0",
							"opacity" : "1",
							"z-index" : "2"
						});
						$("#img3").css({
							"width" : "500px",
							"height" : "300px",
							"right" : "7.5%",
							"opacity" : "0.25",
							"z-index" : "1"
						});
						$("#left_arrow").css({
							"z-index" : "4"
						});
						$("#left_arrow2").css({
							"z-index" : "3"
						});
						$("#right_arrow").css({
							"z-index" : "4"
						});
						$("#right_arrow2").css({
							"z-index" : "3"
						});
					});
					$("#right_arrow").click(function(){
						$("#img1").css({
							"width" : "500px",
							"height" : "300px",
							"left" : "-15%",
							"opacity" : "0",
							"z-index" : "1"
						});
						$("#img2").css({
							"width" : "500px",
							"height" : "300px",
							"margin-left" : "-57.5%",
							"opacity" : "0.25",
							"z-index" : "1"
						});
						$("#img3").css({
							"width" : "700px",
							"height" : "400px",
							"right" : "calc(50% - 350px)",
							"opacity" : "1",
							"z-index" : "2"
						});
						$("#left_arrow").css({
							"z-index" : "3"
						});
						$("#left_arrow2").css({
							"z-index" : "4"
						});
					});
					$("#right_arrow2").click(function(){
						$("#img1").css({
							"width" : "500px",
							"height" : "300px",
							"left" : "7.5%",
							"opacity" : "0.25",
							"z-index" : "1"
						});
						$("#img2").css({
							"width" : "700px",
							"height" : "400px",
							"margin-left" : "0",
							"opacity" : "1",
							"z-index" : "2"
						});
						$("#img3").css({
							"width" : "500px",
							"height" : "300px",
							"right" : "7.5%",
							"opacity" : "0.25",
							"z-index" : "1"
						});
						$("#left_arrow").css({
							"z-index" : "4"
						});
						$("#left_arrow2").css({
							"z-index" : "3"
						});
						$("#right_arrow").css({
							"z-index" : "4"
						});
						$("#right_arrow2").css({
							"z-index" : "3"
						});
					});
					$("#menu").click(function(){
						if (bouton==0) {
							$("#mb2").css({
								"position" : "absolute",
								"color" : "rgb(38, 38, 38)"
							});
							$("#mb1").css({
								"right" : "10px",
								"transform" : "rotate(45deg)"
							});
							$("#mb3").css({
								"left" : "10px",
								"transform" : "rotate(-45deg)"
							});
							$("#mtopbar").css({
								"left" : "0"
							});
							bouton=1
						}
						else {
							$("#mb2").css({
								"color" : "white"
							});
							$("#mb1").css({
								"right" : "20px",
								"transform" : "rotate(0deg)"
							});
							$("#mb3").css({
								"left" : "20px",
								"transform" : "rotate(0deg)"
							});
							$("#mtopbar").css({
								"left" : "-100vw"
							});
							bouton=0
						}
					});
				});
			</script>
<div id="load"><div id="dot1"></div><div id="dot2"></div></div>
<div id="topbar">
<div id="menu">
<h1 class="menubar" id="mb1">|</h1>
<h1 class="menubar" id="mb2">|</h1>
<h1 class="menubar" id="mb3">|</h1>
</div>
<div id="mtopbar">
<a href="index.html" id="logo"></a>
<a class="Tall" href="index.html"><h1 class="Tall">Qui sommes-nous ?</h1></a>
<a class="Tall" href="acteurs.html"><h1 class="Tall">Nos acteurs</h1></a>
<a class="Tall" href=".html"><h1 class="Tall">Nous contacter</h1></a>
</div>
</div>
<div id="div1">
<div id="div2"><img id="rails" src="imgs/rails2.jpg"></div>
<div id="div3">
	<div id="caroussel">
		<h1 id="actus">Nos actualités</h1>
		<div id="img1"></div>
		<h1 id="left_arrow"><</h1>
		<h1 id="left_arrow2"><</h1>
		<div id="img2"></div>
		<h1 id="right_arrow">></h1>
		<h1 id="right_arrow2">></h1>
		<div id="img3"></div>
	</div>
</div>
<div id="div4">
	<h1 id="T1">Qui sommes-nous ?</h1>
	<h1 id="T2">Notre équipe composée d'une vingtaine de membres cherche à réunir les acteurs oeuvrant pour le maintien de la ligne ferroviaire "Aubrac". Notre but final est de permettre la mise en relation de ces acteurs afin que les échanges soient moins méticuleux et qu'ils puissent toucher une plus grande audience.</h1>
</div>
<div id="footer">
</div>

</div>
</body>
</html>