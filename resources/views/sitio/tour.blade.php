@extends('base.details')

@section('content')

	<section class="row partyBoatsDetails" ng-app="app" ng-controller="ctrl" style="margin:0 !important;background-image: url({{ asset("around") }}/img/excursion/details/content.png);background-position: center; background-repeat: no-repeat;background-size:100% 100%;">
		<div class="container">
			<div class="col-xs-12 fondoDetails">
				<div class="col-xs-12 col-sm-8">
					<div>
						<h1 class="text-left hidden-xs">@{{ tour.titulo }}</h1>
						<h1 class="text-center visible-xs">@{{ tour.titulo }}</h1>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 hidden-xs">
					<div class="text-right">
						<a href="{{ url('excursions') }}" class="btn btn-primary btnReturn text-uppercase">Back to Search Results</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row contenedorTour">
					<div id="main_area" class="col-sm-8 col-xs-12 mb2">
					    <div class="row">
					        <div class="col-xs-12" id="slider">
					            <!-- Top part of the slider -->
					            <div class="row">
					                <div class="col-sm-12" id="carousel-bounding-box">
					                    <div class="carousel slide" id="myCarousel">
					                        <!-- Carousel items -->
					                        <div class="carousel-inner" style="margin-bottom: 10px;">
					                            <div class="item active" data-slide-number="0">
					                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/1.jpg" style="box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.5); border-radius: 20px;">
					                        	</div>
					                        	<div class="item" data-slide-number="1">
					                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/2.jpg" style="box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.5); border-radius: 20px;">
					                        	</div>
					                        	<div class="item" data-slide-number="2">
					                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/3.jpg" style="box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.5); border-radius: 20px;">
					                        	</div>
					                        	<div class="item" data-slide-number="3">
					                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/4.jpg" style="box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.5); border-radius: 20px;">
					                        	</div>

					                        </div><!-- Carousel nav -->
					                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%)">
					                            <span class="glyphicon glyphicon-chevron-left"></span>                                       
					                        </a>
					                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%)">
					                            <span class="glyphicon glyphicon-chevron-right"></span>
					                        </a>
				                        </div>
					                </div>
					            </div>
					        </div>
					    </div>

					    <div class="row hidden-xs" id="slider-thumbs">
				            <ul class="hide-bullets">
				                <li class="col-sm-12 text-center" style="margin-bottom: 0">
				                    <a class="dotCarousel" id="carousel-selector-0" style="font-size: 15px; margin-right: 5px; margin-top: 0;"><i class="fas fa-circle"></i></a>
				                    <a class="dotCarousel" id="carousel-selector-1" style="font-size: 15px; margin-right: 5px; margin-top: 0;"><i class="fas fa-circle"></i></a>
				                    <a class="dotCarousel" id="carousel-selector-2" style="font-size: 15px; margin-right: 5px; margin-top: 0;"><i class="fas fa-circle"></i></a>
				                    <a class="dotCarousel" id="carousel-selector-3" style="font-size: 15px; margin-right: 5px; margin-top: 0;"><i class="fas fa-circle"></i></a>
				                </li>
				            </ul>                 
					    </div>

				    	<div class="row tour-detalle" ng-bind-html="tour.descripcion_completa"></div>
				    	
				    	<div class="col-xs-12 col-sm-12" ng-show="tour.modalidades.length>1 && tour.modalidades[0].detalle">
	                        <ul class="nav nav-pills nav-justified" role="tablist" align="center">
	                            <li role="presentation" class="" ng-repeat="aux in tour.modalidades" id="li@{{ aux.id }}">
	                            	<a href="#details@{{ aux.id }}" aria-controls="@{{ aux.descripcion }}" role="tab" data-toggle="tab">@{{ aux.descripcion }}</a>
                            	</li>
	                        </ul>

	                        <div class="tab-content" id="tab-content">
	                            <div role="tabpanel" class="tab-pane" id="details@{{ aux.id }}" ng-repeat="aux in tour.modalidades">
	                                <div class="row">
	                                    <div class="col-xs-12 col-sm-12" ng-bind-html="aux.detalle">
	                                    	
	                                    </div>
	                                </div>
	                            </div>     
	                        </div>
	                    </div>

	                    <div ng-show="tour.know">
							<div ng-bind-html="tour.know"></div>
						</div>

						<div class="col-xs-12 col-sm-12" ng-show="tour.video == true">
							<video id="myVideo" class="visible-lg visible-sm" ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/video.mp4" autoplay loop muted></video>
						</div>
					</div>
					<form action="/" class="col-sm-4 col-xs-12" name="form" id="formTour" method="post" ng-submit="agregarTour($event)">
					    <div class="row formTour">
					    	<h1 class="col-xs-12 text-center text-uppercase formTitle">Price And Availability</h1>
					        
					        <div class="col-xs-12">
					            <div class="form-group text-uppercase">
					                <label for="">
					                    Select the Date
					                </label>
					                <input type="text" class="form-control formDate" id="dateTour1" name="fecha" placeholder="Select Date" ng-model="tour.fecha" required style="font-size: 14px !important;">
					            </div>
					        </div>

					        <div class="col-xs-12 col-sm-12">
					        	<h1 class="col-xs-12 text-uppercase formSubtitle">Select Pickup Location & Time:</h1>
					            <div class="form-group" ng-show="tour.id!=17">
									<select ng-model="tour.hotel" ng-options="aux.descripcion for aux in hoteles" name="hotel" class="form-control selectpicker" style="font-size: 14px !important;">
	                    			<option value disabled>Hotel</option>
	                  				</select>
					            </div>
					            <div class="form-group" ng-show="tour.recogidas.length>1">
					            	<select ng-model="tour.hotel" ng-options="aux.descripcion for aux in tour.recogidas" name="hotel" class="form-control selectpicker" style="font-size: 14px !important;">
				                    	<option value disabled>Hotel</option>
				                  	</select>
								</div>
								<div class="form-group" ng-show="tour.recogidas.length>1">
									<select class="form-control" name="" ng-model="tour.horario">
										<option value="">Turn</option>
										<option ng-repeat="(key,aux) in tour.hotel.turno" value="@{{ aux.descripcion }}">@{{ aux.descripcion }}</option>
									</select>
								</div>
					            <div class="form-group">
					                <input type="text" id="room" name="room" class="form-control formDate" style="font-size: 16px !important;" placeholder="Room" ng-model="tour.room">
					            </div>
					        </div>

					        <div class="col-xs-12 col-sm-12" ng-show="tour.horarios.length>1">
					            <div class="form-group">
					                <select 
					                	class="form-control" 
					                	name="horario" 
					                	ng-model="tour.horario"
					                	ng-required="tour.horarios.length>1" style="font-size: 14px !important;">
					                    <option value disabled>Time</option>
					                    <option ng-repeat="aux in tour.horarios" value="@{{ aux }}">@{{ aux }}</option>
					                </select>
					            </div>
					        </div>

					        <div class="col-xs-12 col-sm-12">
								<hr style="border-top: 1px solid #000;
								 padding: 0 !important">
					        </div>

					        <div class="col-xs-12 col-sm-12" ng-show="tour.modalidades.length>1">
					            <div class="form-group">
					                <label for="">
					                    <h1 class="text-uppercase formSubtitle">Select Excursion Option:</h1>
					                </label>
					                <select 
					                	class="form-control"
					                	id="modalidad"
					                	ng-model="tour.modalidad"
					                	ng-change="calcularPrecioTour()"
					                	ng-options="aux.descripcion for aux in tour.modalidades"
					                	ng-required="tour.modalidades.length>1">
					                    <option value="">Choose one</option>
					                </select>
					            </div>
					        </div>
					        
					        <div class="col-xs-12 col-sm-4">
					        	<div class="text-center" style="margin-bottom: 0; font-weight: bold;">
				                    Adults
				                </div>
				                <div class="text-center" style="font-size: 18px; font-weight: bold;">
				                    @{{tour.precioAdultos  | currency:'$ ' }}
				                </div>
					            <div class="form-group">
					                <select 
					                	class="form-control" 
					                	name="adultos"
					                	ng-model="tour.adultos"
					                	ng-change="calcularPrecioTour();"
					                	required style="font-size: 14px !important;">
					                    <option value="">
					                        Choose one
					                    </option>
					                    <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
					                </select>
					            </div>
					        </div>
					        <div class="col-xs-12 col-sm-4">
								<div class="text-center" style="margin-bottom: 0; font-weight: bold;">
				                    Children
				                </div>
				                <div class="text-center" style="font-size: 18px; font-weight: bold;">
				                    @{{tour.precioNinos  | currency:'$ ' }}
				                </div>
					            <div class="form-group">
					                <select 
					                	class="form-control"
					                	name="ninos"
					                	ng-model="tour.ninos"
					                	ng-change="calcularPrecioTour();" style="font-size: 14px !important;">
					                    <option value="">
					                        Choose one
					                    </option>
					                    <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
					                </select>
					            </div>
					        </div>
					        <div class="col-xs-12 col-sm-4">
								<div class="text-center" style="margin-bottom: 0; font-weight: bold;">
				                    Infants
				                </div>
				                <div class="text-center" style="font-size: 18px; font-weight: bold;">
				                    @{{tour.precioInfants  | currency:'$ ' }}
				                </div>
					            <div class="form-group">
					                <select 
					                	class="form-control formDetails"
					                	name="aa"
					                	ng-model="tour.infants"
					                	ng-change="calcularPrecioTour();"" style="font-size: 14px !important;">
					                    <option value="">
					                        Choose one
					                    </option>
					                    <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
					                </select>
					            </div>
					        </div>

					        <div class="col-xs-12 col-sm-12">
								<hr style="border-top: 1px solid #000;
								 padding: 0 !important">
					        </div>
							<input type="hidden" id="code_dis" name="code_dis">
							<div class="col-xs-12 col-md-8 col-md-offset-2">
				                <div id="msjCupon" class="text-center formSubtitle text-uppercase">
				                	Reference Code
				                </div>
					            <div class="form-group">
					                <input type="text" id="cupon_" name="referenceCode" class="form-control formDate" style="font-size: 14px !important; text-align: center;">
					                <input type="hidden" class="form-control formDate" id="idTour" value="@{{tour.id}}" required style="font-size: 14px !important;" readonly>
					            </div>
					        </div>

					        <div class="col-xs-12 col-sm-12">
								<hr style="border-top: 1px solid #000;
								 padding: 0 !important">
					        </div>
							<input type="hidden" id="finalPrice" name="descuento" ng-model="tour.descuento" ng-change="calcularPrecioTour();">
							<input type="hidden" id="priceoreal" value="@{{tour.precio}}">

							<h1 class="col-xs-12 text-center text-uppercase formTitle"  style="color: #000 !important;">Total Amount</h1>
					        <h2 class="col-xs-12 text-center formTitle" id="price" style="color: #000 !important; margin: 0;">$ @{{tour.precio}}</h2>
					        <h2 class="col-xs-12 text-center" style="color: #000 !important; margin: 0; font-size: 12px;">All taxes included</h2>
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12 text-center col-md-10 col-md-offset-1" style="padding-bottom: 10px; padding-top: 10px;">
							        	<div class="form-group">
											<button 
												type="submit"
												class="col-xs-12 btn btn-primary btnReturn text-uppercase btn-block" 
												name="tour" 
												ng-click="opcion='reservar'"
												value="tour">
								                Checkout now
								            </button>
							            </div>
							        </div>
									<div class="col-xs-12 text-center col-md-10 col-md-offset-1">
							        	<div class="form-group">
											<button 
												type="submit" 
												class="col-xs-12 btn btn-primary btnReturn text-uppercase btn-block" 
												name="tour" 
												ng-click="opcion='agregar'"
												value="tour">
								                Add to Card
								            </button>
							            </div>
							        </div>	
								</div>
							</div>
					    </div>
					</form>

					<div class="col-xs-12 col-sm-4 mt2 visible-xs">
						<a href="{{ url('excursions') }}" class="btn btn-primary btnReturn text-uppercase btn-block">Back to Search Results</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer role="contentinfo" class="probootstrap-footer" style="margin:0 !important;background-image: url({{ asset("around") }}/img/excursion/details/footer.png);background-position: center; background-repeat: no-repeat;background-size:100% 100%; padding-top: 10%">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 text-center" style="margin-top: 15px;">
	                <ul class="probootstrap-footer-social text-center">
	                    <h5 class="call-us text-center" style="color: #431A10;">Follow us</h5>
	                    <li><a href="https://www.facebook.com/dominicanaaround" class="detailsRedes"><i class="fab fa-facebook"></i></a></li>
	                    <li><a href="https://www.instagram.com/dominicanaaround" class="detailsRedes"><i class="fab fa-instagram"></i></a></li>
	                    <li><a href="#" class="detailsRedes"><i class="fab fa-tripadvisor"></i></a></li>
	                </ul>
	            </div>
	            <div class="col-md-12 text-center" style="font-size: 16px;">
	                <p class="call-us" style="color: #431A10;">24 HOUR ASSISTANCE<br>CALL US: 1(829) 821-5833</p>
	            </div>
	            <div class="col-xs-12 text-center tresEM powered">
                  <h5 class="call-us text-white text-center" style="color: #431A10 !important; font-size: 1em !important;">Developed by <a href="http://domtecno.com" target="_blank" class="linkDevelop">Domtecno.com</a></h5>
                  <h5 class="call-us text-white text-center" style="color: #431A10 !important; font-size: 1em !important;">&copy Copyright Dominicana Around 2019</h5>
              	</div>
	        </div>
	    </div>
	</footer>

@endsection

@section('js')
<script>
	window.pos = {{ $id }};

</script>
<script src="{{ asset('js/coupon.js') }}"></script>
@endsection

