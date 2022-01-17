@extends('layouts.master')
@section('content')

<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				get in touch with us
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">&nbsp;contact</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


	<section class="section-wrapper contact-and-map">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="section-title">
						Send Message
					</h2>
					<div class="form">
						<div class="input-group">		
						 	<input class="form-control border-radius border-right" type="text" placeholder="Name" required>
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-person"></i>
							</span>
						</div>
						<div class="input-group">		
						 	<input class="form-control border-radius border-right" name="email" type="email" placeholder="Email address" required>
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-email"></i>
							</span>
						</div>
						<div class="input-group">		
						 	<input class="form-control border-radius border-right" type="tel" placeholder="Phone number">
						 	<span class="input-group-addon  border-radius custom-addon">
								<i class="ion-ios-telephone"></i>
							</span>
						</div>
						<div class="input-group">
						<textarea class="form-control border-radius border-right" rows="8" placeholder="Write Message"></textarea>	
							<!-- <input type="text" name="text" rows="8" class="form-control border-radius border-right message" placeholder="Write Message"> -->
							<span class="input-group-addon border-radius custom-addon">
								<i class="ion-chatbubbles"></i>
							</span>
						</div>
						<button type="submit" class="btn btn-default border-radius custom-button">SEND MESSAGE </button>
					</div>
				</div> <!-- /.col-sm-6 -->
				<div class="col-sm-6">
					<h2 class="section-title">
						Find Us Via Google Map
					</h2>
					<div id="googleMap"></div>
				</div> <!-- /.col-sm-6 -->
			</div>
		</div>
	</section>



	<section class="contacts section-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="contact">
						<div class="contact-icon">
							<i class="ion-android-map"></i>
						</div>
						<div class="contact-name">
							Address
						</div>
						<div class="contact-detail">
							Asowld Avenew P.O Box <br>
							353 Mountain View. United States of America. 
						</div>
					</div> <!-- /.contact -->
				</div> <!-- /.col-sm-4 -->
				<div class="col-sm-4">
					<div class="contact">
						<div class="contact-icon">
							<i class="ion-ios-telephone"></i>
						</div>
						<div class="contact-name">
							Phone
						</div>
						<div class="contact-detail">
							Local: 1-800-523-hello <br>
							Mobile: 1-400-623-hello
						</div>
					</div> <!-- /.contact -->
				</div> <!-- /.col-sm-4 -->
				<div class="col-sm-4">
					<div class="contact">
						<div class="contact-icon">
							<i class="ion-email"></i>
						</div>
						<div class="contact-name">
							Email Address
						</div>
						<div class="contact-detail">
							info@themewagon.com <br>
							<a href="http://www.themewagon.com">www.themewagon.com</a>
						</div>
					</div> <!-- /.contact -->
				</div> <!-- /.col-sm-4 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.contacts -->
 

					
	
	
		<ul class="social-icon">
			<li><a href="#"><i class="ion-social-twitter"></i></a></li>
			<li><a href="#"><i class="ion-social-facebook"></i></a></li>
			<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
			<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
		</ul>
	</div> <!-- /.subscribe -->


@stop