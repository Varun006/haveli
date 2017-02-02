<script type="text/javascript" src="{{@asset('js/jquery.js')}}"></script>
	
<script type="text/javascript">

    $(document).ready(function(){

        $.ajaxSetup({

            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }

        });

    });

</script>

<!-- Footer

		============================================= -->

		<footer id="footer" class="dark">

			<!-- Copyrights

			============================================= -->

			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">

						Copyrights &copy; 2016 All Rights Reserved by Vashi Haveli.<br>

						<div class="copyright-links">


                        </div>

					</div>

					<div class="col_half col_last tright">

						<div class="fright clearfix">

							<a href="http://www.facebook.com/#" target="_blank" class="social-icon si-small si-borderless si-facebook">

								<i class="icon-facebook"></i>

								<i class="icon-facebook"></i>

							</a>

						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> support@vashihaveli.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-22-1234567

					</div>



				</div>



			</div><!-- #copyrights end -->



		</footer><!-- #footer end -->

