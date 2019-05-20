<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <title>Dominicana Around</title>
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="apple-touch-icon.png" rel="apple-touch-icon">
        <link href="{{ asset('around/img/logo_md2.png') }}" rel="shortcut icon" type="image/png">
        <link href="{{ asset('/') }}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/sweetalert2/sweetalert2.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.css" rel="stylesheet" />
        <link href="{{ asset('/') }}bower_components/owlcarousel-2/owl.carousel.css" rel="stylesheet">

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css'>
        
        <link href="{{asset('around')}}/css/style.min.css" rel="stylesheet">
        <link href="{{asset('around')}}/css/custom.css" rel="stylesheet">
        <link href="{{ asset('/') }}css/main.css" rel="stylesheet">

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '855045388177283');
            fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=855045388177283&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
    
        <style>
            body {
              font-family: 'Roboto', sans-serif;
            }
            header{
              font-family: 'Marker Notes'; /*a name to be used later*/
              src: url('{{asset('around')}}/css/marker_notes/Marker_Notes.ttf'); /*URL to font*/
            }
            @font-face {
              font-family: 'Marker Notes'; /*a name to be used later*/
              src: url('{{asset('around')}}/css/marker_notes/Marker_Notes.ttf'); /*URL to font*/
            }
            .call-us{
              font-weight: bold;
              font-size: 16px !important;
            }
            .probootstrap-footer{
                background-color: rgba(0, 0, 0, 0);
            }
          </style>
    </head>
    <body ng-app="app" ng-controller="ctrl">
        <!-- Header -->
        <header role="banner" class="probootstrap-header header-top" style="background-image: url({{asset('around')}}/img/excursion/details/header.png);background-position: center; background-repeat: no-repeat;background-size:101% 100%; height: 100vh;font-family: sans-serif !important;">
            <div class="row" style="background: #e3d8c4;">
                <a href="#" class="probootstrap-logo visible-xs"><img src="{{asset('around')}}/img/logo_movil.png" class="img-fluid" style="width: 20%; padding: 5px;"></a>
                <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
                <div class="mobile-menu-overlay"></div>

                <nav role="navigation" class="probootstrap-nav hidden-xs my-navbar">
                    <div>
                        <a href="#" class="hidden-xs probootstrap-logo-center"><img src="{{asset('around')}}/img/logo_md2.png" class="img-logo-header mb4"></a>
                    </div>
                    <ul class="probootstrap-main-nav color-menu">
                        <li class="text-justify li-item-left"><a href="{{url('/')}}">Home</a></li>
                        <li class="text-justify li-item"><a href="{{url('excursions')}}">Excursion</a></li>
                        <li class="text-justify li-item hidden-xs" id="transf"><a href="#/">Transfer</a></li>
                        <!--li class="text-justify"><a href="{{url('rent-car')}}">Rent-Car</a></li-->
                        <li class="text-justify li-item"><a href="{{url('contact')}}">Contact</a></li>
                        <li class="text-justify li-item-right"><a class="{{ Request::is('shop')?'tituloVerde':'' }}" href="{{ url('/shop') }}"><i style="padding-right:.2em" class="fas fa-shopping-cart" aria-hidden="true"></i>(@{{nro}})</a></li>
                    </ul>

                    <div id="tras" class="hidden">
                      <div class="tab-content formTransfer col-md-8 col-md-offset-2">
                        <div class="tab-pane fade in active" id="transfer">
                            <section class="row">
                                <form action="" class="col-xs-12" id="formTraslado" method="post" ng-submit="agregarTraslado($event)">
                                    <div class="row formTr">
                                      <button type="button" class="close" id="closeTras" aria-label="Close" style="margin-top: 0.75em"><span aria-hidden="true">&times;</span></button>
                                      <h2 class="col-xs-12 text-center text-uppercase mb-4 font-weight-bold" style="font-size: 2em !important;color: #407B1E;margin: 0px;">Private Transfer</h2>

                                        <div class="col-xs-12 col-sm-12"><hr class="detailHr" style="border-top: 3px solid #407B1E !important;"></div>
                                        <div class="col-xs-6" style="text-align: left !important;">
                                            <div class="form-group">
                                                <label for="">
                                                    *From
                                                </label>
                                                <select
                                                    class="form-control select2"
                                                    ng-change="cambiarDe();calcularPrecioTraslado();"
                                                    name="de"
                                                    ng-model="traslado.de"
                                                    ng-options="aux.descripcion for aux in deOpciones"
                                                    required>
                                                    <option value>Choose one</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6" style="text-align: left !important;">
                                            <div class="form-group">
                                                <label for="">
                                                    *To
                                                </label>
                                                <select
                                                    id="hotel"
                                                    class="form-control select2_para"
                                                    name="para"
                                                    ng-change="calcularPrecioTraslado(); cambiarPara();"
                                                    ng-model="traslado.para"
                                                    ng-options="aux.descripcion for aux in paraOpciones"
                                                    required>
                                                    <option value="">
                                                        Choose one
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6" style="text-align: left !important;">
                                            <div class="form-group">
                                                <label for="">
                                                    *Passengers
                                                </label>
                                                <select
                                                    class="form-control select2"
                                                    name="adultos"
                                                    ng-change="calcularPrecioTraslado();cambiarPasajeros()"
                                                    ng-model="traslado.pasajeros"
                                                    required>
                                                    <option value="">
                                                        Choose one
                                                    </option>
                                                    <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6" style="text-align: left !important;">
                                            <div class="form-group">
                                                <label for="">
                                                    *Type Transfer
                                                </label>
                                                <select
                                                    class="form-control select2"
                                                    name="tipo"
                                                    ng-change="calcularPrecioTraslado()"
                                                    ng-model="traslado.tipo"
                                                    required>
                                                    <option value="">
                                                        Choose one
                                                    </option>
                                                    <option value="1">
                                                        One Way
                                                    </option>
                                                    <option value="2">
                                                        Round Trip
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div ng-show="traslado.pasajeros>0">
                                            <h4 class="col-xs-12 text-center text-uppercase" style="margin: 10px 0px 0px 0px;">Type Vehicle</h4>

                                            <!--div class="row">
                                                <div class="col-xs-12 col-md-4 col-md-offset-4" ng-show="traslado.pasajeros<=6">
                                                    <div class="checkbox">
                                                      <label style="color:#555555; padding-left: 0.5em;padding-right: 0.5em;">
                                                        <input  ng-change="calcularPrecioTraslado();"
                                                                ng-model="traslado.vip"
                                                                type="radio"
                                                                id="vip"
                                                                name="vip"
                                                                value="Suburban" class="checkbox-input">
                                                            <div class="thumbnail">
                                                                <img ng-src="{{ asset("/") }}img/transfer/suburban.png" alt="..." class="img-responsive" style="max-height: 100px;margin:auto;display:block;">
                                                                <h4 class="text-center description-tour em15">VIP Chevrolet Suburban</h4>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div-->            
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-4" ng-show="traslado.pasajeros<=11">
                                                    <div class="checkbox">
                                                        <label style="color:#555555; padding-left: 0.5em;padding-right: 0.5em;">
                                                            <input  ng-change="calcularPrecioTraslado();"
                                                                ng-model="traslado.vehiculo"
                                                                type="radio"
                                                                id="vehiculo"
                                                                name="vehiculo"
                                                                value="Hyundai Grand" class="checkbox-input">
                                                            <div class="thumbnail">
                                                                <center><img ng-src="{{ asset("/") }}img/transfer/h1.png" alt="..." class="img-responsive" /center>
                                                                <h4 class="text-center description-tour em15">Hyundai Grand Starex</h4>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4" ng-show="traslado.pasajeros<=11">
                                                    <div class="checkbox">
                                                        <label style="color:#555555; padding-left: 0.5em;padding-right: 0.5em;">
                                                            <input  ng-change="calcularPrecioTraslado();"
                                                                ng-model="traslado.vehiculo"
                                                                type="radio"
                                                                id="vehiculo"
                                                                name="vehiculo"
                                                                value="Hyundai H1" class="checkbox-input">
                                                            <div class="thumbnail">
                                                                <img ng-src="{{ asset("/") }}img/transfer/h1.png" alt="..." class="img-responsive" >
                                                                <h4 class="text-center description-tour em15">Hyundai H1</h4>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4" ng-show="traslado.pasajeros<=16">
                                                    <div class="checkbox">
                                                        <label style="color:#555555; padding-left: 0.5em;padding-right: 0.5em;">
                                                            <input  ng-change="calcularPrecioTraslado();"
                                                                ng-model="traslado.vehiculo"
                                                                type="radio"
                                                                id="vehiculo"
                                                                name="vehiculo"
                                                                value="Haice" class="checkbox-input">
                                                            <div class="thumbnail">
                                                                <img ng-src="{{ asset("/") }}img/transfer/haice.png" alt="..." class="<img ng-src="{{ asset("/") }}img/transfer/haice.png" alt="..." class="img-responsive" >
                                                                <h4 class="text-center description-tour em15">Haice</h4>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-4" ng-show="traslado.pasajeros<=22">
                                                    <div class="checkbox">
                                                        <label style="color:#555555; padding-left: 0.5em;padding-right: 0.5em;">
                                                            <input  ng-change="calcularPrecioTraslado();"
                                                                ng-model="traslado.vehiculo"
                                                                type="radio"
                                                                id="vehiculo"
                                                                name="vehiculo"
                                                                value="Toyota Coaster" class="checkbox-input">
                                                            <div class="thumbnail">
                                                                <img ng-src="{{ asset("/") }}img/transfer/coaster.png" alt="..." class="img-responsive" >
                                                                <h4 class="text-center description-tour em15">Toyota Coaster</h4>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4" ng-show="traslado.pasajeros<=33">
                                                    <div class="checkbox">
                                                        <label style="color:#555555; padding-left: 0.5em;padding-right: 0.5em;">
                                                            <input  ng-change="calcularPrecioTraslado();"
                                                                ng-model="traslado.vehiculo"
                                                                type="radio"
                                                                id="vehiculo"
                                                                name="vehiculo"
                                                                value="Yutong I" class="checkbox-input">
                                                            <div class="thumbnail">
                                                                <img ng-src="{{ asset("/") }}img/transfer/yutong1.png" alt="..." class="img-responsive" >
                                                            <h4 class="text-center description-tour em15">Yutong I</h4>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-4" ng-show="traslado.pasajeros<=54">
                                                    <div class="checkbox">
                                                        <label style="color:#555555; padding-left: 0.5em;padding-right: 0.5em;">
                                                            <input  ng-change="calcularPrecioTraslado();"
                                                                ng-model="traslado.vehiculo"
                                                                type="radio"
                                                                id="vehiculo"
                                                                name="vehiculo"
                                                                value="Yutong II" class="checkbox-input">
                                                            <div class="thumbnail">
                                                                <img ng-src="{{ asset("/") }}img/transfer/yutong2.png" alt="..." class="img-responsive" >
                                                            <h4 class="text-center description-tour em15">Yutong II</h4>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                                            <div class="row">
                                                <h4 class="col-xs-12 text-center text-uppercase" ng-show="traslado.de.id==-1" style="margin: 0px 0px 10px 0px;">Arrival</h4>
                                                <h4 class="col-xs-12 text-center text-uppercase" ng-show="traslado.de.id!=-1" style="margin: 0px 0px 10px 0px;">Departure</h4>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Date
                                                        </label>
                                                        <input
                                                            ng-model="traslado.llegada_fecha"
                                                            class="form-control"
                                                            id="date1"
                                                            name="llegada_fecha"
                                                            type="text"
                                                            placeholder="Select Date"
                                                            ng-required="traslado.tipo">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Time
                                                        </label>
                                                        <input
                                                            ng-model="traslado.llegada_hora"
                                                            class="form-control"
                                                            id="time1"
                                                            name="llegada_hora"
                                                            type="text"
                                                            placeholder="Select Time"
                                                            ng-required="traslado.tipo">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Airline Name
                                                        </label>
                                                        <input
                                                            ng-model="traslado.llegada_aerolinea"
                                                            class="form-control"
                                                            name="
                                                            llegada_aerolinea"
                                                            type="text"
                                                            placeholder="Enter airline name"
                                                            ng-required="traslado.tipo">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Flight Number
                                                        </label>
                                                        <input
                                                            ng-model="traslado.llegada_vuelo"
                                                            class="form-control"
                                                            name="llegada_vuelo"
                                                            type="text"
                                                            placeholder="Enter flight name"
                                                            ng-required="traslado.tipo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12" ng-show="traslado.tipo==2">
                                            <div class="row">
                                                <h4 class="col-xs-12 text-center text-uppercase" ng-show="traslado.de.id==-1" style="margin: 0px 0px 10px 0px;">Departure</h4>
                                                <h4 class="col-xs-12 text-center text-uppercase" ng-show="traslado.de.id!=-1" style="margin: 0px 0px 10px 0px;">Arrival</h4>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Date
                                                        </label>
                                                        <input
                                                            ng-model="traslado.salida_fecha"
                                                            class="form-control"
                                                            id="date2"
                                                            name="salida_fecha"
                                                            type="text"
                                                            placeholder="Select Date"
                                                            ng-required="traslado.tipo==2">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Time
                                                        </label>
                                                        <input
                                                            ng-model="traslado.salida_hora"
                                                            class="form-control"
                                                            id="time2"
                                                            name="salida_hora"
                                                            type="text"
                                                            placeholder="Select Time"
                                                            ng-required="traslado.tipo==2">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Airline Name
                                                        </label>
                                                        <input
                                                            ng-model="traslado.salida_aerolinea"
                                                            class="form-control"
                                                            name="salida_aerolinea"
                                                            type="text"
                                                            placeholder="Enter airline name"
                                                            ng-required="traslado.tipo==2">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-3" style="text-align: left !important;">
                                                    <div class="form-group">
                                                        <label for="">
                                                            *Flight Number
                                                        </label>
                                                        <input
                                                            ng-model="traslado.salida_vuelo"
                                                            class="form-control"
                                                            name="salida_vuelo"
                                                            type="text"
                                                            placeholder="Enter flight name"
                                                            ng-required="traslado.tipo==2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <h4 class="col-xs-12 text-center text-uppercase" style="margin: 0px 0px 10px 0px;">Extras</h4>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-3">
                                                    <div class="thumbnail">
                                                        <img ng-src="{{ asset("/") }}img/productos/cerveza.jpg" alt="...">
                                                        <div class="caption text-center">
                                                            <h4>Beer</h4>
                                                            <select ng-model="cervezas" name="cervezas" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                                <option value="0">($5.00)</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-3">
                                                    <div class="thumbnail">
                                                        <img ng-src="{{ asset("/") }}img/productos/cocacola.jpg" alt="...">
                                                        <div class="caption text-center">
                                                            <h4>Sodas</h4>
                                                            <select ng-model="sodas" name="sodas" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                                <option value="0">($3.00)</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-3">
                                                    <div class="thumbnail">
                                                        <img ng-src="{{ asset("/") }}img/productos/vino.jpg" alt="...">
                                                        <div class="caption text-center">
                                                            <h4>Wine</h4>
                                                            <select ng-model="vino" name="vino" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                            <option value="0">($20.00 bottle)</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-3">
                                                    <div class="thumbnail">
                                                        <img ng-src="{{ asset("/") }}img/productos/champagne.jpg" alt="...">
                                                        <div class="caption text-center">
                                                            <h4>Champagne</h4>
                                                            <select ng-model="champagne" name="champagne" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                                <option value="0">($25.00 bottle)</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <h4 class="text-center" style="color: #000;font-weight: bold;font-size: 2em !important; margin: 5px 0px 10px 0;">
                                                @{{traslado.precio | currency:"$ "}}
                                            </h4>
                                        </div>
                                        <div class="col-xs-12 text-center">
                                            <button class="btn btnTransfer text-uppercase font-weight-bold" ng-click="opcion='agregar'" name="traslado" type="submit" value="traslado">Add to cart</button>
                                            <button class="btn btnTransfer text-uppercase font-weight-bold" ng-click="opcion='reservar'" name="traslado" type="submit" value="traslado">Checkout now</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                      </div>
                    </div>

                    <div class="extra-text visible-xs">
                        <a href="#" class="probootstrap-burger-menu header-top-mobile"><i>Menu</i></a>
                        <h5>Connect With Us</h5>
                        <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/dominicanaaround" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/dominicanaaround" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="/#" target="_blank"><i class="fab fa-tripadvisor"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--div class="probootstrap-slider flexslider">
                <ul class="slides">
                    <li class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="probootstrap-slider-text text-center" style="display: flex !important;">
                                        <div>
                                            <p style="font-size: 9em !important; padding-top: 4em; margin-bottom: 0; text-align: center; color: #431A10; width: 100%;"><strong>¡A vacation style like no other!</strong></p>
                                            <p style="font-size: 6.5em !important; margin-top: 0; text-align: center; color: #431A10; width: 100%;">¿How about spending the day discovering our beautiful Dominican Republic?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div-->
        </header>

		@yield('content')
        
    <!--script src="{{ asset("/") }}bower_components/jquery/dist/jquery.min.js"></script-->
    <script src="{{ asset('around') }}/js/scripts.js"></script>
    <script src="{{ asset("/") }}bower_components/owlcarousel-2/owl.carousel.js"></script>
	<script src="{{ asset("/") }}bower_components/jt.timepicker/jquery.timepicker.min.js"></script>
	<script src="{{ asset("/") }}bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="{{ asset("/") }}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="{{ asset("/") }}bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="{{ asset("/") }}bower_components/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset("/") }}bower_components/sweetalert2/sweetalert2.min.js"></script>
	
    <script src="{{ asset("/") }}js/angular.min.js"></script>
    <script src="{{ asset("/") }}js/angular-sanitize.min.js"></script>
    @yield('js')
	<!--script src="{{ asset("/") }}js/sitio.js?v=33"></script-->
    <script src="{{ asset("/") }}js/main.js?v=33"></script>
    <script src="{{ asset('around') }}/js/main.js"></script>
    <script src="{{ asset('around') }}/js/custom.js"></script>

	<script>
        window.url = '{{ url("/") }}';
        $('.dropdown-toggle').dropdown();

        var app = angular.module("app", ['ngSanitize']);

        app.controller("ctrl", function ($scope, $http, $timeout, $window) {
            $scope.carrito = {
                traslados: [],
                tours: [],
                vip: [],
                wifi:[]
            };
            $scope.opcion = 'agregar';
            $scope.vector = function (n) {
                var array = [];
                for (var i = 1; i <= n; i++) {
                    array.push(i);
                }
                return array;
            }
            /*----------------------------Transfers----------------------------*/
                var pasajeros = [];
                for (var i = 1; i <= 100; i++) {
                    pasajeros.push(i);
                }
                $scope.pasajeros = pasajeros;
                $scope.paraOpciones = [];

                $scope.paraV = [
                    { id: 0, descripcion: 'Punta Cana', precio: [35, 45, 70, 100, 130] },
                    { id: 1, descripcion: 'Bávaro - Cap Cana', precio: [35, 45, 70, 100, 130] },
                    { id: 2, descripcion: 'Arena Gorda - Macao', precio: [40, 50, 80, 105, 130] },
                    { id: 3, descripcion: 'Uvero Alto', precio: [65, 80, 95, 120, 145] },
                    { id: 4, descripcion: 'Four Point by Sheraton Punta Cana', precio: [20, 30, 60, 90, 120] },
                    { id: 5, descripcion: 'La Romana', precio: [105, 135, 195, 220, 245] },
                    { id: 6, descripcion: 'Santo Domingo', precio: [150, 165, 250, 275, 300] },
                ];

                $scope.deOpciones = [
                    { id: -1, descripcion: 'Aeropuerto Punta Cana (PUJ)' },
                    { id: 4, descripcion: 'Four Point by Sheraton Punta Cana' },
                    { id: 5, descripcion: 'La Romana' },
                    { id: 5, descripcion: "Casa de Campo Resort & Villas" },
                    { id: 5, descripcion: "Grand Bahia Principe La Romana" },
                    { id: 5, descripcion: "La Romana Luxury Bahia Principe Bouganville - Adults Only" },
                    { id: 5, descripcion: "Be Live Collection Canoa - All Inclusive" },
                    { id: 5, descripcion: "Dreams La Romana Resort and Spa" },
                    { id: 5, descripcion: "Catalonia La Romana - All Inclusive" },
                    { id: 5, descripcion: "Tracadero Beach Resort" },
                    { id: 5, descripcion: "Hotel Bayahibe" },
                    { id: 5, descripcion: "Dreams Dominicus La Romana" },
                    { id: 5, descripcion: "Viva Wyndham Dominicus Beach - All Inclusive" },
                    { id: 5, descripcion: "Catalonia Royal La Romana Adults Only - All Inclusive" },
                    { id: 5, descripcion: "Viva Wyndham Dominicus Palace - All Inclusive" },
                    { id: 5, descripcion: "Iberostar Hacienda Dominicus" },
                    { id: 5, descripcion: "whala! Bayahibe" },
                    { id: 6, descripcion: 'Santo Domingo' },

                    { id: 0, descripcion: "Majestic Colonial " },
                    { id: 0, descripcion: "Majestic Elegance " },
                    { id: 0, descripcion: "Majestic Mirage" },
                    { id: 0, descripcion: 'Iberostar Punta Cana' },
                    { id: 0, descripcion: 'Iberostar Bavaro' },
                    { id: 0, descripcion: 'Iberostar Grand' },
                    { id: 0, descripcion: 'Iberostar Dominicana' },
                    { id: 1, descripcion: 'Royalton Bavaro' },
                    /*{id:0,descripcion:'Dreams Palm Beach'},*/
                    { id: 0, descripcion: 'Ocean Blue & Sand Beach Resort' },
                    { id: 0, descripcion: 'Vik Arena Blanca' },
                    { id: 0, descripcion: 'Westin Punta Cana' },
                    { id: 0, descripcion: 'Alsol Luxury Village' },
                    { id: 0, descripcion: 'Alsol del Mar (Soto Grande)' },
                    { id: 0, descripcion: 'Sanctuary Cap Cana' },
                    { id: 0, descripcion: 'Club Med' },
                    { id: 0, descripcion: 'Natura Park Resort (Blau)' },
                    { id: 0, descripcion: 'Catalonia Punta Cana' },
                    { id: 0, descripcion: 'Be Live Collection Punta Cana' },
                    { id: 0, descripcion: 'Alsol Tiara Cap Cana' },
                    { id: 0, descripcion: 'The Villas at Cap Cana by Alsol' },
                    { id: 0, descripcion: 'Luxury Beach Front Apartment in Punta Palmera' },
                    { id: 0, descripcion: 'Eden Roc At Cap Cana' },
                    { id: 0, descripcion: 'Fishing Lodge CapCana Diamond Resort' },
                    { id: 0, descripcion: 'Grand Bahia Principe Bavaro' },
                    { id: 0, descripcion: 'Bavaro Princess All Suites Resort, Spa & Casino' },
                    /*{id:0,descripcion:'Melia Caribe Tropical'},*/
                    { id: 0, descripcion: 'Tropical Princess Beach Resort & Spa' },
                    { id: 0, descripcion: 'Barcelo Bavaro Palace' },
                    { id: 0, descripcion: 'Barcelo Bavaro Beach' },
                    { id: 0, descripcion: 'Blue Beach Punta Cana Luxury Resort' },
                    { id: 0, descripcion: 'Catalonia Royal Bavaro - All Inclusive - Adults Only' },
                    { id: 0, descripcion: 'Grand Bahia Principe Turquesa' },
                    { id: 0, descripcion: 'Caribe Club Princess Beach Resort and Spa' },
                    { id: 0, descripcion: 'Vista Sol Punta Cana Beach Resort & Spa' },
                    { id: 0, descripcion: 'Punta Cana Princess All Suites Resort and Spa' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Esmeralda' },
                    { id: 0, descripcion: 'The Level at Melia Caribe Tropical' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Ambar Blue - Adults Only' },
                    { id: 0, descripcion: 'whala!bávaro' },
                    { id: 0, descripcion: 'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Ambar Green - Adults Only' },
                    { id: 0, descripcion: 'Hotel Cortecito Inn Bavaro' },
                    { id: 0, descripcion: 'Punta Palmera Cap Cana by Essenza Retreats' },
                    { id: 0, descripcion: 'Residencial Las Buganvillas Bavaro' },
                    { id: 0, descripcion: 'Royalton Punta Cana Resort & Casino' },
                    { id: 0, descripcion: 'Riu Bambu' },
                    { id: 0, descripcion: 'Riu Bavaro' },
                    { id: 0, descripcion: 'Riu Palace Macao' },
                    { id: 0, descripcion: 'Riu Naiboa' },
                    { id: 0, descripcion: 'Riu Palace Punta Cana' },

                    { id: 1, descripcion: "Occidental Caribe" },
                    { id: 1, descripcion: "Occidental Punta Cana" },
                    { id: 1, descripcion: "Secret Cap Cana" },
                    // {id:1,descripcion:"Secret Royal Beach"},
                    { id: 3, descripcion: "Now Onix" },
                    { id: 1, descripcion: "Riu República" },
                    { id: 1, descripcion: "Bahia Principe Ambar" },
                    { id: 1, descripcion: "Bahia Principe Fantasy" },

                    /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

                    { id: 3, descripcion: "Zoetry Aqua" },
                    { id: 3, descripcion: "The Palms Punta Cana" },
                    { id: 3, descripcion: "Las Dunas Condo" },
                    /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
                    { id: 3, descripcion: "CHIC by Royalton Resorts " },
                    /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
                    { id: 3, descripcion: "Excellence Punta Cana" },
                    { id: 3, descripcion: "Excellence El Carmen" },
                    { id: 3, descripcion: "Sensatori Resort Punta Cana" },
                    { id: 3, descripcion: "Sirenis Punta Cana Resort Casino & Aguagames" },
                    { id: 3, descripcion: "Sirenis Cocotal Beach Resort Punta Cana " },
                    { id: 3, descripcion: "Sirenis Tropical Suites Punta Cana " },
                    { id: 3, descripcion: "Sivory Punta Cana Boutique Hotel" },
                    { id: 3, descripcion: "Nickelodeon Hotels & Resorts Punta Cana " },
                ];

                $scope.hoteles = [
                    { id: 4, descripcion: 'Four Point by Sheraton Punta Cana' },
                    { id: 5, descripcion: 'La Romana' },
                    { id: 5, descripcion: "Casa de Campo Resort & Villas" },
                    { id: 5, descripcion: "Grand Bahia Principe La Romana" },
                    { id: 5, descripcion: "La Romana Luxury Bahia Principe Bouganville - Adults Only" },
                    { id: 5, descripcion: "Be Live Collection Canoa - All Inclusive" },
                    { id: 5, descripcion: "Dreams La Romana Resort and Spa" },
                    { id: 5, descripcion: "Catalonia La Romana - All Inclusive" },
                    { id: 5, descripcion: "Tracadero Beach Resort" },
                    { id: 5, descripcion: "Hotel Bayahibe" },
                    { id: 5, descripcion: "Dreams Dominicus La Romana" },
                    { id: 5, descripcion: "Viva Wyndham Dominicus Beach - All Inclusive" },
                    { id: 5, descripcion: "Catalonia Royal La Romana Adults Only - All Inclusive" },
                    { id: 5, descripcion: "Viva Wyndham Dominicus Palace - All Inclusive" },
                    { id: 5, descripcion: "Iberostar Hacienda Dominicus" },
                    { id: 5, descripcion: "whala! Bayahibe" },
                    { id: 6, descripcion: 'Santo Domingo' },

                    { id: 0, descripcion: "Majestic Colonial " },
                    { id: 0, descripcion: "Majestic Elegance " },
                    { id: 0, descripcion: "Majestic Mirage" },
                    { id: 0, descripcion: 'Iberostar Punta Cana' },
                    { id: 0, descripcion: 'Iberostar Bavaro' },
                    { id: 0, descripcion: 'Iberostar Grand' },
                    { id: 0, descripcion: 'Iberostar Dominicana' },
                    { id: 1, descripcion: 'Royalton Bavaro' },
                    /*{id:0,descripcion:'Dreams Palm Beach'},*/
                    { id: 0, descripcion: 'Ocean Blue & Sand Beach Resort' },
                    { id: 0, descripcion: 'Vik Arena Blanca' },
                    { id: 0, descripcion: 'Westin Punta Cana' },
                    { id: 0, descripcion: 'Alsol Luxury Village' },
                    { id: 0, descripcion: 'Alsol del Mar (Soto Grande)' },
                    { id: 0, descripcion: 'Sanctuary Cap Cana' },
                    { id: 0, descripcion: 'Club Med' },
                    { id: 0, descripcion: 'Natura Park Resort (Blau)' },
                    { id: 0, descripcion: 'Catalonia Punta Cana' },
                    { id: 0, descripcion: 'Be Live Collection Punta Cana' },
                    { id: 0, descripcion: 'Alsol Tiara Cap Cana' },
                    { id: 0, descripcion: 'The Villas at Cap Cana by Alsol' },
                    { id: 0, descripcion: 'Luxury Beach Front Apartment in Punta Palmera' },
                    { id: 0, descripcion: 'Eden Roc At Cap Cana' },
                    { id: 0, descripcion: 'Fishing Lodge CapCana Diamond Resort' },
                    { id: 0, descripcion: 'Grand Bahia Principe Bavaro' },
                    { id: 0, descripcion: 'Bavaro Princess All Suites Resort, Spa & Casino' },
                    /*{id:0,descripcion:'Melia Caribe Tropical'},*/
                    { id: 0, descripcion: 'Tropical Princess Beach Resort & Spa' },
                    { id: 0, descripcion: 'Barcelo Bavaro Palace' },
                    { id: 0, descripcion: 'Barcelo Bavaro Beach' },
                    { id: 0, descripcion: 'Blue Beach Punta Cana Luxury Resort' },
                    { id: 0, descripcion: 'Catalonia Royal Bavaro - All Inclusive - Adults Only' },
                    { id: 0, descripcion: 'Grand Bahia Principe Turquesa' },
                    { id: 0, descripcion: 'Caribe Club Princess Beach Resort and Spa' },
                    { id: 0, descripcion: 'Vista Sol Punta Cana Beach Resort & Spa' },
                    { id: 0, descripcion: 'Punta Cana Princess All Suites Resort and Spa' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Esmeralda' },
                    { id: 0, descripcion: 'The Level at Melia Caribe Tropical' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Ambar Blue - Adults Only' },
                    { id: 0, descripcion: 'whala!bávaro' },
                    { id: 0, descripcion: 'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Ambar Green - Adults Only' },
                    { id: 0, descripcion: 'Hotel Cortecito Inn Bavaro' },
                    { id: 0, descripcion: 'Punta Palmera Cap Cana by Essenza Retreats' },
                    { id: 0, descripcion: 'Residencial Las Buganvillas Bavaro' },
                    { id: 0, descripcion: 'Royalton Punta Cana Resort & Casino' },
                    { id: 0, descripcion: 'Riu Palace Punta Cana' },
                    { id: 0, descripcion: 'Riu Naiboa' },
                    { id: 0, descripcion: 'Riu Bavaro' },
                    { id: 0, descripcion: 'Riu Palace Macao' },

                    { id: 1, descripcion: "Occidental Caribe" },
                    { id: 1, descripcion: "Occidental Punta Cana" },
                    { id: 1, descripcion: "Secret Cap Cana" },
                    // {id:1,descripcion:"Secret Royal Beach"},
                    { id: 3, descripcion: "Now Onix" },
                    { id: 1, descripcion: "Riu República" },
                    { id: 1, descripcion: "Bahia Principe Ambar" },
                    { id: 1, descripcion: "Bahia Principe Fantasy" },

                    /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

                    { id: 3, descripcion: "Zoetry Aqua" },
                    { id: 3, descripcion: "The Palms Punta Cana" },
                    { id: 3, descripcion: "Las Dunas Condo" },
                    /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
                    { id: 3, descripcion: "CHIC by Royalton Resorts " },
                    /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
                    { id: 3, descripcion: "Excellence Punta Cana" },
                    { id: 3, descripcion: "Excellence El Carmen" },
                    { id: 3, descripcion: "Sensatori Resort Punta Cana" },
                    { id: 3, descripcion: "Sirenis Punta Cana Resort Casino & Aguagames" },
                    { id: 3, descripcion: "Sirenis Cocotal Beach Resort Punta Cana " },
                    { id: 3, descripcion: "Sirenis Tropical Suites Punta Cana " },
                    { id: 3, descripcion: "Sivory Punta Cana Boutique Hotel" },
                    { id: 3, descripcion: "Nickelodeon Hotels & Resorts Punta Cana " },
                ];

                $scope.aeropuerto = [
                    { id: -1, descripcion: 'Aeropuerto Punta Cana (PUJ)' }
                ];

                $scope.santodomingo = [
                    { id: -1, descripcion: 'Aeropuerto Punta Cana (PUJ)' },
                    { id: 4, descripcion: 'Four Point by Sheraton Punta Cana' },
                    { id: 0, descripcion: "Majestic Colonial " },
                    { id: 0, descripcion: "Majestic Elegance " },
                    { id: 0, descripcion: "Majestic Mirage" },
                    { id: 0, descripcion: 'Iberostar Punta Cana' },
                    { id: 0, descripcion: 'Iberostar Bavaro' },
                    { id: 0, descripcion: 'Iberostar Grand' },
                    { id: 0, descripcion: 'Iberostar Dominicana' },
                    { id: 1, descripcion: 'Royalton Bavaro' },
                    /*{id:0,descripcion:'Dreams Palm Beach'},*/
                    { id: 0, descripcion: 'Ocean Blue & Sand Beach Resort' },
                    { id: 0, descripcion: 'Vik Arena Blanca' },
                    { id: 0, descripcion: 'Westin Punta Cana' },
                    { id: 0, descripcion: 'Alsol Luxury Village' },
                    { id: 0, descripcion: 'Alsol del Mar (Soto Grande)' },
                    { id: 0, descripcion: 'Sanctuary Cap Cana' },
                    { id: 0, descripcion: 'Club Med' },
                    { id: 0, descripcion: 'Natura Park Resort (Blau)' },
                    { id: 0, descripcion: 'Catalonia Punta Cana' },
                    { id: 0, descripcion: 'Be Live Collection Punta Cana' },
                    { id: 0, descripcion: 'Alsol Tiara Cap Cana' },
                    { id: 0, descripcion: 'The Villas at Cap Cana by Alsol' },
                    { id: 0, descripcion: 'Luxury Beach Front Apartment in Punta Palmera' },
                    { id: 0, descripcion: 'Eden Roc At Cap Cana' },
                    { id: 0, descripcion: 'Fishing Lodge CapCana Diamond Resort' },
                    { id: 0, descripcion: 'Grand Bahia Principe Bavaro' },
                    { id: 0, descripcion: 'Bavaro Princess All Suites Resort, Spa & Casino' },
                    /*{id:0,descripcion:'Melia Caribe Tropical'},*/
                    { id: 0, descripcion: 'Tropical Princess Beach Resort & Spa' },
                    { id: 0, descripcion: 'Barcelo Bavaro Palace' },
                    { id: 0, descripcion: 'Barcelo Bavaro Beach' },
                    { id: 0, descripcion: 'Blue Beach Punta Cana Luxury Resort' },
                    { id: 0, descripcion: 'Catalonia Royal Bavaro - All Inclusive - Adults Only' },
                    { id: 0, descripcion: 'Grand Bahia Principe Turquesa' },
                    { id: 0, descripcion: 'Caribe Club Princess Beach Resort and Spa' },
                    { id: 0, descripcion: 'Vista Sol Punta Cana Beach Resort & Spa' },
                    { id: 0, descripcion: 'Punta Cana Princess All Suites Resort and Spa' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Esmeralda' },
                    { id: 0, descripcion: 'The Level at Melia Caribe Tropical' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Ambar Blue - Adults Only' },
                    { id: 0, descripcion: 'whala!bávaro' },
                    { id: 0, descripcion: 'Sanctuary Cap Cana - All Inclusive by Playa Hotels & Resorts' },
                    { id: 0, descripcion: 'Luxury Bahia Principe Ambar Green - Adults Only' },
                    { id: 0, descripcion: 'Hotel Cortecito Inn Bavaro' },
                    { id: 0, descripcion: 'Punta Palmera Cap Cana by Essenza Retreats' },
                    { id: 0, descripcion: 'Residencial Las Buganvillas Bavaro' },
                    { id: 0, descripcion: 'Royalton Punta Cana Resort & Casino' },
                    { id: 0, descripcion: 'Riu Palace Punta Cana' },
                    { id: 0, descripcion: 'Riu Naiboa' },
                    { id: 0, descripcion: 'Riu Bavaro' },
                    { id: 0, descripcion: 'Riu Palace Macao' },

                    { id: 1, descripcion: "Occidental Caribe" },
                    { id: 1, descripcion: "Occidental Punta Cana" },
                    { id: 1, descripcion: "Secret Cap Cana" },
                    // {id:1,descripcion:"Secret Royal Beach"},
                    { id: 3, descripcion: "Now Onix" },
                    { id: 1, descripcion: "Riu República" },
                    { id: 1, descripcion: "Bahia Principe Ambar" },
                    { id: 1, descripcion: "Bahia Principe Fantasy" },

                    /*{id:2,descripcion:"Hard Rock Hotel & Casino"},*/

                    { id: 3, descripcion: "Zoetry Aqua" },
                    { id: 3, descripcion: "The Palms Punta Cana" },
                    { id: 3, descripcion: "Las Dunas Condo" },
                    /*{id:3,descripcion:"Breathless Punta  Cana Resort & Spa"},*/
                    { id: 3, descripcion: "CHIC by Royalton Resorts " },
                    /*{id:3,descripcion:"Dreams Punta Cana Resort & Spa"},*/
                    { id: 3, descripcion: "Excellence Punta Cana" },
                    { id: 3, descripcion: "Excellence El Carmen" },
                    { id: 3, descripcion: "Sensatori Resort Punta Cana" },
                    { id: 3, descripcion: "Sirenis Punta Cana Resort Casino & Aguagames" },
                    { id: 3, descripcion: "Sirenis Cocotal Beach Resort Punta Cana " },
                    { id: 3, descripcion: "Sirenis Tropical Suites Punta Cana " },
                    { id: 3, descripcion: "Sivory Punta Cana Boutique Hotel" },
                    { id: 3, descripcion: "Nickelodeon Hotels & Resorts Punta Cana " },
                ];

                $scope.cervezas = "0";
                $scope.sodas = "0";
                $scope.vino = "0";
                $scope.champagne = "0";
                $scope.traslado = {};
                $scope.traslado.precio = 0;
                $scope.descuento = false;

                $scope.cambiarDe = function () {
                    $timeout(function () { $('.select2_para').select2(); }, 500);
                    if ($scope.traslado.de.id == undefined)
                        $scope.paraOpciones = [];
                    else if ($scope.traslado.de.id == 6)
                        $scope.paraOpciones = $scope.santodomingo;
                    else if ($scope.traslado.de.id == -1)
                        $scope.paraOpciones = $scope.hoteles;
                    else
                        $scope.paraOpciones = $scope.aeropuerto;
                }

                $scope.cambiarPara = function () {
                    $timeout(function () { $('.select2_para').select2(); }, 500);
                }

                $scope.calcularPrecioTraslado = function () {
                    var pasajeros = $scope.traslado.pasajeros;
                    var de = $scope.traslado.de;
                    var para = $scope.traslado.para;
                    var aux;
                    var bebidas = parseInt($scope.cervezas) * 5 + parseInt($scope.sodas) * 3 + parseInt($scope.vino) * 20 + parseInt($scope.champagne) * 25;

                    if (pasajeros > 2) {
                    }
                    if (de != undefined && para != undefined && pasajeros != undefined) {
                        if (de.id != -1)
                            aux = de;
                        else
                            aux = para;

                        $scope.hotelValue = aux.descripcion;

                        if (pasajeros && aux.id != undefined) {
                            if (pasajeros <= 4)
                                precio = $scope.paraV[aux.id].precio[0];
                            else if (pasajeros <= 6)
                                precio = $scope.paraV[aux.id].precio[1];
                            else if (pasajeros <= 10)
                                precio = $scope.paraV[aux.id].precio[2];
                            else if (pasajeros <= 15)
                                precio = $scope.paraV[aux.id].precio[3];
                            else if (pasajeros <= 20)
                                precio = $scope.paraV[aux.id].precio[4];
                            else
                                precio = $scope.paraV[aux.id].precio[4] + ((pasajeros - 20) * 5);

                            if ($scope.traslado.tipo == 2)
                                $scope.traslado.precio = (precio * 2) + bebidas + ($scope.traslado.vip ? 130 : 0);
                            else
                                $scope.traslado.precio = precio + bebidas + ($scope.traslado.vip ? 65 : 0);
                        }
                    }
                    //$scope.cambiarCodigo($scope.codePromo);
                }

                $scope.agregarTraslado = function (event) {
                    event.preventDefault();
                    $scope.carrito.traslados.push({
                        de: $scope.traslado.de.descripcion,
                        para: $scope.traslado.para.descripcion,
                        pasajeros: $scope.traslado.pasajeros,
                        tipo: $scope.traslado.tipo,
                        llegada_fecha: $scope.traslado.llegada_fecha ? $scope.traslado.llegada_fecha : null,
                        llegada_hora: $scope.traslado.llegada_hora ? $scope.traslado.llegada_hora : null,
                        llegada_aerolinea: $scope.traslado.llegada_aerolinea ? $scope.traslado.llegada_aerolinea : null,
                        llegada_vuelo: $scope.traslado.llegada_vuelo ? $scope.traslado.llegada_vuelo : null,
                        salida_fecha: $scope.traslado.salida_fecha ? $scope.traslado.salida_fecha : null,
                        salida_hora: $scope.traslado.salida_hora ? $scope.traslado.salida_hora : null,
                        salida_aerolinea: $scope.traslado.salida_aerolinea ? $scope.traslado.salida_aerolinea : null,
                        salida_vuelo: $scope.traslado.salida_vuelo ? $scope.traslado.salida_vuelo : null,
                        precio: $scope.traslado.precio ? $scope.traslado.precio : null,
                        vip: $scope.traslado.vip ? $("#vip").val() : null,
                        cervezas: $scope.cervezas ? $scope.cervezas : null,
                        sodas: $scope.sodas ? $scope.sodas : null,
                        vino: $scope.vino ? $scope.vino : null,
                        champagne: $scope.champagne ? $scope.champagne : null,
                        vehiculo: $scope.traslado.vehiculo ? $scope.traslado.vehiculo : null,
                    });
                    $scope.traslado = {};
                    $scope.cervezas = "0";
                    $scope.sodas = "0";
                    $scope.vino = "0";
                    $scope.champagne = "0";
                    $scope.traslado.precio = 0;
                    $timeout(function () {
                        $('#formTraslado select').select2();
                        $("html, body").animate({ scrollTop: 0 }, 500);
                    }, 500);
                    $scope.actualizar();

                    swal({
                        title: 'Transfers',
                        text: 'Added successfully',
                        type: 'success',
                        confirmButtonColor: '#FB8302',
                    });
                }

                $scope.eliminarTraslado = function (index) {
                    $scope.carrito.traslados.splice(index, 1);
                    $scope.actualizar();
                }
            /*------------------------------Tours------------------------------*/
                $scope.agregarTour = function (event) {
                    event.preventDefault();
                    var pos = $scope.carrito.tours.map(function (e) { return e.tour; }).indexOf($scope.tour.titulo + "");
                    if (pos > -1) {
                        swal({
                            title: 'Error',
                            text: 'Existing excursion',
                            type: 'error',
                            confirmButtonColor: '#FB8302',
                        });
                        return false;
                    }

                    if ($scope.carrito.tours){
                        var temPrice = $("#finalPrice").val();
                        if((temPrice !== null || temPrice !== undefined) && parseFloat(temPrice) > 0)
                            var pricef = temPrice;
                        else
                            var pricef = $scope.tour.precio;
                        $scope.carrito.tours.push(
                            {
                                tour: $scope.tour.titulo,
                                modalidad: $scope.tour.modalidad ? $scope.tour.modalidad.descripcion : $scope.tour.modalidades[0].descripcion,
                                fecha: $scope.tour.fecha,
                                horario: $scope.tour.horario ? $scope.tour.horario : null,
                                hotel: $scope.tour.hotel ? $scope.tour.hotel.descripcion : null,
                                room: $scope.tour.room ? $scope.tour.room : null,
                                adultos: $scope.tour.adultos,
                                ninos: $scope.tour.ninos ? $scope.tour.ninos : null,
                                precio: pricef,
                                descuento: $scope.tour.descuento,
                                coderefe: $("#code_dis").val(),
                            }
                        );
                    }

                    if (window.pos != null) {
                        $scope.tour.fecha = null;
                        $scope.tour.adultos = null;
                        $scope.tour.ninos = null;
                        $scope.tour.horario = null;
                        $scope.tour.hotel = null;
                        $scope.tour.precio = $scope.tour.modalidades[0].precio;
                        $scope.tour.descuento = 0;
                    }
                    else {
                        $scope.tour = {};
                        $scope.tour.precio = 0;
                    }
                    /* $timeout(function () {
                        $('#formTour select').select2();
                        $("html, body").animate({ scrollTop: 0 }, 500);
                    }, 500); */
                    $scope.nro_carrito();
                    $scope.actualizar();

                    swal({
                        title: 'Excursion',
                        text: 'Added successfully',
                        type: 'success',
                        confirmButtonColor: '#FB8302',
                    });
                }
                $scope.eliminarTour = function (index) {
                    $scope.carrito.tours.splice(index, 1);
                    $scope.actualizar();
                }
                $scope.precioTour = 0;
                var v99 = [];
                for (var i = 1; i <= 99; i++) {
                    v99.push(i);
                }
                $scope.v99 = v99;

                var tours = [
                    {
                        id: 0,
                        orden: 2,
                        mostrar: true,
                        titulo: 'Buggies',
                        descripcion: `Prepare to begin a new experience, get on a buggy with us for an adventure in Dominican Republic, in a fun, exciting and safe way. this tour is  designed for those who want to get closer to nature, history, culture. Our tour runs through charming corners full of beauty and nature. The adventure never ends. We have Boogies for guests looking to get dirty, for couples or families of up to 4 people where the adventure will increase your adrenaline with unforgettable experience.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Prepare to begin a new experience, get on a buggy with us for an adventure in Dominican Republic, in a fun, exciting and safe way. this tour is  designed for those who want to get closer to nature, history, culture.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Our tour runs through charming corners full of beauty and nature. The adventure never ends. We have Boogies for guests looking to get dirty, for couples or families of up to 4 people where the adventure will increase your adrenaline with unforgettable experience.</p>
                            </p>
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Adventure',
                        horarios: ['Morning','Afternoon'],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 70, referido: 60, nino: 35, infante: 0, descripcion: 'ATV 4x4'},
                            { id: 1, precio: 90, referido: 80, nino: 45, infante: 0, descripcion: 'Terracross'},
                            { id: 2, precio: 70, referido: 60, nino: 45, infante: 0, descripcion: 'Buggies'},
                            { id: 3, precio: 60, referido: 50, nino: 45, infante: 0, descripcion: 'Family Buggies'},
                            { id: 4, precio: 90, referido: 80, nino: 45, infante: 0, descripcion: 'Polaris'},
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English / Spanish.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 4 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 6 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 1,
                        orden: 12,
                        mostrar: true,
                        titulo: 'Catalina Island',
                        descripcion: `Our adventure begins in the Salt River of the City of La Romana, to make a spectacular trip to Catalina Island. In our Catamaran, with music and lots of fun, when you reach Catalina Island, also called the Jewel of the Caribbean. This small island with crystal clear waters, white sands and intense green vegetation, has the most impressive coral reef in the Dominican Republic and one of the most beautiful in the Caribbean. Miles of tourists visit this Barrier Reef or Coral Wall every year, to enjoy its charm and beauty. It has a great fauna adorned with the colors of the different species of fish, as well as the corals. On Catalina Island, you can enjoy a banana tour, crystal clear waters, sunbathing, walking on its soft white sand beaches. We also enjoyed a typical Dominican lunch, the bar is open with Rom, Beer, Cuba Libre, Cola, Agua and, of course, the MAMAJUANA.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Our adventure begins in the Salt River of the City of La Romana, to make a spectacular trip to Catalina Island.</p>
                            <p class="col-xs-12 text-justify detailContent">In our Catamaran, with music and lots of fun, when you reach Catalina Island, also called the Jewel of the Caribbean.</p>
                            <p class="col-xs-12 text-justify detailContent">This small island with crystal clear waters, white sands and intense green vegetation, has the most impressive coral reef in the Dominican Republic and one of the most beautiful in the Caribbean. Miles of tourists visit this Barrier Reef or Coral Wall every year, to enjoy its charm and beauty. It has a great fauna adorned with the colors of the different species of fish, as well as the corals.</p>
                            <p class="col-xs-12 text-justify detailContent">On Catalina Island, you can enjoy a banana tour, crystal clear waters, sunbathing, walking on its soft white sand beaches. We also enjoyed a typical Dominican lunch, the bar is open with Rom, Beer, Cuba Libre, Cola, Agua and, of course, the MAMAJUANA.
                            </p>  
                            `,
                        localidad: 'La Romana',
                        tipo: 'Water Activities',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 110, referido: 99, nino: 55, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English / Spanish.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): La Romana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 3.5 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 2 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 2,
                        orden: 8,
                        mostrar: true,
                        titulo: 'Catamaran',
                        descripcion: `Come and join the party on the crystalline waters of the Caribbean, a special moment for people who love good music, friendly people, delicious cocktails of tropical rum and a great party under the sun of Punta Cana. An impressive catamaran passes along the coast of Punta Cana with splendid views of local hotels, white sands and swaying palm trees.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Come and join the party on the crystalline waters of the Caribbean, a special moment for people who love good music, friendly people, delicious cocktails of tropical rum and a great party under the sun of Punta Cana. An impressive catamaran passes along the coast of Punta Cana with splendid views of local hotels, white sands and swaying palm trees.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                In our catamaran we have a wide variety of infinite supply of traditional Dominican drinks such as rum, Mama Juana, local beer President, with a professional DJ that will take care of putting music to the environment, come and dance at your own pace. Catamaran will become a memorable moment during your stay, here in Punta Cana. Sailing along the crystal clear waters of Bávaro, we enjoy a fun day of sailing, snorkeling and a visit to our unique natural pool.    
                            </p>
                            `,
                        localidad: 'La Romana',
                        tipo: 'Water Activities',
                        horarios: ['Morning','Afternoon'],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 90, referido: 80, nino: 45, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English / Spanish.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 4 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 4 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: Yes</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 3,
                        orden: 7,
                        mostrar: true,
                        titulo: 'Zip Line',
                        descripcion: `It is an "ecological and adventure" tourism excursion designed especially for all tourists who want to know the natural beauty of the interior of the Dominican Republic.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>

                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>

                            <p class="col-xs-12 text-justify detailContent">
                                It is an "ecological and adventure" tourism excursion designed especially for all tourists who want to know the natural beauty of the interior of the Dominican Republic.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                The  tour takes place in the hills around the city of Higuey in a small town called Anamuya. We pick up our clients in safari trucks suitable for the transport of tourists, and throughout the journey you can enjoy the beautiful nature of this tropical island, such as reed beds, cocoa plantations, tropical fruits such as mangoes, grapefruit, oranges and many flowers .
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Upon arrival at the ranch of the Canopy Adventure, our guides will receive the clients, to give them a start to the preparations for their adventure, an explanation will be given in a model of the entire route, then the equipment or the appropriate harness will be placed , and then, in the canopy system, they are explained with great precision and professionalism. Our tour has eight double cables and fifteen platforms, most of them built in the treetops, for a total of 2,100 meters over the canopy of the forest, it is spectacular, a thrilling experience full of adrenaline, and the best all harmony with nature, the protection of local flora and fauna.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                The whole tour is always under the supervision and the help of our guides, who have been trained to work under the strictest safety standards. The equipment is certified and of excellent quality, complying with international standards of adventure sports. Our canopy has been certified by ACCT (Association for the Technology of the Course of the Challenge) American organization that is dedicated to the certification of canopies, zip lines and high ropes. We also have the technical and professional support of the Costa Rican company. Dosel de Cartagena, construction work, assistance in the maintenance of canopies and zip lines for all of Latin America.Our Canopy Adventure Tour leaves twice a day, with a total duration of approximately 4 hours.                        </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Star at the Welcome Center where our expert canopy guides teach you all you need to know about the ride and the equipment, and covers a safety review. Then, it’s time for the zip lining fun to begin as you reach the first platform and then zip your way over the beautiful jungle landscape.
                            </p>                    
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Adventure',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 90, referido: 80, nino: 45, infante: 0, descripcion: 'Regular' }
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 4 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 6 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: Yes</p></td></tr><tr><td width="10%"><i class="fas fa-weight fa-2x colorIcono"></i></td><td width="40%"><p class="text-white text-left vcenter1">Max weight permitted: 285 lbs <br>(127 kg)</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 4,
                        orden: 3,
                        mostrar: true,
                        titulo: 'Go fishing',
                        descripcion: `On our fishing trip. We give you the tools, you catch the best moments. Punta Cana, Bavaro is home to some of the Caribbean’s largest Sport. We are the main deep-sea fishing excursions in Punta Cana. The strictest health and safety guidelines are followed for your safety and enjoyment. Sport fishing at its best. Spend half a day or a whole day at sea to practice your GREAT capture, such as Blue Marlin, White Marlin, Mahi-Mahi (Dolphin) and Sailfish. (Check our seasonal fishing calendar). Our fleet of boats are equipped with only top quality Penn International/Senator, Shimano, Dual and Fin-Nor rods and reels.Our professional staff will be more than eager to give you instructions and hints on how to use the equipment if needed. Come try your hand, and seek for the big one!`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>

                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>

                            <p class="col-xs-12 text-justify detailContent">
                                On our fishing trip.</p>
                            <p class="col-xs-12 text-justify detailContent">
                                We give you the tools, you catch the best moments. Punta Cana, Bavaro is home to some of the Caribbean’s largest Sport.</p>
                            <p class="col-xs-12 text-justify detailContent">
                                We are the main deep-sea fishing excursions in Punta Cana. The strictest health and safety guidelines are followed for your safety and enjoyment.</p>
                            <p class="col-xs-12 text-justify detailContent">
                                Sport fishing at its best. Spend half a day or a whole day at sea to practice your GREAT capture, such as Blue Marlin, White Marlin, Mahi-Mahi (Dolphin) and Sailfish. (Check our seasonal fishing calendar).</p>
                            <p class="col-xs-12 text-justify detailContent">
                                Our fleet of boats are equipped with only top quality Penn International/Senator, Shimano, Dual and Fin-Nor rods and reels.Our professional staff will be more than eager to give you instructions and hints on how to use the equipment if needed. Come try your hand, and seek for the big one!
                            </p>
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Fishing',
                        horarios: ['Morning','Afternoon'],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 120, referido: 108, nino: 60, descripcion: "Regular" },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English / Spanish.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 4 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 6 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td></tr></table></div>',
                        video: false,
                    },          
                    {
                        id: 5,
                        orden: 9,
                        mostrar: true,
                        titulo: 'Coco Bongo',
                        descripcion: `Coco Bongo Punta Cana is now rocking the Dominican Republic with a party atmosphere and an entertainment program like no other. Dance the night away, sip back a few drinks and enjoy a Vegas-style show by more than 40 actors, musicians, artists and flying acrobats. This is the epic party you’ve been looking for!
                            `,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Coco Bongo Punta Cana is now rocking the Dominican Republic with a party atmosphere and an entertainment program like no other. Dance the night away, sip back a few drinks and enjoy a Vegas-style show by more than 40 actors, musicians, artists and flying acrobats. This is the epic party you’ve been looking for!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Dance, drink and be merry at Coco Bongo Punta Cana , Your night of fun begins with pick-up from your resort to Coco Bongo in Downtown Punta Cana, the newest and hottest party spot in this resort town. Feel the nightclub atmosphere as soon as you enter the building with multi-level seating and 1,000-person capacity. Start out the night with refreshing drinks from the open bar and let the DJ music get you into the groove as you start moving your feet on the dance floor. Enjoy track after track and watch music videos on the giant screens as you move to the beat.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Revel in a Vegas-style spectacle full of theatrics But the highlight of your evening is, without a doubt, the astonishing theatrical shows of Coco Bongo Punta Cana! Fill your night with spectacle as you watch flying acrobats, samba dancers and authentic-looking impersonators of top rock and pop stars. Let your jaw drop as you watch more than 40 performers — including actors, dancers and musicians — all recreating some of the most remarkable acts in the entertainment world. We’re talking Madonna, Lady Gaga, Guns N’ Roses, Michael Jackson, and even beloved movie characters like Beetlejuice, The Mask and the amazing Spider Man!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Upgrade to a VIP Coco Bongo experience.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Whatever you choose, your night in Downtown Punta Cana will be off the hook
                            </p>
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Night Life',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 75, nino: 0, descripcion: "Regular", detalle: '<p class="col-xs-12 text-justify detailContent mt1">Coco Bongo Punta Cana is now rocking the Dominican Republic with a party atmosphere and an entertainment program like no other. Dance the night away, sip back a few drinks and enjoy a Vegas-style show by more than 40 actors, musicians, artists and flying acrobats. This is the epic party you’ve been looking for!</p><p class="col-xs-12 text-justify detailContent mt1">Dance, drink and be merry at Coco Bongo Punta Cana , Your night of fun begins with pick-up from your resort to Coco Bongo in Downtown Punta Cana, the newest and hottest party spot in this resort town. Feel the nightclub atmosphere as soon as you enter the building with multi-level seating and 1,000-person capacity. Start out the night with refreshing drinks from the open bar and let the DJ music get you into the groove as you start moving your feet on the dance floor. Enjoy track after track and watch music videos on the giant screens as you move to the beat.</p><p class="col-xs-12 text-justify detailContent mt1">Revel in a Vegas-style spectacle full of theatrics But the highlight of your evening is, without a doubt, the astonishing theatrical shows of Coco Bongo Punta Cana! Fill your night with spectacle as you watch flying acrobats, samba dancers and authentic-looking impersonators of top rock and pop stars. Let your jaw drop as you watch more than 40 performers — including actors, dancers and musicians — all recreating some of the most remarkable acts in the entertainment world. We’re talking Madonna, Lady Gaga, Guns N’ Roses, Michael Jackson, and even beloved movie characters like Beetlejuice, The Mask and the amazing Spider Man!</p>' },
                            { id: 1, precio: 145, nino: 0, descripcion: "Gold Member", detalle: '<p class="col-xs-12 text-justify detailContent mt1"><ul><li class="text-white">Preferential entry</li><li class="text-white">Admission</li><li class="text-white">Shows</li><li class="text-white">Reserved seats</li><li class="text-white">Free bar of the Premium menu from 10:30 p.m. -3: 30 a.m.</li><li class="text-white">Customized services</li><li class="text-white">Round trip transportation</li></ul></p>' },
                            { id: 2, precio: 155, nino: 0, descripcion: "Royal Service", detalle: '<p class="col-xs-12 text-justify detailContent mt1"><ul><li class="text-white">Preferential entry</li><li class="text-white">Shows</li><li class="text-white">Table reserved in the area of royal service (maximum of 4 pax per table)</li><li class="text-white">Limited capacity (10 tables)</li><li class="text-white">Unlimited bottle service (from the gold member menu)</li><li class="text-white">Premium free bar from (10:30 pm -3: 30 am)</li><li class="text-white">Round trip transportation</li></ul></p>' },
                            { id: 3, precio: 175, nino: 0, descripcion: "Front Now", detalle: '<p class="col-xs-12 text-justify detailContent mt1"><ul><li class="text-white">Preferential entry</li><li class="text-white">Shows</li><li class="text-white">Reserved seats in the preferential area of gold member in the front row in front of the stage</li><li class="text-white">Limited capacity to 24 places</li><li class="text-white">Unlimited bottle service (from the gold member menu)</li><li class="text-white">Premium free bar from (10:30 pm -3: 30 am)</li><li class="text-white">Round trip transportation</li></ul></p>' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 5 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 18 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: Yes</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 6,
                        orden: 10,
                        mostrar: true,
                        titulo: 'Dolphins',
                        descripcion: `Enjoy an adventure with dolphins in Punta Cana. His agility, curiosity and comprehensive intelligence when performing tricks and interacting with you in the water up to the waist to take your hands, hug and even a kiss.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Enjoy an adventure with dolphins in Punta Cana. His agility, curiosity and comprehensive intelligence when performing tricks and interacting with you in the water up to the waist to take your hands, hug and even a kiss.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Select one of our programs and dive into a dolphin experience like no other.
                            </p>
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Dolphins',
                        horarios: ['Morning','Afternoon'],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 155, referido: 80, nino: 80, infante: 0, descripcion: 'Action', detalle: '<p class="col-xs-12 text-justify detailContent mt1">An experience that includes the opportunity to swim with a dolphin in Punta Cana / Bávaro and perform the dorsal towing maneuver, as well as enjoy their acrobatics, slaps, dancing, kissing, and attention. Enjoy direct contact with them in a unique experience!</p><p class="col-xs-12 text-justify detailContent">Also, if you choose this program, we will make you two very special gifts:</p><p class="col-xs-12 text-justify detailContent">We invite you to try free Radikal Jet BoatIf you have not come to the Caribbean just to relax, Radikal Jet Boat Punta Cana is your plan: twists at full speed, incredible pirouettes, braking in the dry, jumps ... 440 CV of fun on the sea.</p><p class="col-xs-12 text-justify detailContent">And to swim in our platform with sharks and manta rays. Live an extreme and unique adventure where you will feel for ten minutes as the adrenaline runs through your body when swimming with our nurse sharks and stingrays. Dolphin Island offers you this activity completely free of charge just by participating in our interaction and swimming with dolphins programs.</p><ul><li class="text-white">Activity: Direct contact & swim with dolphins</li><li class="text-white">Duration: 40 minutes</li></ul><p class="col-xs-12 text-justify detailContent">Things you have to know</p><p class="col-xs-12 text-justify detailContent">The minimum height to perform this activity is 110 cm. Those who do not reach 120cm must be accompanied by an adult tutor who does swimming with them. For safety reasons we do not allow the participation of pregnant women in this activity.</p><p class="col-xs-12 text-justify detailContent">Swim with dolphins is one of the most requested activities in Punta Cana, so we recommend making your reservation as early as possible.</p>' },
                            { id: 1, precio: 120, referido: 160, nino: 60, infante: 0, descripcion: 'Family Experience', detalle: '<p class="col-xs-12 text-justify detailContent mt1">It is our program for families with children and for all those who want to enjoy a bath with dolphins in Punta Cana / Bávaro without having a previous experience in swimming. Our dolphins will greet you, do your acrobatics and we will make you spend an unforgettable day for the whole family!</p><p class="col-xs-12 text-justify detailContent">Also, if you choose this program, we will make you two very special gifts:</p><p class="col-xs-12 text-justify detailContent">We invite you to try free Radikal Jet BoatIf you have not come to the Caribbean just to relax, Radikal Jet Boat Punta Cana is your plan: twists at full speed, incredible pirouettes, braking in the dry, jumps ... 440 CV of fun on the sea.</p><p class="col-xs-12 text-justify detailContent">And to swim in our platform with sharks and manta rays. Live an extreme and unique adventure where you will feel for ten minutes as the adrenaline runs through your body when swimming with our nurse sharks and stingrays. Dolphin Island offers you this activity completely free of charge just by participating in our interaction and swimming with dolphins programs.</p><ul><li class="text-white">Activity: Direct contact with dolphins</li><li class="text-white">Duration: 30 minutes</li></ul><p class="col-xs-12 text-justify detailContent">Things you have to know</p><p class="col-xs-12 text-justify detailContent">It is not necessary to know how to swim, The minimum height to perform this activity is 90 cm. Those who do not reach 120cm must be accompanied by an adult tutor who does swimming with them. For safety reasons we do not allow the participation of pregnant women in this activity.</p><p class="col-xs-12 text-justify detailContent">Swim with dolphins is one of the most requested activities in Punta Cana, so we recommend making your reservation as early as possible.</p>' },
                            { id: 2, precio: 195, referido: 160, nino: 100, infante: 0, descripcion: 'Royal Swim', detalle: '<p class="col-xs-12 text-justify detailContent mt1"> Almost an hour of fun in crystal clear waters: you will enjoy the welcome that our dolphins offer you with a formal handshake, the maneuver called "foot push" or dorsal tow, abdominal tow, jumps and acrobatics, kisses, clapping, singing and endless unforgettable experiences.</p><p class="col-xs-12 text-justify detailContent">Also, if you choose this program, we will make you two very special gifts:</p><p class="col-xs-12 text-justify detailContent">We invite you to try free Radikal Jet BoatIf you have not come to the Caribbean just to relax, Radikal Jet Boat Punta Cana is your plan: twists at full speed, incredible pirouettes, braking in the dry, jumps ... 440 CV of fun on the sea.</p><p class="col-xs-12 text-justify detailContent">And to swim in our platform with sharks and manta rays. Live an extreme and unique adventure where you will feel for ten minutes as the adrenaline runs through your body when swimming with our nurse sharks and stingrays. Dolphin Island offers you this activity completely free of charge just by participating in our interaction and swimming with dolphins programs.</p><ul><li class="text-white">Activity: 100% interactive</li><li class="text-white">Duration: 50 minutes</li></ul><p class="col-xs-12 text-justify detailContent">You should know that:</p><p class="col-xs-12 text-justify detailContent">It is essential to know how to swim.</p><p class="col-xs-12 text-justify detailContent">The minimum height to perform this activity is 120 cm. Those who do not reach 120cm must be accompanied by an adult tutor who does swimming with them. For safety reasons we do not allow the participation of pregnant women in this activity.</p><p class="col-xs-12 text-justify detailContent">Swim with dolphins is one of the most requested activities in Punta Cana, so we recommend making your reservation as early as possible.</p>' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 50 minutes (in wather).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 8 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr><tr><td width="10%"><i class="fas fa-weight fa-2x colorIcono"></i></td><td width="40%"><p class="text-white text-left vcenter1">Minimum height requirement: 3 ft 3 in (1 m)</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 7,
                        orden: 5,
                        mostrar: true,
                        titulo: 'Santo Domingo',
                        descripcion: `
                              Our clients embark on an exploration, to the first city of the new world. An expert tourist guide will take you through the first city of the Americas, learning historically relevant facts of this modem-day metropolitan city. Stroll down through the Colonial Zone and observe monuments and museums. Pay homage to the ﬁrst cathedral of the Americas, known as the Catedral Metropolitana Santa Maria de la Encarnacion. Stroll down Las Damas Street, the oldest back street not only in the Dominican Republic, in all of the Americas, where you can see the largest amount of monuments. Pass by the Museo de las Casa Reales, formerly the government palace. A walk across the Alcazar de Colon, will transport you back to the era of the ﬁrst Spanish Con-quistadors. Lunch will be a typical Dominican meal in an authentic Dominican restaurant.
                            `,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>

                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>

                            <p class="col-xs-12 text-justify detailContent">
                                Our clients embark on an exploration, to the first city of the new world. An expert tourist guide will take you through the first city of the Americas, learning historically relevant facts of this modem-day metropolitan city. Stroll down through the Colonial Zone and observe monuments and museums. Pay homage to the ﬁrst cathedral of the Americas, known as the Catedral Metropolitana Santa Maria de la Encarnacion. Stroll down Las Damas Street, the oldest back street not only in the Dominican Republic, in all of the Americas, where you can see the largest amount of monuments. Pass by the Museo de las Casa Reales, formerly the government palace. A walk across the Alcazar de Colon, will transport you back to the era of the ﬁrst Spanish Con-quistadors.</p>
                            <p class="col-xs-12 text-justify detailContent">
                                Lunch will be a typical Dominican meal in an authentic Dominican restaurant.</p>
                            </p>                    
                            `,
                        localidad: 'Santo Domingo',
                        tipo: 'Culture & Sightseeing',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 90, referido: 80, nino: 45, descripcion: "Regular" }
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English / Spanish.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Santo Domingo.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 3 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 8,
                        orden: 1,
                        mostrar: true,
                        titulo: 'Saona Island',
                        descripcion: `Departured from Bayahíbe abord a thrilling speedboat or cruising catamaran will address to start the sea path that will lead to Saona Island. A beautiful beach, virtually untouched and  the top white-sand beaches in the world, located in the caribbean sea , where you can enjoy the sun, swimming and have fun with recreational activities carried out there: Volleyball, dancing tropical music. At noon Lunch with delicious dominican buffet, open bar What will be the perfect complement for an unforgettable experience. Back to Bayahibe aboard speedboats or catamaran, with a stop at the natural pool.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>

                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>

                            `,
                        localidad: 'La Romana',
                        tipo: 'Water Activities',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 90, referido: 80, nino: 45, descripcion: 'Regular', detalle: '<p class="col-xs-12 text-justify detailContent mt1">Departured from Bayahíbe abord a thrilling speedboat or cruising catamaran will address to start the sea path that will lead to Saona Island. A beautiful beach, virtually untouched and  the top white-sand beaches in the world, located in the caribbean sea , where you can enjoy the sun, swimming and have fun with recreational activities carried out there: Volleyball, dancing tropical music. At noon Lunch with delicious dominican buffet, open bar What will be the perfect complement for an unforgettable experience. Back to Bayahibe aboard speedboats or catamaran, with a stop at the natural pool.</p>' },
                            { id: 1, precio: 120, referido: 106, nino: 60, descripcion: 'Premium', detalle: '<p class="col-xs-12 text-justify detailContent mt1">Our excursion through the waters of the Chavón river, departure and boarding, famous places for the filming of several movies like Rambo 2, apocalipse now, anaconda and Torrente 5.</p><p class="col-xs-12 text-justify detailContent">Marina country house one of the most expensive and exclusive complexes of the Caribbean, where we appreciate shakira villas, July churches among other famous. Parque Nacional Del Este or Cotubanama, a nature reserve in the southeast of the country. Natural Pools are the worlds largest natural pools 7 km / 2 of crystal clear turquoise watersCanal de Catuano the waters of this channel separate the Dominican republic of Isla Saona.</p><p class="col-xs-12 text-justify detailContent">Singing the beach the most beautiful place in the Caribbean and the most paradisiacal of the whole island, a place of dreams Mano Juan where the turtle sanctuary is located. Private Beach Zone Isla Saona Premium a privilege to enjoy a private place for lunch and later bath. Private lunch exclusive area for our customers, private buffet and waiter service.</p><p class="col-xs-12 text-justify detailContent">Private Hammocks exclusive beach area with hammocks on the front line of the Caribbean Sea. Catamaran to Bayahibe return to Bayahibe with party and open bar in crossing.</p><p class="col-xs-12 text-justify detailContent">PLACE TO VISIT</p><ul><li class="text-white">Rio Chavón (departure and boarding, famous place for the filming of several movies like   rambo 2, apocalipse now, anaconda and torrente 5)</li><li class="text-white">Marina Casa de Campo (one of the most expensive and exclusive complexes in the Caribbean, where we appreciate shakira villas, churches and other famous churches.)</li><li class="text-white">Parque Nacional del Este (or Cotubanama, a nature reserve in the southeast of the country)</li><li class="text-white">Natural Pools (they are the largest natural pools of the world 7km / 2 of crystalline turquoise waters)</li><li class="text-white">Canal de Catuano (the waters of this channel separate the Dominican Republic from Isla Saona) </li><li class="text-white">Canto de la Playa (the most beautiful place in the whole Caribbean and the most paradisiacal of all Saona Island, a dream place ...)</li><li class="text-white">Mano Juan (where the turtle sanctuary is located)</li><li class="text-white">Private Beach Zone Saona Premium Island (a privilege to enjoy a private place for  and later bath)</li><li class="text-white">Private lunch (exclusive area for our customers, private buffet and waiter service)</li><li class="text-white">Private Hammocks (exclusive beach area with hammocks on the front line of the Caribbean Sea) </li><li class="text-white">Catamaran to Bayahibe (return to bayahibe with party and open bar in crossing)</li></ul>' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 8 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 9,
                        orden: 15,
                        mostrar: true,
                        titulo: 'Samana Discovery',
                        descripcion: `Your day starts with a bus trip through the landscapes of the Dominican Republic from Bayahibe heading North. As soon as you arrive in the Samaná peninsula, your adventure will really have begun. In the course of the excursion, we will change the means of transport and travel aboard a truck to the mountains to visit a typical Dominican Ranch. Learn about local agriculture and taste the fresh products and seasonal fruits that Mother Nature offers!`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Your day starts with a bus trip through the landscapes of the Dominican Republic from Bayahibe heading North. As soon as you arrive in the Samaná peninsula, your adventure will really have begun. In the course of the excursion, we will change the means of transport and travel aboard a truck to the mountains to visit a typical Dominican Ranch. Learn about local agriculture and taste the fresh products and seasonal fruits that Mother Nature offers!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Explore the rainforest during a horseback ride, along the Arroyo Chico River. Waterfall of the Lemon: an impressive fall of fresh water to 50 meters in the middle of the forest. Bathe in its waters, and take awesome photos!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Enjoy a tasty Caribbean lunch in our exclusive El helm restaurant in the city of Samaná, while enjoying the panoramic view of the bay and its iconic Napoleonic bridge. A tour of the city of Santa Bárbara de Samaná will be offered before or after lunch.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Get on board our boats in the direction of Cayo Levantado Island. Live the island experience by the hand of a good drink on its white sand beach and blue waters of romantic and earthly paradise.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                ADDITIONAL INFORMATION
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                We recommend that the participant have a good general level of health to get the most out of the trip. Children and infants are allowed under the supervision of an adult +18 years of age responsible. Infants less than 2 years old FREE; Category Children: 2-12 years of age; Adult Category: 13 years old and up.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Precautions for those who have motion sickness.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                THE TOUR INCLUDES
                            </p>
                            <ul>
                                <li class="text-white">Transfer by bus Hotel - Muelle Cañitas.</li>
                                <li class="text-white">Breakfast and brief talk about safety.</li>
                                <li class="text-white">Transportation by boat to Samaná.</li>
                                <li class="text-white">Safari transportation and visit to Rancho Aventuras.</li>
                                <li class="text-white">Horseback Tour.</li>
                                <li class="text-white">Time for swimming and / or relaxation in El Limón Waterfall.</li>
                                <li class="text-white">Return to Samaná & City Tour.</li>
                                <li class="text-white">lunch.</li>
                                <li class="text-white">Transportation by boat to Bacardi Island.</li>
                                <li class="text-white">Transportation by boat to Cañitas Pier.</li>
                            </ul>
                            
                            `,
                        localidad: 'Samana',
                        tipo: 'Adventure',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 169, referido: 152, nino: 85, descripcion: 'Regular' }
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 10,
                        orden: 16,
                        mostrar: true,
                        titulo: 'Horseback Riding',
                        descripcion: `Ride a horse on the less traveled beach of Punta Cana! Our horseback riding on the beach offers a great experience for the whole family. The previous experience of riding is not mandatory, since it can be accommodated without caring. Book now your unforgettable day of horseback riding in paradise.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Ride a horse on the less traveled beach of Punta Cana! Our horseback riding on the beach offers a great experience for the whole family. The previous experience of riding is not mandatory, since it can be accommodated without caring. Book now your unforgettable day of horseback riding in paradise.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                A horseback riding tour in Punta Cana on the beach will give you an excellent opportunity to experience the fascinating nature of this country. Experience the simple pleasures of life with your family, friends or on your own while you are riding a horse in breathless Uvero Alto beach, the northern side of Punta Cana. Our goal is to offer an exceptional experience while enjoying a friendly and relaxed atmosphere. Investing in memories that stay with you forever for this very special equestrian excursion. It’s the kind of memories that postcards are made of.
                            </p>                    
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Adventure',
                        horarios: ['Morning','Afternoon'],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 50, referido: 45, nino: 25, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 2 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 11,
                        orden: 13,
                        mostrar: true,
                        titulo: 'La Hacienda Park',
                        descripcion: `Our adventure will start at La Hacienda Headquarters in Bavaro. We'll pick you up at your Hotel and we'll go for a tour in which you'll visit the beautiful areas of Bavaro, Uvero Alto and Anamuya. Our visit will take you to the Dominican towns and incredible landscapes before arriving to La Hacienda, where you'll enjoy an amazing experience!`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Our adventure will start at La Hacienda Headquarters in Bavaro. We'll pick you up at your Hotel and we'll go for a tour in which you'll visit the beautiful areas of Bavaro, Uvero Alto and Anamuya. Our visit will take you to the Dominican towns and incredible landscapes before arriving to La Hacienda, where you'll enjoy an amazing experience!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                La Hacienda Park is an unforgettable place for fun in Punta Cana wich include adventure activities such as horseback riding, buggy rides, safari excursions, ziplines, chairlift, quickjump and a restaurant with authentic dominican dishes.
                            </p>                    
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Adventure',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 99, referido: 0, nino: 50, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 12,
                        orden: 14,
                        mostrar: true,
                        titulo: 'Samana Aerea',
                        descripcion: `Start the day with an exciting flight under the clouds, aboard a turboprop aircraft, in the direction of Samaná. Observe from the sky the endless beaches of the East Coast as well as the majestic Samaná Bay, while flying comfortably towards your destination.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Start the day with an exciting flight under the clouds, aboard a turboprop aircraft, in the direction of Samaná. Observe from the sky the endless beaches of the East Coast as well as the majestic Samaná Bay, while flying comfortably towards your destination.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Getting off the plane you will go to a mountain range called Sierra de Samaná. Enjoy views of an impressive landscape from a rugged safari truck on the way to the typical ranch. There your guide will introduce you to the numerous agricultural products found in this fertile area: coffee, cocoa, fruits, plants and many more. Be sure to try everything. It's fresh and tasty!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                The next part of the tour will take you to the heart of a tropical jungle, where you will ride a horse through Arroyo Chico. The dense vegetation will capture your senses and leave you with a taste of adventure. The road will take you to the picturesque Limón Waterfall: an impressive waterfall of 55 meters high, in the center of the jungle. There you can bathe in the refreshing waters of the natural pools created by the waterfall. Take the time to get the best picture of your vacation.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                To calm your appetite as an adventurer, the tour will take you to El Timon, our exclusive restaurant. Here you can enjoy a delicious buffet style meal. While having a leisurely lunch, you can enjoy the beautiful view of Samaná Bay and its Napoleonic bridges.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                            In the afternoon the tour relaxes a bit. While sailing towards Cayo Levantado on our comfortable boat, you will be amazed by the beautiful views of the peninsula. Once on the island, you can relax surrounded by white sand beach and turquoise waters in this unique place. You can explore the island, go snorkeling, or simply relax and enjoy a good cocktail on the beach of this lost paradise. It's not a dream, it's Samaná Explorer !!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                THE TOUR INCLUDES
                            </p>
                            <ul>
                                <li class="text-white">Flights: Punta Cana - Samaná - Punta Cana.</li>
                                <li class="text-white">Visit to ranch: coffee tasting, hot chocolate, fruits, honey, casabe.</li>
                                <li class="text-white">Horseback tour with helmets, boots, guide, refreshments.</li>
                                <li class="text-white">Access to El Limón National Park and waterfalls.</li>
                                <li class="text-white">Buffet lunch at El Timon theme restaurant.</li>
                                <li class="text-white">Boat trip to Cayo Levantado.</li>
                                <li class="text-white">Drinks at Cayo Levantado.</li>
                                <li class="text-white">Visit to the city of Santa Bárbara de Samaná.</li>
                                <li class="text-white">All transfers in Samaná and in Punta Cana / Bávaro.</li>
                                <li class="text-white">Official guides of the National Association of Tourism Guides.</li>
                            </ul>                    
                            `,
                        localidad: 'Samana',
                        tipo: 'Adventure',
                        horarios: [],
                        longuitud: 'Full Day',
                        modalidades: [
                            { id: 0, precio: 280, referido: 252, nino: 140, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 13,
                        orden: 17,
                        mostrar: true,
                        titulo: 'Seaquarium',
                        descripcion: `Enjoy a fun party onboard a modern catamaran, that takes you on a tour of the Caribbean Sea, and offers you the chance to walk on the seabed, snorkel with sharks and manta rays, and swim in the warm waters of a natural pool in the Caribbean Sea.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Enjoy a fun party onboard a modern catamaran, that takes you on a tour of the Caribbean Sea, and offers you the chance to walk on the seabed, snorkel with sharks and manta rays, and swim in the warm waters of a natural pool in the Caribbean Sea.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Seaquarium is the easiest way to explore the underwater world: It’s as simple as walking and breathing underwater! You’ll discover a submarine wreck, different reefs, and a wide variety of colorful fishes. Slip on the helmet which is attached to an air tube and you’re ready to start discovering and exploring the seabed, without getting your hair wet and without even taking your glasses off! One of our professional divers is on hand at all times to guarantee your safety. Must be minimum 120 cm, or higher to join the underwater walk.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Enjoy an underwater walk among tropical fish and corals, that will leads to a submarine wreck. After the magnificent underwater experience, you’ll have the opportunity to snorkel with sharks and manta rays, and enjoy an adorable show with sea lions, where each visitor will get an affectionate kiss from Wally, our intelligent sea lion.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Before going back to the base, you’ll have the chance to swim in the shallow water of a natural swimming pool in the Caribbean Sea, while dancing, listening to music and having fun!
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Enjoy the trip on our comfortable catamaran, with tropical music, on-board drinks and live entertainment from the crew.
                            </p>                    
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Water Activities',
                        horarios: ['Morning','Afternoon'],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 154, referido: 0, nino: 77, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 50 minutes (in water).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: 8 years old.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr><tr><td width="10%"><i class="fas fa-ruler-combined fa-2x colorIcono"></i></td><td width="40%"><p class="text-white text-left vcenter1">Minimum height requirement: 3 ft 3 in (1 m)</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 14,
                        orden: 11,
                        mostrar: false,
                        titulo: 'Speed Boat',
                        descripcion: `Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>                    
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Water Activities',
                        horarios: ['Morning','Afternoon'],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 90, referido: 80, nino: 45, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 15,
                        orden: 4,
                        mostrar: true,
                        titulo: 'Super Jeep Expedition',
                        descripcion: `Start our Tour driving your own Jeep along the Punta Cana coastal road to Miches in the northeast of the island. Your first stop will be in a traditionally managed Sugar Cane plantation where you can see many aspects of the crop development, and processes for sugar, molasses, and alcohol.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Start our Tour driving your own Jeep along the Punta Cana coastal road to Miches in the northeast of the island. Your first stop will be in a traditionally managed Sugar Cane plantation where you can see many aspects of the crop development, and processes for sugar, molasses, and alcohol.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                After this, you will go touring various areas of the countryside where chain of the highest hills begins, and enjoy the incredible experience of horseback riding in the great surroundings of this Caribbean island. Pause your Jeep Wrangler driving for a moment to ride your own horse through beautiful scenic landscape in the Tropical countryside. Continue your drive towards Anamuya village and observe the rural living as you ride past their small towns and have plenty of photo opportunities of the local Caribbean houses.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Confront a 1 mile (1.6 Kms) off road track where you can demonstrate your off-road skills on the way to the "Atabeyra Ranch" where you will enjoy a delicious Caribbean style restaurant buffet and Non-alcoholic refreshments provided by the tour There is also a country house where you can visit to see how rural life is like in the countryside. While on the Ranch, it is a great opportunity to walk on the backyard gardens where you can see a cocoa and coffee plantation and witness a traditional way to prepare organic coffee with free tasting. After the lunch and coffee tasting, we will take the short off road to the Zip Lines Ranch, where you can dare yourself with this great experience. This fun filled Zip Lines experience will satisfy anyone's sense of Adventure, boasting unrivaled panoramic views of Dominican Tropical Jungle; you will experience smile-inducing speeds as you travel along a series of 4 Zip Lines suspended high above great tropical vegetation. Professionals Guides on hand along the entire course. Start your Jeep Wrangler engine again and drive along panoramic routes between small villages and gorgeous vegetation to the beautiful Macao Beach with its crystalline water for a refreshing swim. White sand and shallow ocean water are the best for relaxing after a full day adventure. The day will end driving back to the Super Jeep Expedition base enjoying the typical Caribbean sunset after a long day of exploration and fun!
                            </p>                    
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Adventure',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 149, referido: 126, nino: 74.5, infante: 0, descripcion: 'Regular' },
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: No.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 16,
                        orden: 6,
                        mostrar: true,
                        titulo: 'Truck Safari',
                        descripcion: `Venture into the depths of exuberant Dominican nature aboard a robust 8x8 vehicle. Discover the traditional Dominican rural culture; Meet a local family and visit a rural school. visit tropical fruit plantations and discover how coffee, cocoa and snuff are produced.`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Venture into the depths of exuberant Dominican nature aboard a robust 8x8 vehicle. Discover the traditional Dominican rural culture; Meet a local family and visit a rural school. visit tropical fruit plantations and discover how coffee, cocoa and snuff are produced.
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                The fun begins as soon as we pick you up in the hotel lobby early in the morning to begin our journey into the depths of exuberant Dominican nature. The tour is done in robust 8x8 vehicles that allow us to access places that are not accessible in any other way. We will travel past plantations of sugarcane and tropical fruits and then make a stop in a traditional Dominican house, where you will have the opportunity to meet the local population and learn more about their traditional way of life that has changed very little as over the centuries. You can try local coffee and cocoa, in addition to the famous Mama Juana, a local aphrodisiac drink that is said to have incredible properties and that can cure all ills. You can also visit a typical rural school and learn how the local education system works.
                            </p>
                            
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Adventure',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 75, referido: 75, nino: 40, infante: 0, descripcion: 'Half Day', detalle: '<p class="col-xs-12 text-justify detailContent mt1">Places to visit Half Day</p><ul><li class="text-white">1 Public School</li><li class="text-white">2 Cane Plantations</li><li class="text-white">3 The Basilica Higuey</li><li class="text-white">4 Typical house and plantations of cocoa, coffee and organic products.</li><li class="text-white">5 Rancho Valencia Here they see the tobacco demonstration and the elaboration of the cigar you can also buy if you want here aven different kind of animals including crocodiles, deer, cow, etc.</li></ul><p class="col-xs-12 text-justify detailContent">The Tour includes</p><ul><li class="text-white">Water</li><li class="text-white">Soda</li><li class="text-white">Beer</li><li class="text-white">Ron</li></ul><p class="col-xs-12 text-justify detailContent">Note: this does not include horse, lunch or beach.</p>' },
                            { id: 1, precio: 90, referido: 90, nino: 45, infante: 0, descripcion: 'Full Day', detalle: '<p class="col-xs-12 text-justify detailContent mt1">Places to visit Full Day</p><ul><li class="text-white">1 Public School</li><li class="text-white">2 Cane Plantations</li><li class="text-white">3 The Basilica Higuey</li><li class="text-white">4 Typical house and plantations of cocoa, coffee and organic products</li><li class="text-white">5 Rancho Valencia Here they see the demonstration of the tobacco and the elaboration of the cigar mounted on horseback they see different types of animals among them crocodiles, deer, cow, etc. The customer has the option to buy Ron cigar and some other things in our store if they wish.</li><li class="text-white">6 Beach Macao</li></ul><p class="col-xs-12 text-justify detailContent">The Tour includes</p><ul><li class="text-white">Typical Dominican buffet lunch</li><li class="text-white">Water</li><li class="text-white">Soda soda</li><li class="text-white">Beer</li><li class="text-white">Ron</li></ul>' }
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                    },
                    {
                        id: 17,
                        orden: 18,
                        mostrar: true,
                        titulo: 'Free Shopping Tour',
                        descripcion: `Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..`,
                        descripcion_completa: `
                            <div class="col-xs-12 col-sm-12"><hr class="detailHr"></div>
                            <h2 class="col-xs-12 text-center detailTitle">DESCRIPTION</h2>
                            <p class="col-xs-12 text-justify detailContent">
                                Provider: Bella Mare
                            </p>
                            <p class="col-xs-12 text-justify detailContent">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>                    
                            `,
                        localidad: 'Punta Cana',
                        tipo: 'Shopping',
                        horarios: [],
                        longuitud: 'Half Day',
                        modalidades: [
                            { id: 0, precio: 0, referido: 0, nino: 0, infante: 0, descripcion: 'Regular'}
                        ],
                        know: '<div class="col-xs-12 col-sm-12"><hr class="detailHr1"></div><h2 class="text-uppercase detailTitle text-center">For Your Knowledge</h2><div class="text-center mb2"><table class="table table-condensed table-responsive table-know"><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/lenguage.png"></td><td width="40%"><p class="text-white text-left vcenter1">Tour Lenguage: English.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/location.png"></td><td width="40%"><p class="text-white text-left vcenter1">Location(s): Punta Cana.</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/season.png"></td><td width="40%"><p class="text-white text-left vcenter1">Season: All year long.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/duration.png"></td><td width="40%"><p class="text-white text-left vcenter1">Duration: 9 hours (approx.).</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/hotel.png"></td><td width="40%"><p class="text-white text-left vcenter1">Hotel pick-up available: Yes</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/condition.png"></td><td width="40%"><p class="text-white text-left vcenter1">Good  physical condition required: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/age.png"></td><td width="40%"><p class="text-white text-left vcenter1">Minimum age requirement: Suitable for all ages.</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/children.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for children: Yes</p></td></tr><tr><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/elderly.png"></td><td width="40%"><p class="text-white text-left vcenter1">Situable for elderly: No</p></td><td width="10%"><img class="img-fluid img-responsive" src="{{ asset("around") }}/img/excursion/details/icons/pregment.png"></td><td width="40%"><p class="text-white text-left vcenter1">Pregment women allowed: No</p></td></tr></table></div>',
                        video: false,
                        recogidas: [
                            {
                                descripcion: 'ROYALTON BAV.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:00'
                                    },
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '11:00'
                                    },
                                    {
                                        descripcion: '12:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    },
                                    {
                                        descripcion: '15:00'
                                    },
                                    {
                                        descripcion: '16:00'
                                    }
                                ],
                            },
                            {
                                descripcion: 'MEJESTIC MIRAGE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:05'
                                    },
                                    {
                                        descripcion: '10:05'
                                    },
                                    {
                                        descripcion: '11:05'
                                    },
                                    {
                                        descripcion: '12:05'
                                    },
                                    {
                                        descripcion: '14:05'
                                    },
                                    {
                                        descripcion: '15:05'
                                    },
                                    {
                                        descripcion: '16:05'
                                    }
                                ],
                            },
                            {
                                descripcion: 'MAJESTIC ELEGAN',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:05'
                                    },
                                    {
                                        descripcion: '10:05'
                                    },
                                    {
                                        descripcion: '11:05'
                                    },
                                    {
                                        descripcion: '12:05'
                                    },
                                    {
                                        descripcion: '14:05'
                                    },
                                    {
                                        descripcion: '15:05'
                                    },
                                    {
                                        descripcion: '16:05'
                                    }
                                ],
                            },
                            {
                                descripcion: 'MAJESTIC COLONIAL',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:05'
                                    },
                                    {
                                        descripcion: '10:05'
                                    },
                                    {
                                        descripcion: '11:05'
                                    },
                                    {
                                        descripcion: '12:05'
                                    },
                                    {
                                        descripcion: '14:05'
                                    },
                                    {
                                        descripcion: '15:05'
                                    },
                                    {
                                        descripcion: '16:05'
                                    }
                                ],
                            },
                            {
                                descripcion: 'MEMORIES S.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:10'
                                    },
                                    {
                                        descripcion: '10:10'
                                    },
                                    {
                                        descripcion: '11:10'
                                    },
                                    {
                                        descripcion: '12:10'
                                    },
                                    {
                                        descripcion: '14:10'
                                    },
                                    {
                                        descripcion: '15:10'
                                    },
                                    {
                                        descripcion: '16:10'
                                    }
                                ],
                            },
                            {
                                descripcion: 'ROYALTON P.C.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:10'
                                    },
                                    {
                                        descripcion: '10:10'
                                    },
                                    {
                                        descripcion: '11:10'
                                    },
                                    {
                                        descripcion: '12:10'
                                    },
                                    {
                                        descripcion: '14:10'
                                    },
                                    {
                                        descripcion: '15:10'
                                    },
                                    {
                                        descripcion: '16:10'
                                    }
                                ],
                            },
                            {
                                descripcion: 'OCC. CARIBE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:15'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:15'
                                    }
                                ],
                            },
                            {
                                descripcion: 'RUI REP',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:20'
                                    },
                                    {
                                        descripcion: '10:20'
                                    },
                                    {
                                        descripcion: '11:20'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:20'
                                    },
                                    {
                                        descripcion: '15:20'
                                    },
                                    {
                                        descripcion: '16:20'
                                    }
                                ],
                            },
                            {
                                descripcion: 'BAHIA FANTASIA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:30'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:30'
                                    }
                                ],
                            },
                            {
                                descripcion: 'BAHIA P. C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:30'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:30'
                                    }
                                ],
                            },
                            {
                                descripcion: 'BAHIA BAV',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:30'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:30'
                                    }
                                ],
                            },
                            {
                                descripcion: 'BAHIA AMBAR',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:30'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:30'
                                    }
                                ],
                            },
                            {
                                descripcion: 'BAHIA TURQUEZA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:30'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:30'
                                    }
                                ],
                            },
                            {
                                descripcion: 'RIU BAMBU',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '10:25'
                                    },
                                    {
                                        descripcion: '11:25'
                                    },
                                    {
                                        descripcion: '12:45'
                                    },
                                    {
                                        descripcion: '14:25'
                                    },
                                    {
                                        descripcion: '15:25'
                                    },
                                    {
                                        descripcion: '16:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'RIU P.C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '10:25'
                                    },
                                    {
                                        descripcion: '11:25'
                                    },
                                    {
                                        descripcion: '12:45'
                                    },
                                    {
                                        descripcion: '14:25'
                                    },
                                    {
                                        descripcion: '15:25'
                                    },
                                    {
                                        descripcion: '16:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'RIU MACAO',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '10:25'
                                    },
                                    {
                                        descripcion: '11:25'
                                    },
                                    {
                                        descripcion: '12:45'
                                    },
                                    {
                                        descripcion: '14:25'
                                    },
                                    {
                                        descripcion: '15:25'
                                    },
                                    {
                                        descripcion: '16:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'RIU NAIBOA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '10:25'
                                    },
                                    {
                                        descripcion: '11:25'
                                    },
                                    {
                                        descripcion: '12:45'
                                    },
                                    {
                                        descripcion: '14:25'
                                    },
                                    {
                                        descripcion: '15:25'
                                    },
                                    {
                                        descripcion: '16:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'RIU BAV.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '10:25'
                                    },
                                    {
                                        descripcion: '11:25'
                                    },
                                    {
                                        descripcion: '12:45'
                                    },
                                    {
                                        descripcion: '14:25'
                                    },
                                    {
                                        descripcion: '15:25'
                                    },
                                    {
                                        descripcion: '16:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'IBEROSTAR P. C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '9:35'
                                    },
                                    {
                                        descripcion: '10:35'
                                    },
                                    {
                                        descripcion: '11:35'
                                    },
                                    {
                                        descripcion: '13:00'
                                    },
                                    {
                                        descripcion: '14:40'
                                    },
                                    {
                                        descripcion: '15:40'
                                    },
                                    {
                                        descripcion: '16:55'
                                    }
                                ]
                            },
                            {
                                descripcion: 'IBEROSTAR DOM',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '9:35'
                                    },
                                    {
                                        descripcion: '10:35'
                                    },
                                    {
                                        descripcion: '11:35'
                                    },
                                    {
                                        descripcion: '13:00'
                                    },
                                    {
                                        descripcion: '14:40'
                                    },
                                    {
                                        descripcion: '15:40'
                                    },
                                    {
                                        descripcion: '16:55'
                                    }
                                ]
                            },
                            {
                                descripcion: 'IBEROSTAR BAV.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '9:35'
                                    },
                                    {
                                        descripcion: '10:35'
                                    },
                                    {
                                        descripcion: '11:35'
                                    },
                                    {
                                        descripcion: '13:00'
                                    },
                                    {
                                        descripcion: '14:40'
                                    },
                                    {
                                        descripcion: '15:40'
                                    },
                                    {
                                        descripcion: '16:55'
                                    }
                                ]
                            },
                            {
                                descripcion: 'IBEROSTAR GRAND BAV.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '9:35'
                                    },
                                    {
                                        descripcion: '10:35'
                                    },
                                    {
                                        descripcion: '11:35'
                                    },
                                    {
                                        descripcion: '13:00'
                                    },
                                    {
                                        descripcion: '14:40'
                                    },
                                    {
                                        descripcion: '15:40'
                                    },
                                    {
                                        descripcion: '16:55'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PALLADIUM BAV.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:00'
                                    },
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '11:00'
                                    },
                                    {
                                        descripcion: '12:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    },
                                    {
                                        descripcion: '15:00'
                                    },
                                    {
                                        descripcion: '16:00'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PALLADIUM P. C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:00'
                                    },
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '11:00'
                                    },
                                    {
                                        descripcion: '12:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    },
                                    {
                                        descripcion: '15:00'
                                    },
                                    {
                                        descripcion: '16:00'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PALLADIUM PALACE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:00'
                                    },
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '11:00'
                                    },
                                    {
                                        descripcion: '12:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    },
                                    {
                                        descripcion: '15:00'
                                    },
                                    {
                                        descripcion: '16:00'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PALLADIUM TURQUEZA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:00'
                                    },
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '11:00'
                                    },
                                    {
                                        descripcion: '12:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    },
                                    {
                                        descripcion: '15:00'
                                    },
                                    {
                                        descripcion: '16:00'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PUNTA CANA PRINCESS',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:00'
                                    },
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '11:00'
                                    },
                                    {
                                        descripcion: '12:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    },
                                    {
                                        descripcion: '15:00'
                                    },
                                    {
                                        descripcion: '16:00'
                                    }
                                ]
                            },
                            {
                                descripcion: 'NATURA PARK',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:00'
                                    },
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '11:00'
                                    },
                                    {
                                        descripcion: '12:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    },
                                    {
                                        descripcion: '15:00'
                                    },
                                    {
                                        descripcion: '16:00'
                                    }
                                ]
                            },
                            {
                                descripcion: 'VIK ARENA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:05'
                                    },
                                    {
                                        descripcion: '10:05'
                                    },
                                    {
                                        descripcion: '11:05'
                                    },
                                    {
                                        descripcion: '12:15'
                                    },
                                    {
                                        descripcion: '14:05'
                                    },
                                    {
                                        descripcion: '15:05'
                                    },
                                    {
                                        descripcion: '16:05'
                                    }
                                ]
                            },
                            {
                                descripcion: 'DREAM PAL BEACH',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:05'
                                    },
                                    {
                                        descripcion: '10:05'
                                    },
                                    {
                                        descripcion: '11:05'
                                    },
                                    {
                                        descripcion: '12:15'
                                    },
                                    {
                                        descripcion: '14:05'
                                    },
                                    {
                                        descripcion: '15:05'
                                    },
                                    {
                                        descripcion: '16:05'
                                    }
                                ]
                            },
                            {
                                descripcion: 'OCEAN BLUE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:10'
                                    },
                                    {
                                        descripcion: '10:10'
                                    },
                                    {
                                        descripcion: '11:10'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:10'
                                    },
                                    {
                                        descripcion: '15:10'
                                    },
                                    {
                                        descripcion: '16:10'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PRESIDENCIAL SUITE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:10'
                                    },
                                    {
                                        descripcion: '10:10'
                                    },
                                    {
                                        descripcion: '11:10'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:10'
                                    },
                                    {
                                        descripcion: '15:10'
                                    },
                                    {
                                        descripcion: '16:10'
                                    }
                                ]
                            },
                            {
                                descripcion: 'BE LIVE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:10'
                                    },
                                    {
                                        descripcion: '10:10'
                                    },
                                    {
                                        descripcion: '11:10'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:10'
                                    },
                                    {
                                        descripcion: '15:10'
                                    },
                                    {
                                        descripcion: '16:10'
                                    }
                                ]
                            },
                            {
                                descripcion: 'VISTA SOL',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:15'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:15'
                                    }
                                ]
                            },
                            {
                                descripcion: 'BLUE BAY',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:15'
                                    },
                                    {
                                        descripcion: '10:15'
                                    },
                                    {
                                        descripcion: '11:15'
                                    },
                                    {
                                        descripcion: '12:15'
                                    },
                                    {
                                        descripcion: '14:15'
                                    },
                                    {
                                        descripcion: '15:15'
                                    },
                                    {
                                        descripcion: '16:15'
                                    }
                                ]
                            },
                            {
                                descripcion: 'CARIBE CLUB PRINCESS',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:20'
                                    },
                                    {
                                        descripcion: '10:20'
                                    },
                                    {
                                        descripcion: '11:20'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:20'
                                    },
                                    {
                                        descripcion: '15:20'
                                    },
                                    {
                                        descripcion: '16:20'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PARADISUS PUNTA CANA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:20'
                                    },
                                    {
                                        descripcion: '10:20'
                                    },
                                    {
                                        descripcion: '11:20'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:20'
                                    },
                                    {
                                        descripcion: '15:20'
                                    },
                                    {
                                        descripcion: '16:20'
                                    }
                                ]
                            },
                            {
                                descripcion: 'SUN SCAPE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:20'
                                    },
                                    {
                                        descripcion: '10:20'
                                    },
                                    {
                                        descripcion: '11:20'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:20'
                                    },
                                    {
                                        descripcion: '15:20'
                                    },
                                    {
                                        descripcion: '16:20'
                                    }
                                ]
                            },
                            {
                                descripcion: 'CATALONIA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:20'
                                    },
                                    {
                                        descripcion: '10:20'
                                    },
                                    {
                                        descripcion: '11:20'
                                    },
                                    {
                                        descripcion: '12:20'
                                    },
                                    {
                                        descripcion: '14:20'
                                    },
                                    {
                                        descripcion: '15:20'
                                    },
                                    {
                                        descripcion: '16:20'
                                    }
                                ]
                            },
                            {
                                descripcion: 'BAVARO PRINCESS',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '10:25'
                                    },
                                    {
                                        descripcion: '11:25'
                                    },
                                    {
                                        descripcion: '12:25'
                                    },
                                    {
                                        descripcion: '14:25'
                                    },
                                    {
                                        descripcion: '15:25'
                                    },
                                    {
                                        descripcion: '16:25'
                                    }
                                ]
                            },
                            {
                                descripcion: 'WHALA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '10:25'
                                    },
                                    {
                                        descripcion: '11:25'
                                    },
                                    {
                                        descripcion: '12:25'
                                    },
                                    {
                                        descripcion: '14:25'
                                    },
                                    {
                                        descripcion: '15:25'
                                    },
                                    {
                                        descripcion: '16:25'
                                    }
                                ]
                            },
                            {
                                descripcion: 'OCC. PUNTA CANA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:30'
                                    },
                                    {
                                        descripcion: '10:30'
                                    },
                                    {
                                        descripcion: '11:30'
                                    },
                                    {
                                        descripcion: '12:30'
                                    },
                                    {
                                        descripcion: '14:30'
                                    },
                                    {
                                        descripcion: '15:30'
                                    },
                                    {
                                        descripcion: '16:30'
                                    }
                                ]
                            },
                            {
                                descripcion: 'NOW LARIMAR',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:30'
                                    },
                                    {
                                        descripcion: '10:30'
                                    },
                                    {
                                        descripcion: '11:30'
                                    },
                                    {
                                        descripcion: '12:30'
                                    },
                                    {
                                        descripcion: '14:30'
                                    },
                                    {
                                        descripcion: '15:30'
                                    },
                                    {
                                        descripcion: '16:30'
                                    }
                                ]
                            },
                            {
                                descripcion: 'MELIA CARIBE',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:35'
                                    },
                                    {
                                        descripcion: '10:35'
                                    },
                                    {
                                        descripcion: '11:35'
                                    },
                                    {
                                        descripcion: '12:35'
                                    },
                                    {
                                        descripcion: '14:35'
                                    },
                                    {
                                        descripcion: '15:35'
                                    },
                                    {
                                        descripcion: '16:35'
                                    }
                                ]
                            },
                            {
                                descripcion: 'PALMA REAL',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:35'
                                    },
                                    {
                                        descripcion: '10:35'
                                    },
                                    {
                                        descripcion: '11:35'
                                    },
                                    {
                                        descripcion: '12:35'
                                    },
                                    {
                                        descripcion: '14:35'
                                    },
                                    {
                                        descripcion: '15:35'
                                    },
                                    {
                                        descripcion: '16:35'
                                    }
                                ]
                            },
                            {
                                descripcion: 'IFA VILLA BAV.',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:40'
                                    },
                                    {
                                        descripcion: '10:40'
                                    },
                                    {
                                        descripcion: '11:40'
                                    },
                                    {
                                        descripcion: '12:40'
                                    },
                                    {
                                        descripcion: '14:40'
                                    },
                                    {
                                        descripcion: '15:40'
                                    },
                                    {
                                        descripcion: '16:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'BARCELO',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:50'
                                    },
                                    {
                                        descripcion: '10:50'
                                    },
                                    {
                                        descripcion: '11:50'
                                    },
                                    {
                                        descripcion: '12:50'
                                    },
                                    {
                                        descripcion: '14:50'
                                    },
                                    {
                                        descripcion: '15:50'
                                    },
                                    {
                                        descripcion: '16:50'
                                    }
                                ]
                            },
                            {
                                descripcion: 'SIVORY',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:20'
                                    },
                                    {
                                        descripcion: '13:20'
                                    }
                                ]
                            },
                            {
                                descripcion: 'ZOETRY',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:20'
                                    },
                                    {
                                        descripcion: '13:20'
                                    }
                                ]
                            },
                            {
                                descripcion: 'EXCELLETE P.C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:25'
                                    },
                                    {
                                        descripcion: '13:25'
                                    }
                                ]
                            },
                            {
                                descripcion: 'SIRENIS',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:30'
                                    },
                                    {
                                        descripcion: '13:30'
                                    }
                                ]
                            },
                            {
                                descripcion: 'EXCELLETE EL CARMEN',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:35'
                                    },
                                    {
                                        descripcion: '13:35'
                                    }
                                ]
                            },
                            {
                                descripcion: 'BREATHLESS',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:40'
                                    },
                                    {
                                        descripcion: '13:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'NOW ONIX',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:45'
                                    },
                                    {
                                        descripcion: '13:45'
                                    }
                                ]
                            },
                            {
                                descripcion: 'DREAMS P.C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:50'
                                    },
                                    {
                                        descripcion: '13:50'
                                    }
                                ]
                            },
                            {
                                descripcion: 'NICKELODEON P.C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '09:55'
                                    },
                                    {
                                        descripcion: '13:55'
                                    }
                                ]
                            },
                            {
                                descripcion: 'CHIC P.C',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '10:00'
                                    },
                                    {
                                        descripcion: '14:00'
                                    }
                                ]
                            },
                            {
                                descripcion: 'OCEAN EL FARO',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '10:05'
                                    },
                                    {
                                        descripcion: '14:05'
                                    }
                                ]
                            },


                            {
                                descripcion: 'EDEN ROCK',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '10:30'
                                    },
                                    {
                                        descripcion: '13:30'
                                    }
                                ]
                            },
                            {
                                descripcion: 'ALSOL DEL MAR',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '10:40'
                                    },
                                    {
                                        descripcion: '13:40'
                                    }
                                ]
                            },
                            {
                                descripcion: 'SANTUARY',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '10:45'
                                    },
                                    {
                                        descripcion: '13:45'
                                    }
                                ]
                            },
                            {
                                descripcion: 'SECRET CAP CANA',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '10:55'
                                    },
                                    {
                                        descripcion: '13:55'
                                    }
                                ]
                            },
                            {
                                descripcion: 'ALSOL TRS',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '11:05'
                                    },
                                    {
                                        descripcion: '14:05'
                                    }
                                ]
                            },
                            {
                                descripcion: 'ALSOL LUXURY',
                                lugar: 'Lobby',
                                turno: [
                                    {
                                        descripcion: '11:10'
                                    },
                                    {
                                        descripcion: '14:10'
                                    }
                                ]
                            }
                        ]
                    }
                ];
                
                $scope.tours = tours;  
                $scope.cambiarTour = function () {  
                    $('#modalidad').select2();  
                }   
                 $scope.calcularPrecioTour = function () {  
                    if ($scope.tour) {  
                        var pos = 0;    
                        if ($scope.tour.modalidades.length > 1 && $scope.tour.modalidad)    
                            pos = $scope.tour.modalidad.id; 
                         var precioAdultos = $scope.tour.adultos * $scope.tour.modalidades[pos].precio; 
                        var precioNinos = $scope.tour.ninos * $scope.tour.modalidades[pos].nino;    
                        var precioInfants = $scope.tour.infants * $scope.tour.modalidades[pos].infante; 
                        var descuento = $scope.tour.descuento;  
                         if (precioNinos){  
                            $scope.tour.precio = precioAdultos + precioNinos;   
                            $scope.tour.precioNinos = precioNinos;  
                        }else if (precioInfants){   
                            $scope.tour.precio = precioAdultos + precioNinos + precioInfants;   
                            $scope.tour.precioInfants = precioInfants;  
                        }else if (precioAdultos){   
                            $scope.tour.precio = precioAdultos; 
                            $scope.tour.precioAdultos = precioAdultos;  
                        }else if (descuento){   
                            $scope.tour.precio = descuento; 
                            $scope.tour.descuento = descuento;  
                        }else   
                            $scope.tour.precio = $scope.tour.modalidades[pos].precio;   
                    }   
                    else{   
                        $scope.tour.precio = $scope.tour.modalidades[pos].precio;   
                        $scope.tour.descuento ? $scope.tour.descuento : 0;  
                    }   
                }   
             /*-------------------------------VIP-------------------------------*/  
                $scope.calcularPrecioVIP = function () {    
                    if ($scope.VIP.serviceVIP && $scope.VIP.pasajeros) {    
                        if ($scope.VIP.arrival) 
                            $scope.VIP.precio = parseFloat($scope.VIP.pasajeros * 75);  
                        if ($scope.VIP.departure)   
                            $scope.VIP.precio = $scope.VIP.precio + parseFloat($scope.VIP.pasajeros * 125); 
                    }   
                }   
                 $scope.VIP = { precio: 0 };    
                $scope.agregarVIP = function (event) {  
                    event.preventDefault(); 
                    if ($scope.VIP.serviceVIP && $scope.VIP.pasajeros) {    
                        $scope.carrito.vip.push($scope.VIP);    
                        $scope.vip = false; 
                        $scope.VIP = { precio: 0 }; 
                        $scope.actualizar();    
                    }   
                    if ($scope.transfer) {  
                        $scope.agregarTraslado(event);  
                        $scope.transfer = false;    
                    }   
                    swal({  
                        title: 'VIP',   
                        text: 'Added successfully', 
                        type: 'success',    
                        confirmButtonColor: '#FB8302',  
                    }); 
                }   
                $scope.eliminarVIP = function (index) { 
                    $scope.carrito.vip.splice(index, 1);    
                    $scope.actualizar();    
                }   
                 $scope.cargar = function () {  
                    $http.get(window.url + '/session').then(function (response) {   
                        $scope.carrito = response.data; 
                        $scope.nro_carrito();   
                    }); 
                }   
                $scope.cargar();    
                 $scope.actualizar = function () {  
                    $scope.carrito._token = window._token;  
                    $scope.nro_carrito();   
                    $http.post(window.url + '/session', $scope.carrito).then(function (response) {});   
                    if ($scope.opcion == 'reservar') {  
                        $window.location.href = window.url + '/shop';   
                    }   
                }   
                 if (window.pos != null) {  
                    $scope.tour = $scope.tours[window.pos]; 
                    $scope.tour.precio = $scope.tours[window.pos].modalidades[0].precio;    
                    $timeout(function () { $('#tourModel').select2(); }, 500);  
                }   
                 $scope.precioTotal = function () { 
                    var precio = 0; 
                    for (var i = 0; i < $scope.carrito.traslados.length; i++) { 
                        precio += parseFloat($scope.carrito.traslados[i].precio);   
                    }   
                    for (var i = 0; i < $scope.carrito.tours.length; i++) { 
                        precio += parseFloat($scope.carrito.tours[i].precio);   
                    }   
                    for (var i = 0; i < $scope.carrito.vip.length; i++) {   
                        precio += parseFloat($scope.carrito.vip[i].precio); 
                    }   
                    for (var i = 0; i < $scope.carrito.wifi.length; i++) {  
                        precio += parseFloat($scope.carrito.wifi[i].precio);    
                    }   
                    return precio;  
                }   
                 $scope.vipTipos = ['Audi', 'Suburban'];    
                $scope.cambiarPasajeros = function () { 
                    $scope.traslado.vip = "";   
                    if ($scope.traslado.pasajeros <= 2) {   
                        $scope.vipTipos = ['Suburban', 'Audi']; 
                    }   
                    else {  
                        $scope.vipTipos = ['Suburban']; 
                    }   
                    $timeout(function () { $('.vipSelect').select2(); }, 500);  
                }   
            /*------------------------------Wifi-------------------------------*/   
                $scope.wifi = {};   
                $scope.agregarWifi = function (event) { 
                    event.preventDefault(); 
                    $scope.wifi.dias = $('#dias').val();    
                    $scope.wifi.precio = $("#precio2").val();   
                    $scope.carrito.wifi.push($scope.wifi);  
                    $scope.actualizar();    
                    swal({  
                        title: 'Wifi',  
                        text: 'Added successfully', 
                        type: 'success',    
                        confirmButtonColor: '#FB8302',  
                    }); 
                    $("#wifiModal").modal('hide');  
                    $scope.wifi = {};   
                    return false;   
                }   
                 $scope.eliminarWifi = function (index) {   
                    $scope.carrito.wifi.splice(index, 1);   
                    $scope.actualizar();    
                }   
                 $scope.nro_carrito = function(){   
                    $scope.nro =  $scope.carrito.tours.length + $scope.carrito.traslados.length + $scope.carrito.vip.length + $scope.carrito.wifi.length;   
                }   
        }); 
    </script>   
 </body>    
</html>
