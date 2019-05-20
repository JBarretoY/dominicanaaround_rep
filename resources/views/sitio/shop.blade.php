@extends('base.sitio')

@section('content')
	<section class="row" style="background-image: url({{ asset("around") }}/img/excursion/fondo2.png);background-position: center; background-repeat: no-repeat;background-size:100% 100%">

		<div class="container">
			<div class="row formShop mt1">
				<div class="col-xs-12 col-sm-12">
					<form class="row" action="/paypal" method="post" id='reservation'>
						@csrf
						<h1 class="col-xs-12 text-center formTitle text-uppercase" style="margin: 0; padding-top: 10px;">Reservation</h1>
						<div class="col-xs-12 col-sm-12">
							<hr class="detailHr" style="border-top: 3px solid #407B1E !important;">
				        </div>
						<div 
							class="col-xs-10 col-xs-offset-1" 
							ng-if="carrito.traslados.length==0 && carrito.tours.length==0 && carrito.vip.length==0 && carrito.wifi.length==0">
							<div class="alert alert-success text-center tresEM">Add item to <i class="fa fa-shopping-cart"></i></div>
						</div>

						<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.traslados.length>0">
							<h2 class="col-xs-12 text-center formTitle text-uppercase">Transfers</h2>
							<table class="table table-bordered text-center table-shop">
								<thead>
									<tr>
										<th class="text-center">From</th>
										<th class="text-center">To</th>
										<th class="text-center">Service</th>
										<th class="text-center">Passengers</th>
										<th class="text-center">Type</th>
										<th class="text-center">Vehicle</th>
										<th class="text-center">Price</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="(index,aux) in carrito.traslados" ng-re>
										<td>@{{ aux.de }}</td>
										<td>@{{ aux.para }}</td>
										<td>@{{ aux.vip?aux.vip:'Regular' }}</td>
										<td>@{{ aux.pasajeros }}</td>
										<td>@{{ aux.tipo==1?"One Way":"Round Trip" }}</td>
										<td>@{{ aux.vehiculo}}</td>
										<td>@{{ aux.precio | currency:"$ " }}</td>
										<td>
											<a ng-click="eliminarTraslado(index)"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.tours.length>0">
							<h2 class="col-xs-12 text-center formTitle text-uppercase">Tours</h2>
							<table class="table table-bordered text-center table-shop">
								<thead>
									<tr>
										<th class="text-center">Date</th>
										<th class="text-center">Tour</th>
										<th class="text-center">Modality</th>
										<th class="text-center">Pick-Up<br>Hotel | Turn</th>
										<th class="text-center">Adults</th>
										<th class="text-center">Children</th>
										<th class="text-center">Price</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="aux in carrito.tours">
										<td>@{{ aux.fecha }}</td>
										<td>@{{ aux.tour }}</td>
										<td>@{{ aux.modalidad }}</td>
										<td>@{{ aux.hotel }} | @{{ aux.horario }}</td>
										<td>@{{ aux.adultos }}</td>
										<td>@{{ aux.ninos>0 ? aux.ninos : " - " }}</td>
										<td>@{{ aux.precio | currency:"$ " }}</td>
										<td>
											<a ng-click="eliminarTour(index)"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.vip.length>0">
							<h2 class="col-xs-12 text-center formTitle text-uppercase">VIP Service</h2>
							<table class="table table-bordered text-center table-shop">
								<thead>
									<tr>
										<th class="text-center">Nº Persons</th>
										<th class="text-center">Arrival Date</th>
										<th class="text-center">Departure Date</th>
										<th class="text-center">Price</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="aux in carrito.vip">
										<td>@{{ aux.pasajeros }}</td>
										<td>@{{ aux.llegada_fecha }}</td>
										<td>@{{ aux.salida_fecha }}</td>
										<td>@{{ aux.precio | currency:"$ " }}</td>
										<td>
											<a ng-click="eliminarVIP(index)"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!--div class="col-xs-10 col-xs-offset-1" ng-if="carrito.wifi.length>0">
							<h2 class="col-xs-12 text-center formTitle text-uppercase">Wifi Service</h2>
							<table class="table table-bordered text-center table-shop">
								<thead>
									<tr>
										<th class="text-center">Nro Device</th>
										<th class="text-center">Arrival Date</th>
										<th class="text-center">Departure Date</th>
										<th class="text-center">Price</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="aux in carrito.wifi">
										<td>@{{ aux.dispositivos }}</td>
										<td>@{{ aux.llegada_fecha }}</td>
										<td>@{{ aux.salida_fecha }}</td>
										<td>@{{ aux.precio | currency:"$ " }}</td>
										<td>
											<a ng-click="eliminarWifi(index)"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div-->

						<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.traslados.length>0 || carrito.tours.length>0 || carrito.vip.length>0">
							<h2 class="col-xs-12 text-center formTitle text-uppercase">Client Info</h2>
				            <div class="col-xs-12 col-sm-6">
				                <div class="form-group">
				                    <label class="tresEM" style="color: #000;">
				                        * First Name
				                    </label>
				                    <input class="form-control" name="nombre" type="text"  placeholder="Enter name" required>
				                </div>
				            </div>
				            <div class="col-xs-12 col-sm-6">
				                <div class="form-group">
				                    <label class="tresEM" style="color: #000;">
				                        * Surname
				                    </label>
				                    <input class="form-control" name="apellido" type="text"  placeholder="Enter last name" required>
				                </div>
				            </div>
				            <div class="col-xs-12 col-sm-6">
				                <div class="form-group">
				                    <label class="tresEM" style="color: #000;">
				                        * Email
				                    </label>
				                    <input class="form-control" name="correo" type="email"  placeholder="Enter email" required>
				                </div>
				            </div>
				            <div class="col-xs-12 col-sm-6">
				                <div class="form-group">
				                    <label class="tresEM" style="color: #000;">
				                        * Phone number
				                    </label>
				                    <input class="form-control" name="telefono" type="text"  placeholder="Enter phone number" required>
				                </div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label class="tresEM" style="color: #000;">
										* Payment method
									</label>
									<select name="payment" id="payment" class="form-control" required>
										<option disabled selected></option>
										<option value="cash-hand">Cash Hand</option>
										<option value="paypal">PayPal</option>
									</select>
								</div>
							</div>
							<!--div class="col-xs-12" ng-if="carrito.tours.length>0">
								<div class="form-group">
									<label class="tresEM" style="color: #000;">
										* Hotel Pickup
									</label>
									<input class="form-control" name="hotel" type="text" list="listHoteles" placeholder="Enter Hotel" required>
									@include("base.hoteles")
								</div>
							</div-->
				            <div class="col-xs-12">
				                <div class="form-group">
				                    <label class="tresEM" style="color: #000;">
				                        Comments
				                    </label>
				                    <textarea class="form-control" name="comentarios" rows="5" placeholder="Comments"></textarea>
				                </div>
				            </div>
						</div>
						<input type="hidden" id="finalPrice" name="finalPrice">
						<h2 id="priceText" class="col-xs-10 col-xs-offset-1 formPrice text-center" ng-show="precioTotal()>0">
							@{{ precioTotal() | currency:"$ "}}
							<input type="hidden" id="price" name="precio" value="@{{ precioTotal() }}">
						</h2>

						{{--<div class="col-xs-12 col-sm-6 col-sm-offset-3 panel creditCard mt2" ng-show="precioTotal()>0">
							<div class="row panel-body">
								<img class="col-xs-5 col-xs-offset-3 mb3" src="{{ asset('img/tarjetas.png') }}" alt="">
								<div class='col-xs-6 form-group'>
									<label class="control-label tresEM" style="color: #000;">Card Number</label>
									<input 
										autocomplete='off' 
										class='form-control'
										size='20' 
										type='text' 
										name="card_no"
										id="card_no"
										required>
								</div>
								<div class='col-xs-6 form-group'>
									<label class="control-label tresEM" style="color: #000;">Full Name</label>
									<input 
										autocomplete='off' 
										class='form-control'
										type='text' 
										name="full_name"
										id="full_name"
										required>
								</div>
								<div class='col-xs-4 form-group'>
									<label class="control-label tresEM" style="color: #000;">CVV</label>
									<input 
										autocomplete='off'
										class='form-control'
										placeholder='ex. 311'
										size='3'
										type='number'
										name="cvvNumber"
										id="cvvNumber"
										required>
								</div>
								<div class='col-xs-4 form-group'>
									<label class="control-label tresEM" style="color: #000;">Expiration Month</label>
									<input 
										class='form-control'
										placeholder='MM'
										size='2'
										min="0"
										max="12"
										type='text'
										name="ccExpiryMonth"
										id="ccExpiryMonth"
										required>
								</div>
								<div class='col-xs-4 form-group'>
									<label class="control-label tresEM" style="color: #000;">Expiration Year</label>
									<input 
										class='form-control card-expiry-year'
										placeholder='YY'
										size='2'
										min="18"
										type='text'
										name="ccExpiryYear"
										id="ccExpiryYear"
										required>
								</div>
							</div>
						</div>--}}
						
						<div class="col-xs-10 col-xs-offset-1 mt2" ng-if="carrito.traslados.length>0 || carrito.tours.length>0 || carrito.vip.length>0">
							<input data-toggle="tooltip" title="Accept terms and conditions" ng-model="terminos" id="terminos" name="terminos" type="checkbox" value="terminos">
					        <a	class="aShop"
								href="#"
								data-toggle="modal"
								data-target="#terminosModales">
					        	<strong data-toggle="tooltip" 
										title="Read terms and conditions" style="font-size: 3em;">
										I have read and accept the terms and conditions
								</strong>
					    	</a>

							<button 
								type="submit"
								class="btn btn-success pull-right btnReturn"
								ng-disabled="!terminos" style="width:12em">
									<!--i class="fa fa-paypal"></i-->
									Payment
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
			
		<footer role="contentinfo" class="probootstrap-footer">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6 pull-left pull-left-footer" style="margin-top: 18px;">
		                <p class="call-us">24 HOUR ASSISTANCE</p>
		                <p class="call-us">CALL US: 1(829) 821-5833</p>
		            </div>
		            <div class="col-md-6 pull-right pull-right-footer" style="margin-top: 15px;">
		                <ul class="probootstrap-footer-social pull-right">
		                    <h5 class="call-us text-white text-center" style="color: #fff">Follow us</h5>
		                    <li><a href="https://www.facebook.com/dominicanaaround" class="redes"><i class="fab fa-facebook"></i></a></li>
		                    <li><a href="https://www.instagram.com/dominicanaaround" class="redes"><i class="fab fa-instagram"></i></a></li>
		                    <li><a href="#" class="redes"><i class="fab fa-tripadvisor"></i></a></li>
		                </ul>
		            </div>
	            </div>
	            <div class="row">
		            <div class="col-xs-12 text-center tresEM powered">
						<h5 class="call-us text-white text-center" style="color: #fff; font-size: 1em !important;">Developed by <a href="http://domtecno.com" target="_blank" class="linkDevelop">Domtecno.com</a></h5>
						<h5 class="call-us text-white text-center" style="color: #fff; font-size: 1em !important;">&copy Copyright Dominicana Around 2019</h5>
                  	</div>
		        </div>
		    </div>
		</footer>
	</section>
@endsection

@section('js')
<script src="{{ asset('js/cleave.min.js') }}"></script>
<script src="{{ asset('js/coupon.js') }}"></script>
<script>
	new Cleave('#card_no', {
		creditCard: true
	});

	new Cleave('#ccExpiryMonth', {
		date: true,
		datePattern: ['m']
	});

	new Cleave('#ccExpiryYear', {
		date: true,
		datePattern: ['y']
	});
	$(document).ready(function(){
		getDiscountSession();
	});
</script>
@endsection