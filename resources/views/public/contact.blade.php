@extends('public.layouts.main')

@section('extra-css')
@stop

@section('content')
<!-- Page Sub Menu
		============================================= -->
<div id="page-menu">

	<div id="page-menu-wrap">

		<div class="container clearfix">

			<div class="menu-title center">Contact <span>US</span></div>

		</div>

	</div>

</div><!-- #page-menu end -->

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
						<!-- Contact Form
					============================================= -->
			<div class="col_two_third">

				<div class="fancy-title title-dotted-border">
					<h3>Send us an Email</h3>
				</div>

				<div class="contact-widget">

					<div class="contact-form-result"></div>

					<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

						<div class="form-process"></div>

						<div class="col_one_third">
							<label for="template-contactform-name">Name <small>*</small></label>
							<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
						</div>

						<div class="col_one_third">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
						</div>

						<div class="col_one_third col_last">
							<label for="template-contactform-phone">Phone</label>
							<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
						</div>

						<div class="clear"></div>

						<div class="col_full">
							<label for="template-contactform-subject">Subject <small>*</small></label>
							<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
						</div>

						<div class="clear"></div>

						<div class="col_full">
							<label for="template-contactform-message">Message <small>*</small></label>
							<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
						</div>

						<div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div>

						<div class="col_full">
							<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Send Email</button>
						</div>

					</form>
				</div>

			</div><!-- Contact Form End -->

			<!-- Google Map
					============================================= -->
			<div class="col_one_fourth col_last">
				<div class="fancy-title title-dotted-border">
					<h3>Haveli Address</h3>
				</div>
				{{-- <section id="google-map" class="gmap" style="height: 410px;"></section> --}}
				<div class="section center">
					Plot No. 59D,<br> 
					Sector 29,<br>
					Goverdhan Haveli Marg,<br>
					Near Rajiv Gandhi Garden,<br> 
					Vashi,<br>
					Navi Mumbai,<br>
					Maharashtra 400703
				</div>

				<h5 class="center">Click <a href="https://www.google.co.in/maps/dir/''/vashi+haveli/@19.0885458,72.9358303,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3be7c1257b49364d:0xf9152fbfb334dfbf!2m2!1d73.0058708!2d19.088559" target="_blank">here</a> to get directions from your current location.</h5>

			</div><!-- Google Map End -->
					
		</div>

	</div>
</section>
@stop

@section('extra-js')
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&key=AIzaSyDL5WEjvGNrKKSbI6hh57sKZ-ELpR8mY9k"></script>
	<script type="text/javascript" src="{{@asset('js/jquery.gmap.js')}}"></script>
	<script type="text/javascript">
		jQuery('#google-map').gMap({
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
