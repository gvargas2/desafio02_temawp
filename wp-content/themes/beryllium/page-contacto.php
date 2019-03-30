<?php /* Template Name: Contacto */ ?>
<?php get_header(); ?>

	<div class="gtco-loader"></div>

	<div id="page">

		<div class="gtco-section">
			<div class="gtco-container">
				<div class="row gtco-heading">
					<div class="col-md-7 text-left">
						<h2>Contact</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat enim et urna sagittis, rhoncus euismod erat tincidunt. Donec tincidunt volutpat erat.</p>
					</div>
					<div class="col-md-3 col-md-push-2 text-center">
						<p class="mt-md"><a href="#" class="btn btn-special btn-block">Contact us</a></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form action="#">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="name">Email</label>
								<input type="text" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="message"></label>
								<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" value="Send Message">
							</div>
						</form>
					</div>
					<div class="col-md-5 col-md-push-1">
						<div class="gtco-contact-info">
							<h3>Our Address</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul >
								<li class="address">Dirección: Calle Edsel 465, Quilicura, Santiago.</li>
								<li class="phone"><a href="tel://1234567890">Número telefónico: +56224150003</a></li>
								<li class="email"><a href="#">Mail: contacto@vidrotemp.cl</a></li>
								<li class="url"><a href="#">www.vidrotemp.cl</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END Contact -->

		<div id="map"></div>
  </div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

  <?php get_footer(); ?>
