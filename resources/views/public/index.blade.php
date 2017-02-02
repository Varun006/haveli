@extends('public.layouts.main')

@section('extra-css')
@stop

@section('slider')
<section id="slider" class="slider-parallax swiper_wrapper clearfix">

	<div class="slider-parallax-inner">

		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide dark" style="background-image: url('1.jpg');">
				</div>
				<div class="swiper-slide dark" style="background-image: url('2.jpg');">
				</div>
			</div>
			<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
			<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
			<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
		</div>

	</div>

</section>
@stop
@section('content')
	<section id="content">

		<div class="content-wrap">
			<div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
				<div class="container clearfix">
					<h3 class="center">This month's Poonam falls on <span>10th February</span></h3>
				</div>
			</div>

			{{-- Darshan section starts --}}
			<div class="section notopmargin nobottommargin"> 
				<div class="heading-block center">
					<h2>Darshan Timings</h2>
					<span class="divcenter">*Darshan timings may vary on event days</span>
				</div>

				<div class="container clear-bottommargin clearfix">
				<div class="row topmargin-sm clearfix">
					<div class="col-md-2 col-sm-6 bottommargin">
						<div class="promo promo-border promo-mini fancy-title title-bottom-border">
							<h3 class="center">Mangla</h3>
							<span class="center">8 : 00 AM</span> <span class="center">TO</span> <span class="center">8 : 45 AM</span>
						</div>
					</div>

					<div class="col-md-2 col-sm-6 bottommargin">
						<div class="promo promo-border promo-mini fancy-title title-bottom-border">
							<h3 class="center">Shringar</h3>
							<span class="center">10 : 00 AM</span> <span class="center">TO</span> <span class="center">10 : 30 AM</span>
						</div>
					</div>

					<div class="clearfix visible-sm"></div>

					<div class="col-md-2 bottommargin">
						<div class="promo promo-border promo-mini fancy-title title-bottom-border">
							<h3 class="center">Rajbhog</h3>
							<span class="center">11 : 00 AM</span> <span class="center">TO</span> <span class="center">11 : 30 AM</span>
						</div>
					</div>

					<div class="col-md-2 bottommargin">
						<div class="promo promo-border promo-mini fancy-title title-bottom-border">
							<h3 class="center">Utthapan</h3>
							<span class="center">4 : 30 PM</span> <span class="center">TO</span> <span class="center">4 : 45 PM</span>
						</div>
					</div>

					<div class="col-md-2 bottommargin">
						<div class="promo promo-border promo-mini fancy-title title-bottom-border">
							<h3 class="center">Bhog Aarti</h3>
							<span class="center">5 : 15 PM</span> <span class="center">TO</span> <span class="center">5 : 45 PM</span>
						</div>
					</div>

					<div class="col-md-2 bottommargin">
						<div class="promo promo-border promo-mini fancy-title title-bottom-border">
							<h3 class="center">Shayan</h3>
							<span class="center">6 : 30 PM</span> <span class="center">TO</span> <span class="center">7 : 15 PM</span>
						</div>
					</div>	
				</div>
				</div>
			</div>
			{{-- Darsahn sections ends --}}

			{{-- What is pushtimarg starts --}}
				<div class="fancy-title title-dotted-border topmargin title-center">
					<h1>What is <span>PUSHTIMARG</span> ?</h1>
				</div>

				<div class="container clearfix fadeInUp center">
					<p class="lead">
						The way of Life and Salvation  preached by Shri Vallabhacharya is known as Pushti  Marga. This is the most original  part of his teaching, showing his religious genius at its best. It is the way of Bhakti Marga, the way of devotion taught by the Bhagawad-Gita, the  Bhagavata and the Vaishnava Saints and Acharyas. <br />
	                  It differs, however, in some  important respects from the teaching of the preceding Acharyas, and has several distinguishing features of its own. The word Pusti,  which means fatness or strength, is derived from the word poshana i.e. Nourishment, used first by the Bhagavata with reference to God's grace.
					</p>
				</div>
			
			{{-- What is pushtimarg ends --}}

		</div>
	</section>	
@stop

@section('extra-js')
@stop