@extends('base.sitio')

@section('content')
	<section class="row" style="background-image: url({{ asset("around") }}/img/excursion/fondo2.png);background-position: center; background-repeat: no-repeat;background-size:100% 100%">
		
		<div class="container">
			<div class="col-md-12 tourParty-fondo mt1">
				<div class="row">
					<div class="col-md-3 tourParty-filter-head">
						<div class="col-md-12 text-center text-uppercase tourParty-Filter">
							Filter By
						</div>
						<div class="col-md-12 text-center text-uppercase tourParty-Search">
							Search By Keyboard
						</div>
						<div class="col-md-12 text-center tourParty-Input">
							<input type="text" placeholder="Search..." class="form-control" name="search_input" ng-model="buscador">
						</div>
						<div class="col-md-12 visible-xs">
							<hr class="detailHr" style="border-top: 3px solid #407B1E !important;">
				        </div>
						<div class="col-md-12 text-center text-uppercase tourParty-Search visible-md visible-lg visible-xl">
							Type of Activity
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Culture & Sightseeing" type="checkbox">&nbsp; Culture & Sightseeing</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Water Activities" type="checkbox">&nbsp; Water Activities</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Snorkeling" type="checkbox">&nbsp; Snorkeling</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Adventure" type="checkbox">&nbsp; Adventure</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Night Life" type="checkbox">&nbsp; Night Life</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Private Experiences" type="checkbox">&nbsp; Private Experiences</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Dolphins" type="checkbox">&nbsp; Dolphins</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Diving" type="checkbox">&nbsp; Diving</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Fishing" type="checkbox">&nbsp; Fishing</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Boat Tours" type="checkbox">&nbsp; Boat Tours</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Honeymoon" type="checkbox">&nbsp; Honeymoon</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="act_" value="Shopping" type="checkbox">&nbsp; Shopping</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl" style="margin-bottom: 15px;">
							<label><input id="act_" value="Golf Courses" type="checkbox">&nbsp; Golf Courses</label>
						</div>

						<div class="col-md-12 text-center text-uppercase tourParty-Search visible-md visible-lg visible-xl">When to Go</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input type="checkbox">&nbsp; Sunday</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input type="checkbox">&nbsp; Monday</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input type="checkbox">&nbsp; Tuesday</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input type="checkbox">&nbsp; Wednesday</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input type="checkbox">&nbsp; Thursday</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input type="checkbox">&nbsp; Friday</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl" style="margin-bottom: 15px;">
							<label><input type="checkbox">&nbsp; Saturday</label>
						</div>

						<div class="col-md-12 text-center text-uppercase tourParty-Search visible-md visible-lg visible-xl">Excursion Length</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="lon_" value="Half Day" type="checkbox">&nbsp; Half Day</label>
						</div>
						<div class="col-md-12 tourParty-Check visible-md visible-lg visible-xl">
							<label><input id="lon_" value="Full Day" type="checkbox">&nbsp; Full Day</label>
						</div>
					</div>
					<div id="result0">
						<div class="col-md-9 tourParty" ng-repeat="aux in tours | filter:buscador | orderBy: 'orden'" ng-if="aux.mostrar==true">
							<div class="row tourParty-Item">
								<div class="col-md-4 col-xs-12 tourParty-Item-Imagen">
									<img class="img-responsive" ng-src="{{ asset("/") }}img/tours/@{{aux.id}}.jpg" alt="">
								</div>
								<div class="col-md-6 col-xs-12 tourParty-Item-Texto">
									<h5 class="text-uppercase textoGris titleItem"><a href="{{ url('/') }}/excursion/@{{aux.id}}">@{{ aux.titulo }}</a></h5>
									<!--h5 class="text-uppercase textoGris"><a href="#">@{{ aux.titulo }}</a></h5-->
									<p class="textoGris thumbnail-text titleItem">@{{ aux.localidad }} | @{{ aux.tipo }}</p>
									<p class="textoGris thumbnail-text text-justify">@{{ aux.descripcion }}</p>
								</div>
								<div class="col-md-2 col-xs-12 tourParty-Item-Precio">
									<div class="row text-center">
										<div class="table-responsive">
											<table align="center" class="visible-md visible-lg visible-xl">
												<tr>
													<td align="left" class="fromUSD"></td>
													<td align="left" class="fromUSD"></td>
												</tr>
												<tr>
													<td align="left" class="fromUSD"></td>
													<td align="center" class="fromUSD">From</td>
												</tr>
												<tr>
													<td align="left" class="fromUSD">Adults:</td>
													<td align="center" class="precio">@{{ aux.modalidades[0].precio | currency:"$" }}</td>
												</tr>
												<tr>
													<td align="left" class="fromUSD">Children:</td>
													<td align="center" class="precio">@{{ aux.modalidades[0].nino | currency:"$" }}</td>
												</tr>
												<tr>
													<td align="left" class="fromUSD">Infants:</td>
													<td align="center" class="fromUSD">free</td>
												</tr>
											</table>
											<table align="center" class="visible-xs visible-sm">
												<tr>
													<td colspan="3" align="center" class="fromUSD">From</td>
												</tr>
												<tr>
													<td align="center" class="fromUSD">
														Adults: <span class="precio">@{{ aux.modalidades[0].precio | currency:"$" }} |</span>
													</td>
													<td align="center" class="fromUSD">
														&nbsp;Children: <span class="precio">@{{ aux.modalidades[0].nino | currency:"$" }} |</span>
													</td>
													<td align="center" class="fromUSD">
														&nbsp;Infants: <span class="fromUSD">free</span>
													</td>
												</tr>
											</table>
										</div>
										<div class="col-xs-12 col-md-12">
											<a ng-else href="{{ url('excursion') }}/@{{ aux.id }}" class="btn btn-primary right btnBook text-uppercase">Book Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="result1">
					</div>
					<!--nav class="text-right tourParty-pagination">
						<ul id="pag" class="pagination">
							<li><a href="#">Previous</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</nav-->
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