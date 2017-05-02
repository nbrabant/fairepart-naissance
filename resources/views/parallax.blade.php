@extends('layout')

@section('content')

	<!-- <ul id="nav">
		<li><a href="#1">Slaph</a></li>
		<li><a href="#2">Zipp</a></li>
		<li><a href="#3">Boom</a></li>
	</ul> -->

	<div id="wrapper">

		<div id="content">
			<div class="play" data-0="opacity:1;" data-250="opacity:0.5;" data-500="opacity:0;"><span class="glyphicon glyphicon-play"></span> Cliquez pour lancer l'animation</div>
			<div class="scroll" data-0="opacity:1;" data-250="opacity:0.5;" data-500="opacity:0;"> Ou scrollez pour continuer</div>
			<div class="swipe" data-0="opacity:1;" data-250="opacity:0.5;" data-500="opacity:0;"> Glissez pour continuer</div>

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
			<div id="clouds_1" class="clouds" data-0="display:none;opacity:0;bottom:-50%" data-8000="display:block;opacity:0;" data-9000="bottom:0%;opacity:1;" data-10000="bottom:40%"></div>
			<div id="clouds_2" class="clouds" data-0="display:none;opacity:0;bottom:-50%" data-8500="display:block;opacity:0;" data-9500="bottom:0%;opacity:1;" data-10500="bottom:15%"></div>

			<div id="plains_1" class="plains" data-0="display:none;bottom:-50%" data-9000="display:block;" data-11500="bottom:0%;"></div>
			<div id="plains_2" class="plains" data-0="display:none;bottom:-50%" data-10500="display:block;" data-12000="bottom:0%;"></div>
			<div id="plains_3" class="plains" data-0="display:none;bottom:-50%" data-11000="display:block;" data-12500="bottom:0%;"></div>

			<div id="trees_1" data-0="display:none;left:-50%" data-9000="display:block;" data-11500="bottom:0%;"></div>
			<div id="trees_2" data-0="display:none;left:-50%" data-9000="display:block;" data-11500="bottom:0%;"></div>
			<div id="trees_3" data-0="display:none;left:-50%" data-9000="display:block;" data-11500="bottom:0%;"></div>





			<!-- Elements -->
			<div class="strawberry" style="position:fixed;" data-0="display:none;opacity:0;top:0%;left:-10%;width:5%;height:10%;" data-100="display:block;opacity:1;" data-1000="left:90%;top:50%;width:15%;height:30%;opacity:1;" data-1500="left:100%;opacity:0;" data-1550="display:none;"></div>
			<div class="strawberry" style="position:fixed;" data-0="display:none;opacity:0;top:0%;left:80%;width:2%;height:4%;" data-100="display:block;opacity:1;" data-1000="left:0%;top:80%;width:10%;height:20%;opacity:1;" data-1500="left:-10%;opacity:0;" data-1550="display:none;"></div>

			<div class="strawberry" style="position:fixed;" data-0="display:none;opacity:0;top:0%;left:-10%;width:5%;height:10%;" data-100="display:block;opacity:1;" data-1000="left:90%;top:50%;width:15%;height:30%;opacity:1;" data-1500="left:100%;opacity:0;" data-1550="display:none;"></div>
			<div class="strawberry" style="position:fixed;" data-0="display:none;opacity:0;top:0%;left:-10%;width:5%;height:10%;" data-100="display:block;opacity:1;" data-1000="left:90%;top:50%;width:15%;height:30%;opacity:1;" data-1500="left:100%;opacity:0;" data-1550="display:none;"></div>





			<!-- Sections -->
			<div class="countdown">
				<span class="countdown-header">9</span>
				<span class="countdown-content">mois d'impatience</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">8</span>
				<span class="countdown-content">kilos de fraises</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">7</span>
				<span class="countdown-content">siestes par semaines</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">6</span>
				<span class="countdown-content">SMS par heure</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">5</span>
				<span class="countdown-content">sens en effervescence</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">4</span>
				<span class="countdown-content">prénoms en balance</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">3</span>
				<span class="countdown-content">échographies</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">2</span>
				<span class="countdown-content">litres par jour</span>
			</div>
			<div class="countdown">
				<span class="countdown-header">1</span>
				<span class="countdown-content">heureux événement</span>
			</div>

		</div>

	</div>

@endsection
