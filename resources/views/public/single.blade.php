@extends('public.layouts.main')

@section('extra-css')
@stop

@section('content')
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="single-event">
				<div class="col_three_fourth">
					<div class="entry-image nobottommargin">
						<a href="#"><img src="{{@asset('images/events/1.jpg')}}" alt="Event Single"></a>
					</div>
				</div>
				
				<div class="col_one_fourth col_last">
					<div class="panel panel-default events-meta">
						<div class="panel-heading">
							<h3 class="panel-title">Event Info:</h3>
						</div>
						<div class="panel-body">
							<ul class="iconlist nobottommargin">
								<li><i class="icon-calendar3"></i> 21st Feb, 2017</li>
								<li><i class="icon-time"></i> 20:00 - 02:00</li>
								<li><i class="icon-map-marker2"></i> Vashi Shreenathji Haveli</li>
							</ul>
						</div>
					</div>
					<a href="#" class="btn btn-success btn-block btn-lg">Buy Tickets</a>
				</div>

				<div class="clear"></div>

				<div class="col_three_fourth">

					<h3>Details</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, voluptatum, amet, eius esse sit praesentium similique tenetur accusamus deserunt modi dignissimos debitis consequatur facere unde sint quasi quae architecto eum!</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, nesciunt, sapiente, distinctio obcaecati dolores perspiciatis eveniet adipisci repellendus consequatur ab officiis ipsa laudantium! Provident expedita odio iste corporis nam natus illum. Cupiditate, quis libero distinctio reiciendis quos adipisci eius animi.</p>

				</div>	

				<div class="col_one_fourth col_last">
					<h4>Location</h4>
					<section id="event-location" class="gmap" style="height: 300px;"></section>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('extra-js')
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&key=AIzaSyDL5WEjvGNrKKSbI6hh57sKZ-ELpR8mY9k"></script>
	<script type="text/javascript" src="{{@asset('js/jquery.gmap.js')}}"></script>
	<script type="text/javascript">
		jQuery('#event-location').gMap({
				address: 'Vashi, Navi Mumbai, India',
				maptype: 'ROADMAP',
				zoom: 13,
				markers: [
                            {
                               address: "Plot No. 59D, Sector 29, Goverdhan Haveli Marg, Near Rajiv Gandhi Garden, Vashi, Navi Mumbai, Maharashtra 400703",
                                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Vashi Shrinathji Haveli</h4><p class="nobottommargin">Plot No. 59D, Sector 29, Goverdhan Haveli Marg, Near Rajiv Gandhi Garden, Vashi, Navi Mumbai, Maharashtra 400703</p></div>',
                                icon: {
                                    image: "{{@asset('images/icons/map-icon-red.png')}}",
                                    iconsize: [32, 39],
                                    iconanchor: [32,39]
                                }
                            }
                        ],
				doubleclickzoom: false,
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				}
			});
	</script>
@stop
