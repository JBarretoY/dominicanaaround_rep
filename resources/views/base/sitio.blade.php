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

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css'>
        <link rel="stylesheet" href="{{ asset('/') }}bower_components/owlcarousel-2/owl.carousel.css">
        
        <link rel="stylesheet" href="{{asset('around')}}/css/style.min.css">
        <link rel="stylesheet" href="{{asset('around')}}/css/custom.css">
        <link rel="stylesheet" href="{{ asset('/') }}css/main.css">

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
        <header role="banner" class="probootstrap-header header-top" style="background-image: url({{asset('around')}}/img/excursion/fondo1.png);background-position: center; background-repeat: no-repeat;background-size:101% 100%;font-family: sans-serif !important;">
            <div class="row" style="background: #e3d8c4;">
                <a href="{{url('/')}}" class="probootstrap-logo visible-xs"><img src="{{asset('around')}}/img/logo_movil.png" class="img-fluid" style="width: 20%; padding: 5px;"></a>
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
            <div class="probootstrap-slider flexslider">
                <ul class="slidses">
                    <li class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="probootstrap-slider-text text-center" style="display: flex !important;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

		@yield('content')

        <div id="terminosModales" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 80%">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title text-center formTitle"><img src="{{asset('around')}}/img/logo_md2.png" class="img-logo-modal"></h3>
                    </div>
                    <div class="modal-body tresEM">
                        <h4 class="text-justify text-uppercase font-weight-bold verdeAroud">TERMS AND CONDITIONS</h4>
                        <p class="text-justify terms-policies">Cancellations are only admitted 48hrs in advance. Cancellation do not apply on bookings for the same day or the Next. Dominicana Around reserves the right to cancel any excursion or change the program of an excursion if circunstances require it.</p>

                        <h4 class="text-justify text-uppercase font-weight-bold verdeAroud">Cancellation policies</h4>
                        <p class="text-justify terms-policies">If canceled more than 48 hours in advance, 100% refund will be made. For cancellations less than 48 hours prior to reservation, or for no-show, no refund will be applied unless an official medical certificate is presented.</p>

                        <h4 class="text-justify text-uppercase font-weight-bold verdeAroud">Cancellation time Redemption amount</h4>
                        <p class="text-justify terms-policies">> More than 48 hours before the 100% activity.</p>
                        <p class="text-justify terms-policies">< Less than 48 hours before the 0% activity.</p>

                        <h4 class="text-justify text-uppercase font-weight-bold verdeAroud">Change Policies</h4>
                        <p class="text-justify terms-policies">Changes in the date, type of activity or hotel pick-up are allowed within 48 hours prior to the completion of the program. These changes must be communicated to <a class="text-center" href="mailto:info@domimicanaaround.com"><strong>info@domimicanaaround.com</strong></a>, indicating confirmation number, name, selected program and date of reservation.</p>
                        <p class="text-justify terms-policies">The <strong>Dominicana Around</strong> Website is offered conditioned to your acceptance without any modification of the terms, conditions, communications and contents in this document. Your use of the Website constitutes your agreement to the terms, conditions and communications.</p>

                        <h4 class="text-justify text-uppercase font-weight-bold verdeAroud">MODIFICATION OF THESE TERMS OF USE</h4>
                        <p class="text-justify terms-policies"><strong>Dominicana Around</strong> reserves the right to modify the terms, conditions and communications with which the Website is offered, including, among others, the costs associated with the use of the Dominicana around Website.</p>

                        <h4 class="text-justify text-uppercase font-weight-bold verdeAroud">NO ILLEGAL OR PROHIBITED USE</h4>
                        <p class="text-justify terms-policies">As a condition of your use of the Dominicana Around Website, you warrant to Dominicana Around that you will not use the Dominicana Around Website for any purpose that is illegal or prohibited by these terms, conditions, and communications. You may not use the Dominicana Around Internet Page in a manner that could impair, disable, overburden or damage the Dominicana Around Internet Page, or interfere with your use and enjoyment of any other part of the Dominicana Around website. You will not obtain, or attempt to obtain, materials or information, by any means that have not been made available or provided intentionally through the Dominicana Around Internet Pages.</p>

                        <h4 class="text-justify text-uppercase font-weight-bold verdeAroud">USE OF COMMUNICATION SERVICES</h4>
                        <p class="text-justify terms-policies">The <strong>Dominicana Around</strong> Website will contain bulletin board services, chats, informational groups, forums, communities, personal internet pages, calendars, and / or message or communication facilities, designed to allow you to communicate with the general public or with a group (collectively, "Communications Services"). You agree to use the Communication Services only to post, send and receive messages and material that are appropriate and related to the Communication Service in particular. As an example, and without excluding other cases, agree that when you use the Communication Service, do not:</p>
                        <ul class="ul-terms-policies">
                            <li class="text-justify">Defame, abuse, harass, stalk, threaten, or otherwise violate the legal rights (such as privacy and publicity rights) of others.</li>
                            <li class="text-justify">Publish posts, upload, distribute or disseminate any subject, name, material or information profane, defamatory, infringing, obscene, indecent or illegal.</li>
                            <li class="text-justify">Upload files containing software or other material protected by intellectual property laws (or by rights of privacy of publicity), unless you own or control the rights thereof or have received all necessary consents.</li>
                            <li class="text-justify">It will upload files that contain viruses, infected files, or other similar software or programs that may damage the operation of another person's computer.</li>
                            <li class="text-justify">Will publish or offer for sale or buy any good or service for any business purpose, unless said Communication Service specifically allows such messages.</li>
                            <li class="text-justify">Conduct or follow surveys, contests, pyramid schemes or chained charts.</li>
                            <li class="text-justify">It will download any file sent by another user of a Communication Service that knows, or reasonably should know, that it can not be legally distributed in such a way.</li>
                            <li class="text-justify">Falsify or eliminate any attribution of author, legal or other appropriate notices, or property appointments or labels of the origin or origin of the software, or other material contained in a file that is uploaded.</li>
                            <li class="text-justify">Restrict or prevent any other user from using and enjoying Communications Services.</li>
                            <li class="text-justify">It will violate any code of conduct or other guidelines that may be applicable to any Communication Service.</li>
                            <li class="text-justify">It will collect, or otherwise collect, information about others, including internet addresses, without your consent.</li>
                            <li class="text-justify">Will not comply with any applicable law or regulation.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btnReturn" data-dismiss="modal" style="width:8em">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    	
        
        <script src="{{ asset('around') }}/js/scripts.js"></script>
        <script src="{{ asset("/") }}bower_components/jquery/dist/jquery.min.js"></script>
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
    	<script src="{{ asset("/") }}js/sitio.js?v=33"></script>
        <script src="{{ asset("/") }}js/main.js?v=33"></script>
        <script src="{{ asset("js/searcher.s.js") }}"></script>
        
        <script src="{{ asset('around') }}/js/main.js"></script>
        <script src="{{ asset('around') }}/js/custom.js"></script>

    	<script>
            window.url = '{{ url("/") }}';
    	</script>
</html>