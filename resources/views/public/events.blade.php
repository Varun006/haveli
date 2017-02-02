@extends('public.layouts.main')

@section('extra-css')
@stop

@section('content')
<div id="page-menu">

	<div id="page-menu-wrap">

		<div class="container clearfix">

			<div class="menu-title center">Events at <span>Govardhan Haveli</span></div>

		</div>

	</div>

</div><!-- #page-menu end -->
<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">
				{{-- Upcoming Events section starts --}}
				<div class="col_half bothsidebar nobottommargin">
					<div class="fancy-title title-border">
						<h3>Upcoming Events</h3>
					</div>

					<div id="posts" class="events small-thumbs">
						<div class="entry clearfix">
							<div class="entry-image hidden-sm">
								<a href="#">
									<img src="default.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
									<div class="entry-date">20<span>FEB</span></div>
								</a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="#">Chhappan Bhog</a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><span class="label label-warning">Public</span></li>
									<li><a href="#"><i class="icon-time"></i>11:00 - 19:00</a></li>
									<li><a href="#"><i class="icon-map-marker2"></i> Vashi Haveli</a></li>
								</ul>
								<div class="entry-content">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image hidden-sm">
								<a href="#">
									<img src="default.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
									<div class="entry-date">25<span>FEB</span></div>
								</a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="#">Mahashudh Teras Tithi</a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><span class="label label-warning">Public</span></li>
									<li><a href="#"><i class="icon-time"></i>11:00 - 19:00</a></li>
									<li><a href="#"><i class="icon-map-marker2"></i> Vashi Haveli</a></li>
								</ul>
								<div class="entry-content">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>
						</div>

						<div class="entry clearfix">
							<div class="entry-image hidden-sm">
								<a href="#">
									<img src="default.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
									<div class="entry-date">10<span>MAR</span></div>
								</a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="#">Holi Brij Rasiya</a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><span class="label label-warning">Public</span></li>
									<li><a href="#"><i class="icon-time"></i>11:00 - 19:00</a></li>
									<li><a href="#"><i class="icon-map-marker2"></i> Vashi Haveli</a></li>
								</ul>
								<div class="entry-content">
									<a href="#" class="btn btn-danger">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>	
				{{-- Upcoming Events section ends --}}

				{{-- Recent Events starts --}}
				<div class="col_half col_last bothsidebar nobottommargin">
					<div class="fancy-title title-border">
						<h3>Recent Events</h3>
					</div>

					<div id="posts" class="events small-thumbs">
						<div class="col_full nobottommargin">
							<div class="well well-lg nobottommargin error">No information available.</div>
						</div>
					</div>
				</div>
				{{-- Recent Events ends--}}
			</div>

		</div>

</section>			
@stop

@section('extra-js')
@stop
