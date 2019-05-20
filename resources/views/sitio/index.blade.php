<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>@yield('title','Dominicana Around')</title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('around') }}/img/logo_md2.png" rel="shortcut icon" type="image/png">
    <link href="{{ asset('/') }}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.css" rel="stylesheet" />
    <link href="{{ asset('/') }}bower_components/owlcarousel-2/owl.carousel.css" rel="stylesheet">
    <link href='{{asset('around')}}/css/owl.theme.default.min.css' rel='stylesheet'>
    <link href="{{asset('around')}}/css/styles-merged.css" rel="stylesheet">
    <link href="{{asset('around')}}/css/style.min.css" rel="stylesheet">
    <link href="{{asset('around')}}/css/custom.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/main.css?11" rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css' rel='stylesheet'>

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
        .swal2-container{
          font-family: 'Roboto', sans-serif !important;
        }
        p {
          margin-bottom: 0.5em;
        }
        li.select2-results__option, input.select2-search__field{
          font-size: 14px !important;
          font-family: sans-serif !important;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected]{
          background-color: #147113;
          color: #fff;
        }
        .numeros .select2-hidden-accessible{
          text-align: center;
        }
        body, h3{
          font-family: 'Marker Notes'; /*a name to be used later*/
          src: url('{{asset('around')}}/css/marker_notes/Marker_Notes.ttf'); /*URL to font*/
        }
        @font-face {
          font-family: 'Marker Notes'; /*a name to be used later*/
          src: url('{{asset('around')}}/css/marker_notes/Marker_Notes.ttf'); /*URL to font*/
        }
        .probootstrap-block-image-text {
          border-radius: 16px;
          max-width: 100% !important;
          background: none;
        }
        @media screen and (max-width: 480px) {
          .probootstrap-block-image-text {
            display: contents;
            margin-left: 0;
          }
          .title1{
            font-size: 5em !important; margin-bottom: 0; text-align: center; color: #431A10; width: 100%;
          }
        }
        @media screen and (max-width: 480px){
          p.tour-title {
            top: 50px;
            left: 0;
          }
          .tourParty-fondo {
                margin-left: 0em !important;
                margin-right: 0em !important;
            }
        }
          
        .tour-list-text{
            background-color: #e3d8c4;
            border-radius: 0  0 10px 10px;
            border-top: solid 10px #407B1E;
        }
        .tour-list-text p{
          padding: 15px;
          color: #407B1E;
        }
        p.tour-title {
          text-align: center;
          color: #407B1E !important;
          font-size: 20px;
          margin-bottom: -0.1px;
          z-index: 1;
          top: 50px;
          left: 197px;
          position: relative;
            background-color: #e3d8c4;
          max-width: 250px;
          border-radius: 10px 0 0 10px;
        }
        .probootstrap-block-image-text figure img {
          border-radius: 10px 10px 0  0;
        }
        h3.tour-title{
          color: #e3d8c4;
          font-size: 40px;
        }
        .banner{
          background-image: url("img/88.png");
          background-repeat: no-repeat;
          width: 100%;
          height: 100%;
          position: absolute;
          top: 476px;
          z-index: 99;
        }
        .probootstrap-section.probootstrap-section-dark p{
          color: #407B1E;
        }
        .probootstrap-sub-wrap {
          font-family: sans-serif !important;
          font-size: 30px !important;
          margin-top: 140px !important;
          text-align: center;
          color: #472e26; 
          
        }
        .call-us{
          font-family: sans-serif !important;
          font-weight: bold;
          font-size: 18px !important;
        }
        /*carrousel*/
          .owl-item {
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0) scale(1.0, 1.0);
          }
          .owl-nome .owl-dots{
            margin-top:50px;
          }
          .owl-nome .owl-dots .owl-dot span{
            color: #407b1e !important;
          }
          .owl-nome .owl-nav [class*=owl-] {
            color: #147113;
            font-size: 54px;
            margin: 0px -30px 34px -55px;
            padding: 4px 7px;
            background: none;
            display: inline-block;
            cursor: pointer;
            border-radius: 3px;
          }
          .owl-nome .owl-nav [class*=owl-]:hover {
            color: #407b1e;
            background: none;
          }
          .owl-nome .owl-dots .owl-dot span {
            width: 50px;
            height: 5px;
            margin: 5px 7px;
            background: #e3d8c4;
            border: solid 1px #147113;
            transition: opacity .2s ease;
            border-radius: 30px;
          }
          .owl-nome .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
            background: #147113;
            border: 0;
          }
          .owl-nome .owl-nav {
            position: absolute;
            width: 100%;
            top: 26%;
            background:blue;
            height:0px;
          }
          .owl-nome .owl-next{
            position:absolute;
            background:blue;
            right:1%;
          }
          .owl-nome .owl-prev{
            position:absolute;
            background:blue;
            left:1%;
          }
          .li-item{
            background: #431A10;
            padding: 12px 30px 12px 30px !important;
            margin: -1px !important;
          }
          .li-item a{
            color: #e3d8c4 !important;
          }
          .li-item:hover{
            background: #e3d8c4;
          }
          .li-item:hover a{
            color: #431A10 !important;
          }
          .li-item-left{
            padding: 12px 30px 12px 45px !important;
            border-radius: 20px 0 0 20px;
            background: #431A10;
            margin: -1px !important;
          }
          .li-item-right{
            padding: 12px 45px 12px 30px !important;
            border-radius: 0 20px 20px 0;
            background: #431A10;
            margin: -1px !important;
          }
          .li-item-left a, .li-item-right a{
            color: #e3d8c4 !important;
          }
          .li-item-left:hover a, .li-item-right:hover a{
            color: #431A10 !important;
          }
          .li-item-left:hover, .li-item-right:hover{
            background: #e3d8c4;
          }
          .probootstrap-main-nav {
            margin: 0px;
            padding: 0px;
          }
          .title1{
            font-size: 9em !important; padding-top: 4em; margin-bottom: 0; text-align: center; color: #431A10; width: 100%;
          }
          .title2{
            font-size: 6.5em !important; margin-top: 0; text-align: center; color: #431A10; width: 100%;
          }
          @media (max-width: 480px ) {
            .title1{
              font-size: 5em !important; padding-top: 0; margin-bottom: 0; text-align: center; color: #431A10; width: 100%;  
            }
            .title2{
              font-size: 4.5em !important; margin-top: 0; text-align: center; color: #431A10; width: 100%;
            }
          }
    </style>
  </head>
    <body ng-app="app" ng-controller="ctrl">
      <header role="banner" class="probootstrap-header header-top" style="background-image: url({{asset('around')}}/img/fondo1.png);background-position: center; background-repeat: no-repeat;background-size:101% 100%;font-family: sans-serif !important;">
          <div class="row" style="background: #e3d8c4;">
              <a href="/#" class="probootstrap-logo visible-xs"><img src="{{ asset('around') }}/img/logo_movil.png" class="img-fluid" style="width: 20%; padding: 5px;"></a>
              <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
              <div class="mobile-menu-overlay"></div>

              <nav role="navigation" class="probootstrap-nav hidden-xs my-navbar">
                  <div>
                      <a href="#" class="hidden-xs probootstrap-logo-center"><img src="{{asset('around')}}/img/logo_md2.png" class="img-logo-header mb4"></a>
                  </div>
                  <ul class="probootstrap-main-nav color-menu">
                      <li class="text-justify li-item-left"><a href="{{url('/')}}">Home</a></li>
                      <li class="text-justify li-item"><a href="{{url('excursions')}}">Excursion</a></li>
                      <li class="text-justify li-item hidden-xs" id="transf"><a href="">Transfer</a></li>
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
                      <h5>Follow Us</h5>
                      <ul class="social-buttons">
                          <li><a href="https://www.facebook.com/dominicanaaround" target="_blank"><i class="fab fa-facebook"></i></a></li>
                          <li><a href="https://www.instagram.com/dominicanaaround" target="_blank"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="/#" target="_blank"><i class="fab fa-tripadvisor"></i></a></li>
                      </ul>
                  </div>
              </nav>
          </div>
          <div class="probootstrap-slider flexslider">
              <ul class="slides">
                  <li class="">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="probootstrap-slider-text text-center" style="display: flex !important;">
                                      <div>
                                        <p class="title1"><strong>¡A vacation style like no other!</strong></p>
                                        <p class="title2">¿How about spending the day discovering our beautiful Dominican Republic?</p></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </header>

      <!-- Section Book Now -->
      <section class="probootstrap-section probootstrap-section-dark" style="background-image: url({{asset('around')}}/img/fondo2.png);background-position: center; background-repeat: no-repeat;background-size:101% 100%">
          <div class="container">
              <div class="row probootstrap-gutter40" style="margin-top: 10%;">
                  <div class="col-md-5">
                      <div class="probootstrap-block-image-text">
                          <p class="tour-title text-right hidden-xs">@{{ tours[8].titulo }}</p>
                          <figure>
                              <a class="">
                                  <img ng-src="{{asset('/')}}img/tours/@{{ tours[8].id }}.jpg" alt="" class="img-responsive">
                              </a>
                              <a href="{{ url('excursion') }}/@{{ tours[8].id }}" class="book-now">
                                  <div class="text-center tour-list-text">
                                      <p>Book now</p>
                                  </div>
                              </a>
                          </figure>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <hr class="vertical visible-lg">
                      <!--!--hr class="horizontal visible-xs"---->
                  </div>
                  <div class="col-md-5">
                      <div class="probootstrap-block-image-text">
                          <p class="tour-title text-right hidden-xs">@{{ tours[0].titulo }}</p>
                          <figure>
                              <a class="">
                                  <img ng-src="{{asset('/')}}img/tours/@{{ tours[0].id }}.jpg" alt="" class="img-responsive">
                              </a>
                              <a href="{{ url('excursion') }}/@{{ tours[0].id }}" class="book-now">
                                  <div class="text-center tour-list-text">
                                      <p>Book now</p>
                                  </div>
                              </a>
                          </figure>
                      </div>
                  </div>
              </div>
              <div class="row probootstrap-gutter40" style="margin-bottom: 10%;">
                  <div class="col-md-5">
                      <div class="probootstrap-block-image-text">
                          <p class="tour-title text-right hidden-xs">@{{ tours[16].titulo }}</p>
                          <figure>
                              <a class="">
                                  <img ng-src="{{asset('/')}}img/tours/@{{ tours[16].id }}.jpg" alt="" class="img-responsive">
                              </a>
                              <a href="{{ url('excursion') }}/@{{ tours[16].id }}" class="book-now">
                                  <div class="text-center tour-list-text">
                                      <p>Book now</p>
                                  </div>
                              </a>
                          </figure>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <hr class="vertical visible-lg">
                      <!--hr class="horizontal visible-xs"-->
                  </div>
                  <div class="col-md-5">
                      <div class="probootstrap-block-image-text">
                          <p class="tour-title text-right hidden-xs">@{{ tours[7].titulo }}</p>
                          <figure>
                              <a class="">
                                  <img ng-src="{{asset('/')}}img/tours/@{{ tours[7].id }}.jpg" alt="" class="img-responsive">
                              </a>
                              <a href="{{ url('excursion') }}/@{{ tours[7].id }}" class="book-now">
                                  <div class="text-center tour-list-text">
                                      <p>Book now</p>
                                  </div>
                              </a>
                          </figure>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--./Section Book Now -->
      
      <!-- Section Unforgettable Experiences / Footer -->
      <section class="probootstrap-section" style="background-image: url({{asset('around')}}/img/fondo4.png);background-position: center; background-repeat: no-repeat;background-size:101% 100%">
          <!-- Section Unforgettable Experiences -->
          <div class="container">
            <div class="row">
                <div class="col-md-12 probootstrap-relative">
                    <h3 class="mt0 mb0 text-center tour-title" style="color: #407B1E;">UNFORGETTABLE EXPERIENCES</h3>
                    <hr class="experiences">
                </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-4" ng-repeat="aux in tours | filter:buscador | orderBy: 'random' | limitTo: 6" ng-if="aux.mostrar==true">
              <div class="popular_content">
                <div class="popular_item">
                  <a href="{{ url('/') }}/excursion/@{{aux.id}}">
                    <h3 class="col-12 popular_item_title text-center tresEM">@{{aux.titulo}}</h3>
                  </a>
                  <div class="popular_animate">
                    <div class="c">
                      <div class="c1">
                        <div class="imagenExperiences" style="background-image: url('{{asset('/')}}img/tours/@{{ aux.id }}.jpg')"></div>
                      </div>
                      <div class="c2">
                        <div class="row">
                          <p class="col-md-12 dosmedioEM">@{{ aux.descripcion }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!--./Section Unforgettable Experiences -->
      </section>

      <section class="probootstrap-section" style="background-image: url({{asset('around')}}/img/fondo5.png);background-position: center; background-repeat: no-repeat;background-size:101% 100%">
        
          <!-- Section Footer -->
          <footer role="contentinfo" class="probootstrap-footer" style="margin-top: 10%;">
              <div class="container">
                  <!--div class="row">
                      <div class="col-md-6 pull-left" style="margin-top: 5%;">
                          <p class="call-us">¿HAVE ANY DOUBT?</p>
                          <p class="call-us">CALL US: 1(829) 821-5833</p>
                      </div>
                      <div class="col-md-6 pull-right" style="margin-top: 4%;">
                          <ul class="probootstrap-footer-social pull-right">
                              <h5 class="call-us text-white text-center" style="color: #fff">Follow us</h5>
                              <li><a href="https://www.facebook.com/dominicanaaround" class="redes"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="https://www.instagram.com/dominicanaaround" class="redes"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#" class="redes"><i class="fab fa-tripadvisor"></i></a></li>
                          </ul>
                      </div>
                  </div-->
                  <div class="row"><br><br>
                      <div class="col-md-4 col-xs-12">
                        <h1 class="text-white text-left formTitle text-uppercase mt2" style="font-family: 'Roboto', sans-serif !important;">About Us</h1>
                          <p class="about-footer text-justify">
                            Dominicana Around is a tour operator that is dedicated to the tourist operation throughout the eastern part of the Dominican Republic. we organize, promote and direct the sustainable development of tourism in our country, with continuous quality and reliability, giving our clients unforgettable memories.
                          </p>
                          <p class="about-footer text-justify">
                            We are consolidated the best option of tourism, being recognized as the faculty of excellence, international leader in management and service.
                          </p>
                      </div>
                      <div class="col-md-4 col-xs-12">
                        <h1 class="text-white text-left formTitle text-uppercase mt2" style="font-family: 'Roboto', sans-serif !important;">&nbsp;</h1>
                        <img src="{{asset('around')}}/img/logo_md2.png" alt="" class="img-responsive img-fluid" width="50%"><br>
                        <img src="{{asset('around')}}/img/tripadvisor.png" alt="" class="img-responsive img-fluid">
                      </div>
                      <div class="col-md-4 col-xs-12">
                        <h1 class="text-white text-left formTitle text-uppercase mt2" style="font-family: 'Roboto', sans-serif !important;">Newsletter</h1>
                        <form class="row tourParty-fondo" style="font-size: 3em; font-family: 'Roboto', sans-serif !important;" id="formNewsletter">
                        <h1 class="text-center text-uppercase" style="font-family: 'Roboto', sans-serif !important;font-size: 1.4em;font-weight: bold;">Join the newsletter and<br>get 20% discount</h1>
                          <div class="row panel-body" style="padding: 0;">
                            <div class='col-md-6 col-xs-12 form-group'>
                              <input autocomplete='off' class='form-control formDate' type='text' id='name' placeholder='Your Name' required>
                            </div>
                            <div class='col-md-6 col-xs-12 form-group'>
                              <input autocomplete='off' class='form-control formDate' type='text' id='phone' placeholder='Your Phone' onkeypress="return solonumeros(event)" required>
                            </div>
                            <div class='col-xs-12 form-group'>
                              <input autocomplete='off' class='form-control formDate' type='email' id='email' placeholder='Your Email' required>
                            </div>
                            <div class='col-xs-12 form-group text-center mt1 mb0'>
                              <button type="submit" class="btn btn-default btnReturn text-uppercase" style="width:8em;">Send</button>
                            </div>
                          </div>
                        </form>
                        <br>
                        <p class="text-center about-footer">
                          <a class="text-center" href="mailto:info@domimicanaaround.com" style="color: #fff !important;">info@domimicanaaround.com</a><br>
                          <a class="text-center" href="tel:+18297965201" style="color: #fff !important;">+1 (829) 796-5201</a><br>
                          <a class="text-center" href="tel:+18298215833" style="color: #fff !important;">+1 (829) 821-5833</a>
                        </p>
                      </div>
                  </div>
                  <div class="col-xs-12 text-center tresEM powered">
                    <h5 class="call-us text-white text-center" style="color: #fff; font-size: 1em !important;">Developed by <a href="http://domtecno.com" class="linkDevelop">Domtecno.com</a></h5>
                    <h5 class="call-us text-white text-center" style="color: #fff; font-size: 1em !important;">&copy Copyright Dominicana Around 2019</h5>
                </div>
              </div>
          </footer>
          <!--./Section Footer -->
      </section>
      <!--./Section Unforgettable Experiences / Footer -->

      <div class="modal fade" id="modalPromocion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h1 class="modal-title text-center azul" id="myModalLabel">Dominicana Around</h1>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12 text-center">
                      <img style="max-height:250px;max-width: 100%" src="{{ asset('/') }}img/code.jpeg" alt="">
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="col-xs-12 text-center">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

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
      
      <script src="{{ asset('around') }}/js/main.js"></script>
      <script src="{{ asset('around') }}/js/custom.js"></script>

      <script src="{{ asset("js/newsletter.js") }}"></script>
      
      <script>
          window.opcion="index";
          window.url = '{{ url("/") }}';
          window._token = '{{ csrf_token() }}';
          function myFunction(x) {
              if (x.matches) { // If media query matches
                  var video = document.getElementById("myVideo");
                  video.play();
                  video.muted = true;
                  document.getElementById("myVideo").play(); 
              } else {
                  document.getElementById("myVideo").pause(); 
              }
          }
          //var x = window.matchMedia("(min-width: 768px)");
          //myFunction(x); // Call listener function at run time
          //x.addListener(myFunction); // Attach listener function on state changes  
      </script>
      <?php if (isset($_GET['tour'])): ?>
          <script>
              window.pos = {{ $_GET['tour'] }};
          </script>
      <?php endif ?>
      <script src="{{ asset("/") }}js/sitio.js?v=30"></script>
      <script src="{{ asset("/") }}js/main.js?v=30"></script>
      <?php if (isset($_GET['opcion'])): ?>
          <?php if ($_GET['opcion']==1): ?>
              <script>$(function(){$('.transfer').trigger('click');});</script>
          <?php else: ?>
              <script>$(function(){$('.tour').trigger('click');});</script>
          <?php endif ?>
      <?php endif ?>
      @if(session('status') )
      <div class="modal fade" id="completado">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="row">
                          <h2 class="col-xs-12 text-center" style="color:green;"><i class="fa fa-check fa-2x"></i></h2>
                          <h2 class="col-xs-12 text-center">Thanks for reservation</h2>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div>
      <script>
          $('#completado').modal('show');
      </script>
      @endif
  </body>
</html>