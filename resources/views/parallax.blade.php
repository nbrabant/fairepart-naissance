@extends('layout')

@section('content')

	<div class="scrollContent">

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

	</div>

@endsection
