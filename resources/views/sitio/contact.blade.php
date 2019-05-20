@extends('base.sitio')

@section('content')
	<section class="row" style="background-image: url({{ asset("around") }}/img/excursion/fondo2.png);background-position: center; background-repeat: no-repeat;background-size:100% 100%">
		
		<div class="container">
			<div class="row formContactFondo mb5 mt1">
				<h1 class="col-xs-12 text-center formTitle text-uppercase" style="margin: 0; padding-top: 10px;">About Us</h1>
				<div class="col-xs-12 col-sm-12">
					<hr class="detailHr" style="border-top: 3px solid #407B1E !important;">
		        </div>
		        <div class="col-xs-12 col-sm-12 tresEM verdeAroud">
		        	<img src="{{asset('around')}}/img/logo_md2.png" class="img-fluid img-responsive" style="width: 40%; padding: 10px;">
					<p class="text-justify">Dominicana Around is a tour operator that is dedicated to the tourist operation throughout the eastern part of the Dominican Republic. we organize, promote and direct the sustainable development of tourism in our country, with continuous quality and reliability, giving our clients unforgettable memories.</p>
					<p class="text-justify">We are consolidated the best option of tourism, being recognized as the faculty of excellence, international leader in management and service.</p>
				</div>

				<h1 class="col-xs-12 text-center formTitle text-uppercase" style="margin: 0; padding-top: 10px;">Cancellation Policy</h1>
				<div class="col-xs-12 col-sm-12">
					<hr class="detailHr" style="border-top: 3px solid #407B1E !important;">
		        </div>
		        <div class="col-xs-12 col-sm-12 tresEM verdeAroud">
					<p class="text-justify">It is mandatory to present this voucher to participate in the tour, cancellations are only admited 48hrs in advance. Cancellation do not apply ok bookings for the same day or the Next. Dominicana Around reserves the right to cancel any excursión or change the programa of an excursión if circunstances require it.</p>
				</div>

				<h1 class="col-xs-12 text-center formTitle text-uppercase" style="margin: 0; padding-top: 10px;">Contact</h1>
				<div class="col-xs-12 col-sm-12">
					<hr class="detailHr" style="border-top: 3px solid #407B1E !important;">
		        </div>
		        <div class="col-xs-12 col-sm-12 tresEM verdeAroud">
		        	<div class="col-xs-12 col-sm-6">
			        	<p class="text-center call-us verdeAroud">Email</p>
			        	<p class="text-center">
			        		<a class="text-center" href="mailto:info@domimicanaaround.com">info@domimicanaaround.com</a><br>
							<a class="text-center" href="mailto:jmanuel@dominicanaaround.com">jmanuel@dominicanaaround.com</a><br>
							<a class="text-center" href="mailto:eperez@dominicanaaround.com">eperez@dominicanaaround.com</a><br>
							<a class="text-center" href="mailto:gerencia@dominicanaaround.com">gerencia@dominicanaaround.com</a><br>
							<a class="text-center" href="mailto:reservations@dominicanaaround.com">reservations@dominicanaaround.com</a>
						</p>
					</div>
					<div class="col-xs-12 col-sm-6">
						<p class="text-center call-us verdeAroud">Phone</p>
						<p class="text-center">
							<a class="text-center" href="tel:+18297965201">+1 (829) 796-5201</a><br>
							<a class="text-center" href="tel:+18298215833">+1 (829) 821-5833</a>
						</p>
					</div>

					<div class="col-xs-12 col-sm-6 col-sm-offset-3 panel creditCard mt2">
						<form action="{{ url('/contact') }}" class="row">
						@csrf
							<div class="row panel-body" style="padding: 0;">
								<div class='col-xs-6 form-group'>
									<label class="control-label" style="color: #000;">Your Name</label>
									<input autocomplete='off' class='form-control' type='text' name='name' placeholder='Your Name' required>
								</div>
								<div class='col-xs-6 form-group'>
									<label class="control-label" style="color: #000;">Your email</label>
									<input autocomplete='off' class='form-control' type='email' name='correo' placeholder='Your email' required>
								</div>
								<div class='col-xs-12 form-group'>
									<label class="control-label" style="color: #000;">Your message</label>
									<textarea name="mensaje" rows="2" class='form-control' placeholder='Type your message here' required></textarea>
								</div>
								<div class='col-xs-12 form-group text-center mt1 mb0'>
									<button type="submit" class="btn btn-default btnReturn text-uppercase" style="width:8em;">Send</button>
								</div>
							</div>
						</form>
					</div>

					<div class="col-md-12 text-center">
		                <ul class="probootstrap-footer-social text-center">
		                    <h5 class="call-us verdeAroud text-center">Follow us</h5>
		                    <li><a href="https://www.facebook.com/dominicanaaround" class="redes verdeAroud"><i class="fab fa-facebook"></i></a></li>
		                    <li><a href="https://www.instagram.com/dominicanaaround" class="redes verdeAroud"><i class="fab fa-instagram"></i></a></li>
		                    <li><a href="#" class="redes verdeAroud"><i class="fab fa-tripadvisor"></i></a></li>
		                </ul>
		            </div>
		        </div>
			</div>
			<div class="col-xs-12 text-center tresEM powered mt2">
				<h5 class="call-us text-white text-center" style="color: #fff; font-size: 1em !important;">Developed by <a href="http://domtecno.com" target="_blank" class="linkDevelop">Domtecno.com</a></h5>
				<h5 class="call-us text-white text-center" style="color: #fff; font-size: 1em !important;">&copy Copyright Dominicana Around 2019</h5>
			</div>
		</div>
	</section>
@endsection