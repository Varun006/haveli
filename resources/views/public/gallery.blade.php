@extends('public.layouts.main')

@section('extra-css')
@stop

@section('content')
<div id="page-menu">

	<div id="page-menu-wrap">

		<div class="container clearfix">

			<div class="menu-title center"> <span>Photos</span></div>

		</div>

	</div>

</div><!-- #page-menu end -->

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="col_full">
				<div class="fancy-title title-border">
					<h3>Gallery</h3>
				</div>
				<div class="nobottommargin clearfix" data-lightbox="gallery">
					<div class="col-xs-6 col-md-3 topmargin">
						<a href="gallery/g1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="gallery/g1.jpg" alt="Gallery Thumb 1"></a>
					</div>

					<div class="col-xs-6 col-md-3 topmargin">
						<a href="gallery/g2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="gallery/g2.jpg" alt="Gallery Thumb 1"></a>
					</div>

					<div class="col-xs-6 col-md-3 topmargin">
						<a href="gallery/g3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="gallery/g3.jpg" alt="Gallery Thumb 1"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop

@section('extra-js')
@stop		