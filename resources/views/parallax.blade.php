@extends('layout')

@section('content')

	<span id="s1"></span>
	<span id="s2"></span>
	<span id="s3"></span>

	<div id="wrapper">
		<ul id="nav">
			<li><a href="#1">Slaph</a></li>
			<li><a href="#2">Zipp</a></li>
			<li><a href="#3">Boom</a></li>
		</ul>

		<div id="slide1">
			<div class="slide_inside">
				<h1>TEST</h1>
				<img src="img/strawberry.svg" height="100px" />
			</div>
		</div>

		<div id="slide2">
			<div class="slide_inside">
				<img id="trooper" src="img/strawberry.svg" height="100px" />
				<h2>PARALLAX</h2>
			</div>
		</div>

		<div id="slide3">
			<div class="slide_inside">
				<h2>Ending</h2>
			</div>
		</div>
	</div>

<!-- 	<div class="scrollContent">

		<script>
			// init controller
			var controller = new ScrollMagic.Controller();
		</script>

		<section id="header">

		</section>

		<section id="step_1" class="demo">
			<div class="spacer s2"></div>
			<div id="trigger1" class="spacer s0"></div>
			<div id="animate1" class="box2 skin" style="background-color: green; transform: matrix(2.5, 0, 0, 2.5, 0, 0);">
				<p>You wouldn't like me, when I'm angry!</p>
				<a href="#" class="viewsource">view source</a>
			</div>
			<div class="spacer s2"></div>
			<script>
				// build scene
				var scene = new ScrollMagic.Scene({
					triggerElement: "#trigger1"
				})
				.setTween("#animate1", 0.5, {backgroundColor: "green", scale: 2.5}) // trigger a TweenMax.to tween
				.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
				.addTo(controller);
			</script>
		</section>

		<section id="footer">

		</section>

	</div> -->

@endsection
