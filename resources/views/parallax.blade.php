@extends('layout')

@section('styles')
	<link rel='stylesheet' type='text/css' href="/css/app.css?ts={{ time() }}">
@endsection

@section('content')

	<div id="wrapper">

		<div id="content">
			<div class="swipe" data-0="opacity:1;" data-250="opacity:0.5;" data-500="opacity:0;">Scrollez/Glissez pour continuer</div>

			<svg class="particles" height="100%" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" data-0=" display:block; opacity:0.5;" data-1200="display:block; opacity:0.5;" data-2500=" display:block; opacity:0;">
			<?php
				for( $i=0; $i<200; $i++) {
					echo '<circle data-0="@cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" data-1200=" @cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" data-2400=" @cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" r="3" fill="white" />';
				}
			?>
			</svg>
			<svg class="particles" height="100%" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" data-0=" display:block; opacity:0.5;" data-1200="display:block; opacity:0.5;" data-2500=" display:block; opacity:0;">
			<?php
				for( $i=0; $i<500; $i++) {
					echo '<circle data-0="@cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" data-1200=" @cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" data-2400=" @cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" r="2" fill="white" />';
				}
			?>
			</svg>
			<svg class="particles" height="100%" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" data-0=" display:block; opacity:0.5;" data-1200="display:block; opacity:0.5;" data-2500=" display:block; opacity:0;">
			<?php
				for( $i=0; $i<1000; $i++) {
					echo '<circle data-0="@cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" data-1200=" @cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" data-2400=" @cx:'.rand(20,1500).'; @cy:'.rand(-900,900).';" r="1" fill="white" />';
				}
			?>
			</svg>

			<!-- BG -->
			<div class="background" style="background-color:#000020;" data-0="display:none;opacity:0;" data-1200="display:block;top:0%;" data-2400="opacity:1;" data-4000="opacity:1;" data-5000="opacity:0;" data-5500="display:none;"></div>
			<div class="background" style="background-color:#004080;" data-0="display:none;top:100%;opacity:0;" data-2400="display:block;top:0%;" data-3600="opacity:1;" data-8000="opacity:1;" data-8500="opacity:0;" data-9500="display:none;"></div>
			<div class="background" style="background-color:#77b5fe;" data-0="display:none;top:100%;opacity:0;" data-6000="display:block;top:0%;" data-7500="opacity:1;" data-21000="top:-100%;" data-28750="display:none;"></div>
			<div class="background" id="gradientsky" data-0="display:none;top:100%;opacity:0;" data-6000="display:block;top:0%;" data-7500="opacity:1;" data-21000="top:-100%;" data-28750="display:none;"></div>

			<!-- Scene -->
			{{--*/ $finalScroll = 22000 /*--}}
			@foreach ($datas['name'] as $letter)
				{{--*/ $finalScroll += 250 /*--}}
			@endforeach

			<div id="clouds_1" class="clouds"
				data-0="display:none;opacity:0;bottom:-50%"
				data-8000="display:block;opacity:0;"
				data-9000="bottom:0%;opacity:1;"
				data-10000="bottom:40%"
				data-{{ $finalScroll+700 }}="bottom:40%"
				data-{{ $finalScroll+1500 }}="bottom:90%"></div>
			<div id="clouds_2" class="clouds"
				data-0="display:none;opacity:0;bottom:-50%"
				data-8500="display:block;opacity:0;"
				data-9500="bottom:0%;opacity:1;"
				data-10500="bottom:25%"
				data-{{ $finalScroll+700 }}="bottom:25%"
				data-{{ $finalScroll+1500 }}="bottom:75%;"></div>

			<div id="trees_1" class="trees"
				data-0="display:none;left:-50%;bottom:0;"
				data-11500="display:block;"
				data-14000="left:0%;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>

			<div id="plains_1" class="plains"
				data-0="display:none;bottom:-50%"
				data-9000="display:block;"
				data-11500="bottom:0%;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>
			<div id="plains_2" class="plains"
				data-0="display:none;bottom:-50%"
				data-10500="display:block;"
				data-12000="bottom:0%;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>
			<div id="plains_3" class="plains"
				data-0="display:none;bottom:-50%"
				data-11000="display:block;"
				data-12500="bottom:0%;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>

			<div id="shadows_2" class="trees"
				data-0="display:none;opacity:0;bottom:0;"
				data-14000="display:block;"
				data-15500="opacity:1;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>
			<div id="shadows_3" class="trees"
				data-0="display:none;opacity:0;bottom:0;"
				data-14000="display:block;"
				data-15500="opacity:1;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>

			<div id="trees_2" class="trees"
				data-0="display:none;left:-50%;bottom:0;"
			 	data-11500="display:block;"
			 	data-14000="left:0%;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>
			<div id="trees_3" class="trees"
				data-0="display:none;right:-50%;bottom:0;"
				data-11500="display:block;"
				data-14000="right:0%;"
				data-{{ $finalScroll+700 }}="bottom:0%"
				data-{{ $finalScroll+1500 }}="bottom:50%;"></div>

			<div id="baby"
				data-0="display:none;opacity:0;"
				data-15000="display:block;opacity:0;"
				data-16000="opacity:0.5;"
				data-17000="opacity:0;"
				data-18000="opacity:0.75;"
				data-19000="opacity:0.25;"
				data-20000="opacity:1;"
				data-{{ $finalScroll+700 }}="bottom:10%"
				data-{{ $finalScroll+1500 }}="bottom:60%;"></div>
			<div id="info-block" class="text-center" data-0="display:none;opacity:0;top:-50%;" data-19000="display:block;opacity:0;" data-20500="opacity:1;top:-50%;" data-22000="top:5%;" data-{{ $finalScroll }}="opacity:1" data-{{ $finalScroll+400 }}="opacity:0">
				<div class="clearfix head-title">
					@if ($datas['gender'] === 'boy')
					    C'est un garçon !!!
					@else
					    C'est une fille !!!
					@endif
				</div>
				<div class="clearfix">
					Je m'appelle
				</div>
				<div class="clearfix head-title">
					{{--*/ $pageScroll = 22000 /*--}}
					@foreach ($datas['name'] as $letter)
						<span data-0="display:none;opacity:0;" data-{{ $pageScroll }}="display:inline-block;" data-{{ $pageScroll+500 }}="opacity:1;">{{ $letter }}</span>
						{{--*/ $pageScroll += 250 /*--}}
					@endforeach
				</div>
				<div class="clearfix">
					Je suis né le {{ $datas['date'] }} à {{ $datas['moment'] }}
				</div>
				<div class="clearfix">
					<div class="col-sm-12">
						et je mesure {{ $datas['size'] }} pour  {{ $datas['weight'] }}
					</div>
				</div>
			</div>

			<!-- Sections -->
			<div class="countdowns">
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-200="display:block;" data-700="opacity:1;" data-900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-200="opacity:0;" data-400="opacity:1;">9</span>
					<span class="countdown-content" data-0="opacity:0;" data-400="opacity:0;" data-600="opacity:1;">mois d'impatience</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-1200="display:block;" data-1700="opacity:1;" data-1900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-1200="opacity:0;" data-1400="opacity:1;">8</span>
					<span class="countdown-content" data-0="opacity:0;" data-1400="opacity:0;" data-1600="opacity:1;">kilos de fraises</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-2200="display:block;" data-2700="opacity:1;" data-2900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-2200="opacity:0;" data-2400="opacity:1;">7</span>
					<span class="countdown-content" data-0="opacity:0;" data-2400="opacity:0;" data-2600="opacity:1;">siestes par semaines</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-3200="display:block;" data-3700="opacity:1;" data-3900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-3200="opacity:0;" data-3400="opacity:1;">6</span>
					<span class="countdown-content" data-0="opacity:0;" data-3400="opacity:0;" data-3600="opacity:1;">SMS par heure</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-4200="display:block;" data-4700="opacity:1;" data-4900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-4200="opacity:0;" data-4400="opacity:1;">5</span>
					<span class="countdown-content" data-0="opacity:0;" data-4400="opacity:0;" data-4600="opacity:1;">sens en effervescence</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-5200="display:block;" data-5700="opacity:1;" data-5900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-5200="opacity:0;" data-5400="opacity:1;">4</span>
					<span class="countdown-content" data-0="opacity:0;" data-5400="opacity:0;" data-5600="opacity:1;">prénoms en balance</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-6200="display:block;" data-6700="opacity:1;" data-6900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-6200="opacity:0;" data-6400="opacity:1;">3</span>
					<span class="countdown-content" data-0="opacity:0;" data-6400="opacity:0;" data-6600="opacity:1;">échographies</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-7200="display:block;" data-7700="opacity:1;" data-7900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-7200="opacity:0;" data-7400="opacity:1;">2</span>
					<span class="countdown-content" data-0="opacity:0;" data-7400="opacity:0;" data-7600="opacity:1;">litres d'eau par jour</span>
				</div>
				<div class="countdown" style="position:fixed;" data-0="display:none;" data-8200="display:block;" data-8700="opacity:1;" data-8900="opacity:0;">
					<span class="countdown-header" data-0="opacity:0;" data-8200="opacity:0;" data-8400="opacity:1;">1</span>
					<span class="countdown-content" data-0="opacity:0;" data-8400="opacity:0;" data-8600="opacity:1;">heureux événement</span>
				</div>
				<div class="countdown">
					<span class="countdown-header" style="color:transparent;">patch</span>
				</div>
			</div>

			<div id="last-scene"
				data-0="display:none;bottom:-100%;"
				data-{{ $finalScroll+700 }}="display:block;position:fixed;"
				data-{{ $finalScroll+1500 }}="bottom:-50%;">
				<div class="container">
					<div class="col-xs-6 col-sm-3">test</div>
					<div class="col-xs-6 col-sm-3">test</div>
					<div class="col-xs-6 col-sm-3">test</div>
					<div class="col-xs-6 col-sm-3">test</div>
				</div>
			</div>

		</div>

		<audio id="tardis_sound" src="sounds/Tardis111.mp3" type="audio/mpeg" controls></audio>

	</div>

	<script type="text/javascript">
		var playing = false;
		var audioElm = $('#tardis_sound').get(0);
		$(window).scroll(function() {
			var pageScroll = $(window).scrollTop();
			if(!playing && pageScroll > 15500 && pageScroll < 25000) {
				audioElm.play();
				playing = true;
			} else if(pageScroll > 25000 || pageScroll < 15500) {
				audioElm.pause();
				audioElm.currentTime = 0;
				playing = false;
			}
		});
	</script>

@endsection

@section('scripts')
	<script charset="utf-8" src="js/d3.min.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.83387.js" type="text/javascript" ></script>
	<script src="js/pace.min.js" type="text/javascript" ></script>
	<script src="js/compteur.min.js" type="text/javascript" ></script>
	<script src="js/anim.js" type="text/javascript" ></script>
	<script src="js/skrollr.js" type="text/javascript" ></script>

	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/skrollr.ie.js"></script>
	<![endif]-->
	<script type="text/javascript">
		var s = skrollr.init();
	</script>
@endsection
