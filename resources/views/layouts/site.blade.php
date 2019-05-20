<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title','Dominicana Around')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Oasis">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('around/img/logo_md2.png') }}" rel="shortcut icon" type="image/png">

  <!--link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900'-->
  
  <link href="{{ asset('/') }}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.css" rel="stylesheet" />


  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css'>
  <!--link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css'-->
  
  <link rel='stylesheet' href='{{asset('around')}}/css/owl.theme.default.min.css'>
  <link rel="stylesheet" href="{{asset('around')}}/css/styles-merged.css">
  <link rel="stylesheet" href="{{asset('around')}}/css/style.min.css">
  <link rel="stylesheet" href="{{asset('around')}}/css/custom.css">

  <style>
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
    }

    @media screen and (max-width: 480px){
      p.tour-title {
        top: 50px;
        left: 0;
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
      left: 210px;
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
  </style>
  @yield('css')
</head>

<body ng-app="app" ng-controller="ctrl">  
    <!-- Header -->
    <header role="banner" class="probootstrap-header header-top">
        <div class="row" style="background: #e3d8c4;">
            <a href="#" class="probootstrap-logo visible-xs"><img src="{{ asset('around') }}/img/logo_movil.png" class="img-fluid" style="width: 20%; padding: 5px;"></a>
            <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs my-navbar">
                <div>
                    <a href="#" class="hidden-xs probootstrap-logo-center"><img src="{{asset('around')}}/img/logo_md2.png" class="img-logo-header"></a>
                </div>
                <ul class="probootstrap-main-nav color-menu">
                    <li class="text-justify"><a href="{{url('/')}}">Home</a></li>
                        <li class="text-justify"><a href="{{url('excursions')}}">Excursion</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transfer</a>
                            <ul class="dropdown-menu" style="width: 840px; left: -300px; margin-top: 10px; background: rgba(255,255,255,0.9);box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.5);">
                                <div class="tab-content formTransfer">
                                    <div class="tab-pane fade in active" id="transfer">
                                        <section class="row">
                                            <form action="" class="col-xs-12" id="formTraslado" method="post" ng-submit="agregarTraslado($event)">
                                                <div class="row formTr">
                                                    <h2 class="col-xs-12 text-center text-uppercase mb-4 font-weight-bold" style="font-size: 2em !important;color: #407B1E;">Private Transfer</h2>
                                                    <div class="col-xs-12 col-sm-12"><hr class="detailHr" style="border-top: 3px solid #407B1E !important;"></div>
                                                    <div class="col-xs-6">
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
                                                    <div class="col-xs-6">
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
                                                    <div class="col-xs-6">
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
                                                    <div class="col-xs-6">
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
                                                        <h3 class="col-xs-12 text-center text-uppercase mb1">Type Vehicle</h3>

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
                                                                            <h3 class="text-center description-tour em15">VIP Chevrolet Suburban</h3>
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
                                                                            <h3 class="text-center description-tour em15">Hyundai Grand Starex</h3>
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
                                                                            <h3 class="text-center description-tour em15">Hyundai H1</h3>
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
                                                                            <h3 class="text-center description-tour em15">Haice</h3>
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
                                                                            <h3 class="text-center description-tour em15">Toyota Coaster</h3>
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
                                                                        <h3 class="text-center description-tour em15">Yutong I</h3>
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
                                                                        <h3 class="text-center description-tour em15">Yutong II</h3>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                                                        <div class="row">
                                                            <h3 class="col-xs-12 text-center text-uppercase mb1" ng-show="traslado.de.id==-1">Arrival</h3>
                                                            <h3 class="col-xs-12 text-center text-uppercase mb1" ng-show="traslado.de.id!=-1">Departure</h3>
                                                            <div class="col-xs-6 col-sm-3">
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
                                                            <div class="col-xs-6 col-sm-3">
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
                                                            <div class="col-xs-6 col-sm-3">
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
                                                            <div class="col-xs-6 col-sm-3">
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
                                                            <h3 class="col-xs-12 text-center text-uppercase mb1" ng-show="traslado.de.id==-1">Departure</h3>
                                                            <h3 class="col-xs-12 text-center text-uppercase mb1" ng-show="traslado.de.id!=-1">Arrival</h3>
                                                            <div class="col-xs-6 col-sm-3">
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
                                                            <div class="col-xs-6 col-sm-3">
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
                                                            <div class="col-xs-6 col-sm-3">
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
                                                            <div class="col-xs-6 col-sm-3">
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
                                                                <h3 class="col-xs-12 text-center text-uppercase mb1">Extras</h3>
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
                                                    <!-- <div class="col-xs-12 text-center mt2" style="margin-bottom: 0;">
                                                        <a  href="{{ url("/?opcion=2") }}"
                                                            target="_blank"
                                                            data-toggle="tooltip"
                                                            title="Press click book excursion"
                                                            data-placement="bottom">Book your excursion now</a>
                                                    </div> -->
                                                    <div class="col-xs-12">
                                                        <h4 class="text-center" style="color: #000;font-weight: bold;font-size: 2em !important;">
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
                                    <div class="tab-pane fade" id="tours">
                                        <section class="row principal">
                                            <form action="" class="col-xs-12" id="formTour" method="post" ng-submit="agregarTour($event)">
                                                <div class="row formTr">
                                                    <h2 class="col-xs-12 text-center text-uppercase mb-4 font-weight-bold" style="font-size: 2em !important;color: #407B1E;">Reservation Tour</h2>
                                                    <div class="col-xs-12 col-sm-12"><hr class="detailHr" style="border-top: 3px solid #407B1E !important;"></div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">*Tour</label>
                                                            <select
                                                                class="form-control"
                                                                id="tourModel"
                                                                ng-model="tour"
                                                                ng-change="cambiarTour();calcularPrecioTour()"
                                                                ng-options="aux.titulo for aux in tours"
                                                                required>
                                                                <option value>Choose one</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Date
                                                            </label>
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="dateTour"
                                                                name="fecha"
                                                                placeholder="Select Date"
                                                                ng-model="tour.fecha"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6" ng-show="tour.modalidades.length>1">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Tour Type
                                                            </label>
                                                            <select
                                                                class="form-control"
                                                                id="modalidad"
                                                                name="modalidad"
                                                                ng-model="tour.modalidad"
                                                                ng-change="calcularPrecioTour()"
                                                                ng-options="aux.descripcion for aux in tour.modalidades"
                                                                ng-required="tour.modalidades.length>1">
                                                                <option value="">Choose one</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6" ng-show="tour.horarios.length>1">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Schedule
                                                            </label>
                                                            <select
                                                                class="form-control"
                                                                name="horario"
                                                                ng-model="tour.horario"
                                                                ng-required="tour.horarios.length>1">
                                                                <option value="">Choose one</option>
                                                                <option ng-repeat="aux in tour.horarios" value="@{{ aux }}">@{{ aux }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Adults
                                                            </label>
                                                            <select
                                                                class="form-control"
                                                                name="adultos"
                                                                ng-model="tour.adultos"
                                                                ng-change="calcularPrecioTour()"
                                                                required>
                                                                <option value="">
                                                                    Choose one
                                                                </option>
                                                                <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6" ng-show="tour.modalidades[pos].nino != 0">
                                                        <div class="form-group">
                                                            <label for="">
                                                                Children (0-10)
                                                            </label>
                                                            <select
                                                                class="form-control"
                                                                name="ninos"
                                                                ng-model="tour.ninos"
                                                                ng-change="calcularPrecioTour()">
                                                                <option value="">
                                                                    Choose one
                                                                </option>
                                                                <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-xs-12 col-sm-6">
                                                                      <div class="form-group">
                                                                          <label for="">
                                                                              *Hotel Pickup
                                                                          </label>
                                                                          <input
                                                                              ng-model="tour.hotel"
                                                                              class="form-control"
                                                                              name="hotel"
                                                                              type="text"
                                                                              list="listHoteles"
                                                                              placeholder="Enter Hotel"
                                                                              required>
                                                                          @include("base.hoteles")
                                                                      </div>
                                                                  </div>     -->

                                                    <div class="col-xs-12">
                                                        <h2 class="text-center" style="color: #000;font-weight: bold;font-size: 2em !important;">
                                                            @{{tour.precio | currency:"$ "}}
                                                        </h2>
                                                    </div>
                                                    <div class="col-xs-12 text-center">
                                                        <button class="btn btnTransfer text-uppercase font-weight-bold" ng-click="opcion='agregar'" name="tour" type="submit" value="tour">Add to cart</button>
                                                        <button class="btn btnTransfer text-uppercase font-weight-bold" ng-click="opcion='reservar'" name="tour" type="submit" value="tour">Checkout now</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--
                                            <div class="col-xs-12 col-sm-4 hidden-xs derecha">
                                                <div class="row whyChoose">
                                                    <h2 class="col-xs-12">WHY CHOOSE US?</h2>
                                                    <div class="col-xs-12 itemWhy">
                                                        <div class="icon"><i aria-hidden="true" class="fa fa-globe"></i></div>
                                                        <h4>Diverse Destinations</h4>
                                                    </div>
                                                    <div class="col-xs-12 itemWhy">
                                                        <div class="icon"><i aria-hidden="true" class="fa fa-money"></i></div>
                                                        <h4>Value Money</h4>
                                                    </div>
                                                    <div class="col-xs-12 itemWhy">
                                                        <div class="icon"><i aria-hidden="true" class="fa fa-camera"></i></div>
                                                        <h4>Beautiful Places</h4>
                                                    </div>
                                                    <div class="col-xs-12 itemWhy">
                                                        <div class="icon"><i aria-hidden="true" class="fa fa-calculator"></i></div>
                                                        <h4>Fast Booking</h4>
                                                    </div>
                                                    <div class="col-xs-12 itemWhy">
                                                        <div class="icon"><i aria-hidden="true" class="fa fa-comments"></i></div>
                                                        <h4>Support Team</h4>
                                                    </div>
                                                    <div class="col-xs-12 itemWhy">
                                                        <div class="icon"><i aria-hidden="true" class="fa fa-heart"></i></div>
                                                        <h4>Passionate Travel</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            -->
                                        </section>
                                    </div>

                                    <div id="terminosModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog" style="width: 80%">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title text-center formTitle">TERMS AND CONDITIONS</h3>
                                                </div>
                                                <div class="modal-body tresEM">
                                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit sed orci nec vestibulum. Maecenas condimentum finibus interdum. Donec viverra gravida ipsum maximus hendrerit. Praesent et rhoncus mi. Mauris sed blandit mauris, ac ultrices purus. Morbi justo leo, fringilla id congue ac, vehicula et arcu. Morbi sit amet finibus arcu. Donec sodales feugiat nulla ut suscipit. Sed tincidunt felis quam, vel imperdiet ligula molestie in. Ut mattis eu odio ut condimentum. Etiam ac fermentum justo, eget porttitor metus. Aenean quis risus sed metus blandit convallis. Suspendisse potenti. Nunc tempus enim iaculis quam porttitor vestibulum.</p>
                                                    <p class="text-justify">Phasellus facilisis justo commodo dui porttitor dignissim. In hac habitasse platea dictumst. Curabitur mattis neque nec nibh pulvinar, vel accumsan lectus maximus. In in sapien varius, ultricies sapien aliquam, fringilla tortor. Ut convallis massa eu erat commodo efficitur. Pellentesque tincidunt interdum auctor. Duis aliquam lorem est, eget vehicula enim tempus id. Nunc eu ipsum eget risus tristique mattis. Cras volutpat est sit amet ipsum vulputate, eget consequat lorem maximus. Proin ultricies ornare convallis. Suspendisse ac mauris quam. Curabitur tempor libero et eleifend hendrerit. Donec ullamcorper elit vitae augue vulputate, sit amet blandit dolor viverra. Nam cursus ipsum quis dictum scelerisque.</p>
                                                    <ul>
                                                        <li class="text-justify">Sed vitae nunc id velit pretium tincidunt.</li>
                                                        <li class="text-justify">Nunc sodales velit eu justo pretium ullamcorper a non erat.</li>
                                                        <li class="text-justify">Curabitur gravida nunc at elit euismod gravida sed sit amet mi.</li>
                                                        <li class="text-justify">Donec pellentesque risus rhoncus turpis dapibus, sit amet congue nisi scelerisque.</li>
                                                        <li class="text-justify">Vivamus varius est vitae sapien blandit, ut varius turpis pretium.</li>
                                                    </ul>
                                                    <p class="text-justify">Phasellus eget sapien finibus, suscipit lectus facilisis, tincidunt nisl. Duis semper mollis urna ac tristique. Phasellus finibus lacinia erat, ut hendrerit purus viverra sit amet. Nam ut nisl tristique, tristique urna eu, tempor lorem. Phasellus eu felis posuere, fermentum libero eget, tincidunt est. Curabitur ac quam quis enim congue tristique in nec justo. Morbi eu justo feugiat, pulvinar nunc sit amet, gravida felis. Morbi maximus mauris arcu, id luctus velit dictum semper. Aliquam placerat tellus dui, at tempor diam facilisis eget. Praesent lobortis mauris ac turpis aliquet faucibus. Suspendisse auctor cursus purus, vitae bibendum dolor dapibus eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum id dictum sapien. Vestibulum mattis commodo turpis, non suscipit diam suscipit sit amet. Nulla molestie dolor ac nisi finibus ultricies.</p>
                                                    <p class="text-justify">Fusce eu condimentum massa. Quisque dictum, felis at dapibus vehicula, neque lectus viverra odio, eu aliquam leo turpis ac ligula. Nunc vestibulum dui eu purus ornare, quis vestibulum lacus dignissim. Nunc sed lectus metus. Fusce gravida dui in ultricies imperdiet. Pellentesque pulvinar porta quam quis auctor. Integer et quam diam. Donec consequat quis turpis a varius. Sed a odio ac felis porta efficitur. Donec eget tellus fermentum, fringilla velit ut, consequat tortor. Duis ultrices convallis bibendum. Proin ac leo accumsan, fringilla mauris at, rutrum ipsum. In interdum mi vel augue feugiat, vitae fringilla lectus vehicula. Aliquam rutrum sem id posuere commodo. Fusce sit amet tempor mi. Ut tincidunt aliquet lectus, ac consectetur diam feugiat quis.</p>
                                                    <p class="text-justify">Duis et augue a odio mollis porttitor in non felis. Curabitur condimentum accumsan nibh, sed interdum risus tincidunt in. Curabitur vestibulum neque eros, tincidunt fringilla justo malesuada sit amet. Suspendisse vitae luctus ipsum. Curabitur consequat aliquam bibendum. Maecenas sodales lacus nec quam cursus, vel aliquet tortor vulputate. Cras mollis velit feugiat accumsan congue. Maecenas fermentum neque nec diam mattis, quis pellentesque odio egestas. Morbi cursus ante vel ligula maximus, a porttitor odio tincidunt.</p>
                                                    <ul>
                                                        <li class="text-justify">Sed vitae nunc id velit pretium tincidunt.</li>
                                                        <li class="text-justify">Nunc sodales velit eu justo pretium ullamcorper a non erat.</li>
                                                        <li class="text-justify">Curabitur gravida nunc at elit euismod gravida sed sit amet mi.</li>
                                                        <li class="text-justify">Donec pellentesque risus rhoncus turpis dapibus, sit amet congue nisi scelerisque.</li>
                                                        <li class="text-justify">Vivamus varius est vitae sapien blandit, ut varius turpis pretium.</li>
                                                    </ul>

                                                    <!--p class="text-justify">The information data and material contained in this website has been prepared solely for the purpose of providing information about Renny Travel DMC, its subsidiaries and partners and the services that they offer. <br><br>
                                                    Your access to the website is subject to the following terms and conditions. By using the website you agree to be bound by the Terms and Conditions and we therefore encourage you to click through to read the Terms and Conditions in full. If you do not agree to these Terms and Conditions please do not use the website. Please also see our Privacy page, which explains how we treat your information.
                                                    </p>
                                                    
                                                    <div>
                                                        <h4>1. YOUR USE OF THE WEBSITE</h4>
                                                        <ul>
                                                            <li class="text-justify">1.1 You agreex to abide by all applicable laws, regulations and codes of conduct when using the website and to be solely responsible for all things arising from your use of the website;</li>
                                                            <li class="text-justify">1.2 not to use the website in any way which might infringe any rights of any third party or give rise to a legal claim against Renny Travel DMC by any third party;</li>
                                                            <li class="text-justify">1.3 not to damage, interfere with or disrupt access to the website or do anything that may interrupt or impair its functionality;</li>
                                                            <li class="text-justify">1.4 not to obtain or attempt to obtain unauthorized access, through whatever means, to the website or other services or computer systems or areas of our, or any of our partners’,networks which are identified as restricted;</li>
                                                            <li class="text-justify">1.5 not to collect or store personal data about other users for commercial purposes;</li>
                                                            <li class="text-justify">1.6 to respect the privacy of your fellow Internet users;</li>
                                                            <li class="text-justify">1.7 to provide true, accurate, complete and current information to us and notify us immediately of any change.</li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>2. CONTENT</h4>
                                                        <ul>
                                                            <li class="text-justify">2.1 The material and content provided to you on the website is solely for your personal non-commercial use and you agree not for yourself or through any third party to distribute or commercially exploit all or any part of the Content.</li>

                                                            <li class="text-justify">2.2 All Content (including, but not limited to articles, features, photographs, images, brands, logos, illustrations, audio clips and video clips, as well as all products, software, technology or processes described in this website are protected by copyright, trade marks, service marks and/or other intellectual property rights and laws and all Rights in relation to the website are and shall remain owned or controlled by Renny Travel DMC, or as appropriate, the third party Rights owner. You shall abide by all additional copyright notices, information, or restrictions contained in any Content accessed through this website.</li>

                                                            <li class="text-justify">2.3 Nothing contained on the website should be construed as granting, by implication or otherwise, any license or right to use, deal with or copy in any way in party or in whole any Rights without our written permission or, as appropriate, the permission of the third party Rights owner. Your misuse of the Rights, except as expressly provided in these Terms and Conditions, is strictly prohibited.</li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>3. ACCESSES AND AVAILABILITY OF SERVICE AND LINKS</h4>
                                                        <p class="text-justify">This website from time to time contains links to other related World Wide Web Internet sites, resources and sponsors of this website. Since Renny Travel DMC does not approve, check, edit, vet or endorse such sites, you agree that Renny Travel DMC is not responsible or liable in any way for the content, advertising or products available from such sites or any dealings that you may have, or the consequences of such dealings, with the operators of such sites. You agree that any dealings you have with such third party site operators shall be on the terms and conditions (if any) of the third party site operator and should direct any concerns regarding any external link to the site administrator or Webmaster of such site. Renny Travel DMC makes no representations nor does it take any responsibility in relation to the content of any sites accessed through these links.</p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>4. CHANGES TO TERMS AND CONDITIONS</h4>
                                                        <p class="text-justify">Renny Travel DMC may from time to time change, alter, adapt, add or remove portions of these Terms and Conditions and, if it does so, will post any such changes on this website. Your continued use of the website after such changes constitutes your acceptance of those changes.</p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>5. CHANGES TO WEBSITE</h4>
                                                        <p class="text-justify">Renny Travel DMC may also change, suspend or discontinue any aspect of the website, including the availability of any features, information, database or content or restrict your access to parts or all of the website at its discretion without notice or liability.</p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>6. NO WARRANTIES</h4>
                                                        <ul>
                                                            <li class="text-justify">6.1 The website is provided "as is" without any representations or warranties (either express or implied), including but not limited to any implied warranties or implied terms of reliability, quality, functionality, absence of contaminants (including viruses, worms, trojan horses or similar), availability, satisfactory quality, fitness for a particular purpose or non-infringement. All such implied terms and warranties are hereby excluded. Please note that some jurisdictions may not allow the exclusion of implied warranties, so some of the above exclusions may not apply to you. Check your local laws for any restrictions of limitations regarding the exclusion of implied warranties.</li>

                                                            <li class="text-justify">6.2 While Renny Travel DMC uses reasonable efforts to include accurate and up to date information on the website, it makes no warranties or representations as to its accuracy or completeness. Renny Travel DMC is not responsible for any errors or omissions or for the results obtained from the use of such information. The information does not constitute any form of advice, recommendation or arrangement by Renny Travel DMC or its affiliates or any other party involved in the website and is not intended to be relied upon by users in making (or refraining from making) any decisions based on such information. You must make your own decisions on whether or not to rely on any information posted on the website.</li>

                                                            <li class="text-justify">6.3 While Renny Travel DMC takes all reasonable steps to ensure a fast and reliable service it will not be held responsible for the security of the website or for any disruption of the website however caused, loss of or corruption of any material in transit, or loss of or corruption of material or data when downloaded onto any computer system. You will remain responsible and liable for material you upload on to or access from the website and you will indemnify Renny Travel DMC in the manner set out in paragraph 9.2 below in the Terms and Conditions in relation to your accessing or uploading.</li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>7. LIABILITY FOR LOSSES/INDEMNITY</h4>
                                                        <ul>
                                                            <li class="text-justify">7.1 By accessing this website you agree that Renny Travel DMC will not be held liable to you or any third party for any direct, indirect, special, consequential or any other loss or damage arising from the use of or inability to use the website or from your access of other material on the internet via web links from this website.</li>

                                                            <li class="text-justify">7.2 You agree to indemnify, keep indemnified, defend and hold harmless Renny Travel DMC and its parent companies, subsidiaries, affiliates and their respective officers, directors, employees, owners, agents, information providers and licensors from and against any and all claims, damages, liability, losses, costs and expenses (including legal fees) (whether or not foreseeable or avoidable) incurred or suffered by any Indemnified Party and any claims or legal proceedings which are brought or threatened arising from your use of, connection with or conduct on the website or any breach by you of these Terms and Conditions. Renny Travel DMC reserves the right, at its own expense, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you, and in such case, you agree to co-operate with out defense of such claim.</li>                           
                                                        </ul>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>8. EXCLUSIONS</h4>
                                                        <p class="text-justify">The exclusions and limitations contained in these Terms and Conditions apply only to the extent permitted by law.</p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>9. LEGAL JURISDICTIONS AND APPLICABLE LAW</h4>
                                                        <p class="text-justify">Renny’s Management, S.R.L is a Dominican company and Renny Travel DMC is a Dominican Republican company. The terms and conditions of the use of this website shall be governed in accordance with the laws of the Dominican Republic. The user is deemed to hereby submit and agree to the exclusive jurisdiction of the courts of the Dominican Republic in respect of any disputes arising out of or in connection with this Web Site, so the user expressly waives any jurisdiction that may correspond by reason of his domicile. These terms and conditions or any further terms and conditions referenced on this Web Site or any matter related to or in connection herewith.</p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>10. LIABILITY</h4>
                                                        <ul>
                                                            <li class="text-justify">10.1 Online Booking of Independent Third Party Suppliers: Booking services provided for excursions on this site involve services offered by independent third party suppliers. RENNY TRAVEL is not liable nor does it accept liability for actions or omissions of the independent contractors supplying the excursions for which booking services are provided; and the purchaser of the excursions here provided shall be deemed to have waived any claims against RENNY TRAVEL in connection with the excursions purchased.</li>

                                                            <li class="text-justify">10.2 Products, services or excursions on this site for which booking services may be requested involve activities that may involve risk. The consumer of this service assumes the risk inherent in all such activities. By accepting these services, the purchaser thereof agrees that RENNY TRAVEL is not responsible for losses or damages including bodily injury, property damage, or economic loss incurred while participating in the activity for which booking services are provided.</li>                          
                                                        </ul>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>11. PROTECTION PLUS</h4>
                                                        <p class="text-justify">Protection Plus is an insurance supplement to your personal travel insurance. Protection Plus provides basic personal coverage in case of an accident which may occur during an excursion booked through Renny Travel. The policy includes limited financial reimbursement for ambulance, medical coverage, accidental death and repatriation. Protection Plus is contacted through established insurance companies in destination. The coverage includes: 
                                                        <h5>Dominican Republic: Seguros Banreservas</h5>
                                                        <ul>
                                                            <li class="text-justify">Accident Medical Expense - $15,000 USD</li>
                                                            <li class="text-justify">Accidental death & dismemberment –$15,000 USD</li>
                                                            <li class="text-justify">Ambulance & medical transfers - $50,000 USD</li>
                                                        </ul>
                                                        </p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>12. CONDITIONS OF CONTRACT OF ONLINE BOOKINGS</h4>
                                                        <p class="text-justify">The service supplier reserves the right to cancel, shorten or alter the excursion due to circumstances outside of their control. In the event of such an occurrence, a full or partial refund may be given, however, the consumer hereby waives any claim against Renny Travel DMC, or the service supplier for any consequential damages arising as a result thereof.</p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>13. REFUNDS, CANCELLATIONS AND CHANGES</h4>
                                                        <ul>
                                                            <li class="text-justify">100% of purchase price when cancellation is made more than 48 hours in advance.</li>
                                                            <li class="text-justify">50% fee of purchase price when cancellation is made between 24 and 48 hours in advance.</li>
                                                            <li class="text-justify">All deposits are non reimbursable.</li> 
                                                            <li class="text-justify">All cancellations made less than 24 hours prior to the start time of the service will be charged in full unless otherwise supported by a medical note from a qualified doctor stating the valid medical conditions for which the client cannot receive the reserved service(s).</li>
                                                            <li class="text-justify">
                                                                All changes to the day/time of the same service shall be subject to the following conditions:
                                                                <ul>
                                                                    <li class="text-justify">No charges shall apply to change requests made more than 24 hours in advance.</li>
                                                                    <li class="text-justify">Some charges may apply when the request is made less than 24 hours in advance.</li>
                                                                </ul>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                                            
                                                    <div>
                                                        <h4>14. TERMINATIONS AND SUSPENSION</h4>
                                                        <p class="text-justify">Renny Travel DMC (and any persons authorized by it), may at its sole discretion immediately suspend or terminate your right to use the website without any warning if it considers that you have contravened any of these Terms and Conditions. This is without prejudice to any other rights or remedies that Renny Travel DMC may have.</p>
                                                    </div>
                                                    
                                                    <div>
                                                        <h4>15. ASSIGNMENT</h4>
                                                        <p class="text-justify">Renny Travel DMC may assign its rights and obligations under these Terms and Conditions and upon any such assignment it shall be relieved of any further obligation hereunder.</p>
                                                    </div-->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default btnReturn" data-dismiss="modal" style="width:8em">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <!--li class="text-justify"><a href="{{url('rent-car')}}">Rent-Car</a></li-->
                        <li class="text-justify"><a href="{{url('contact')}}">Contact</a></li>
                        <li class="text-justify"><a class="{{ Request::is('shop')?'tituloVerde':'' }}" href="{{ url('/shop') }}"><i style="padding-right:.2em" class="fa fa-shopping-cart" aria-hidden="true"></i><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
                <div class="extra-text visible-xs">
                    <a href="#" class="probootstrap-burger-menu header-top-mobile"><i>Menu</i></a>
                    <h5>Follow Us</h5>
                    <ul class="social-buttons">
                        <li><a href="https://www.facebook.com/dominicanaaround" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/dominicanaaround" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="probootstrap-slider flexslider">
            <ul class="slides">
                <li style="background-image: url({{asset('around')}}/img/fondo1.png);" class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="probootstrap-slider-text text-center" style="display: flex !important;">
                                    <div class="probootstrap-animate probootstrap-sub-wrap"><strong>¡A vacation style like no other!</strong><br>¿How about spending the day discovering our beautiful Dominican Republic?</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    @yield('content')

    <!-- Modal Reservar-->
    <form action="" method="post" class="modal fade" tabindex="-1" role="dialog" id="modalReservar"
      ng-submit="agregarExcursion($event)">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title col-12 text-center">@{{ excursion.titulo }}</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="form-group col-12" ng-show="excursion.modalidades">
                <label for="" ng-show="excursion.id!=4">* Modality</label>
                <label for="" ng-show="excursion.id==4">* Tours Options</label>
                <select ng-model="excursion.modalidad" ng-change="calcularPrecioExcursion();cambiarModalidad()"
                  name="ninos" class="form-control" ng-options="aux.titulo for aux in excursion.modalidades"
                  ng-required="excursion.modalidad">
                  <option value>Choose one</option>
                </select>
                <small class="mt-2 form-text text-muted" style="font-size:90%">@{{excursion.modalidad.nota}}</small>
              </div>
              <div class="form-group col-sm-4">
                <label>* Date</label>
                <input ng-model="excursion.fecha" name="fecha" type="text" class="form-control fecha"
                  placeholder="Enter Date" required>
              </div>
              <div class="form-group col-sm-4">
                <label for="">* Adults</label>
                <select ng-model="excursion.adultos" ng-change="calcularPrecioExcursion()" name="adultos"
                  class="form-control" required>
                  <option value>Choose one</option>
                  <option ng-repeat="aux in vector(30)" value="@{{aux}}">@{{aux}}</option>
                </select>
              </div>
              <div class="form-group col-sm-4">
                <label for="">* Children (3-12)</label>
                <select ng-model="excursion.ninos" ng-change="calcularPrecioExcursion()" name="ninos"
                  class="form-control" ng-disabled="excursion.precioNino==0 || excursion.modalidad.precioNino==0">
                  <option value>Choose one</option>
                  <option ng-repeat="aux in vector(30)" value="@{{aux}}">@{{aux}}</option>
                </select>
              </div>
              <div class="form-group col-sm-4" ng-show="excursion.turnos">
                <label for="">* Turn</label>
                <select ng-model="excursion.turno" ng-options="aux.descripcion for aux in excursion.turnos" name="turno"
                  class="form-control" ng-required="excursion.turno && excursion.hotel">
                  <option value>Choose one</option>
                </select>
              </div>
              <div class="form-group col-sm-8" ng-show="excursion.turnos">
                <label for="">* Hotel</label>
                <select ng-model="excursion.hotel" ng-options="aux.descripcion for aux in excursion.horarios"
                  name="hotel" class="form-control" ng-required="excursion.turno && excursion.hotel">
                  <option value>Choose one</option>
                </select>
              </div>
              <div class="form-group col-12 mt-3">
                <div class="alert alert-success" ng-show="excursion.turno && excursion.hotel">
                  <strong>Pick up Time:</strong> @{{excursion.hotel.ubicacion}}
                  @{{excursion.hotel.turnos[excursion.turno.id]}}
                </div>
              </div>
              <div class="form-group col-12 mt-3">
                <div class="alert alert-danger" ng-show="excursion.modalidad.error">
                  @{{excursion.modalidad.error}}
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <h3 class="m-auto">@{{ excursion.precioTotal | currency:'$ ' }}</h3>
            <button ng-click="opcion='agregar';" type="submit" class="btn btn-primary">Add to cart</button>
            <button ng-click="opcion='pagar';" type="submit" class="btn payment">Pay Now</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Modal Detalles-->
    <form action="" method="post" class="modal fade" tabindex="-1" role="dialog" id="modalDetalles">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title col-12 text-center">@{{ excursion.titulo }}</h3>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12 p-0">
                <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li ng-repeat="aux in vector(excursion.imagenes-1)" data-target="#demo" data-slide-to="@{{aux}}">
                    </li>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="imagenSlider"
                        style="background-image: url({{asset('template')}}/images/excursiones/@{{excursion.id}}/1.jpg)">
                      </div>
                    </div>
                    <div class="carousel-item" ng-repeat="aux in vector(excursion.imagenes-1)">
                      <div class="imagenSlider"
                        style="background-image: url({{asset('template')}}/images/excursiones/@{{excursion.id}}/@{{aux+1}}.jpg)">
                      </div>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
              </div>
              <div class="col-12 mt-3" style="padding:0 4em">
                <div class="row">
                  <p class="col-12 mt-3 text-justify" ng-bind-html="excursion.descripcion"></p>
                  <h3 class="col-12 text-center text-primary">What to Expect</h3>
                  <p class="col-12 text-justify" ng-bind-html="excursion.expect"></p>

                  <h3 class="col-12 mt-4 text-center text-primary">Highlights</h3>
                  <ul class="col-12 lista row">
                    <li class="col-12 col-sm-6" ng-repeat="(index,aux) in excursion.highlights">@{{aux}}</li>
                  </ul>
                  <div class="col-12 mt-4 mb-4">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="col-6 text-center nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                          href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Include</a>
                        <a class="col-6 text-center nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                          href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Not
                          Include</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <ul class="col-12 lista">
                          <li ng-repeat="(index,aux) in excursion.included">@{{aux}}</li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <ul class="col-12 lista">
                          <li ng-repeat="(index,aux) in excursion.notincluded">@{{aux}}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-4 mb-4">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="col-6 text-center nav-item nav-link active" id="nav-home-tab2" data-toggle="tab"
                          href="#nav-home2" role="tab" aria-controls="nav-home2" aria-selected="true">Good to Know</a>
                        <a class="col-6 text-center nav-item nav-link" id="nav-profile-tab2" data-toggle="tab"
                          href="#nav-profile2" role="tab" aria-controls="nav-profile2"
                          aria-selected="false">Important</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home2" role="tabpanel"
                        aria-labelledby="nav-home-tab2">
                        <ul class="col-12 lista">
                          <li ng-repeat="(index,aux) in excursion.goodtoknow">@{{aux}}</li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">
                        <ul class="col-12 lista">
                          <li ng-repeat="(index,aux) in excursion.important">@{{aux}}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="mr-auto btn btn-secondary" data-dismiss="modal">Close</button>
            <button ng-click="abrirReservar()" type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Modal Carrito -->
    <form action="{{ url('pay') }}" method="post" class="modal fade" tabindex="-1" role="dialog" id="modalCarrito">
      @csrf
      <div class="modal-dialog modal-lg" role="document" style="width:90%;max-width:90%;">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title col-12 text-primary text-center">BOOK NOW</h3>
          </div>
          <div class="modal-body">
            <div class="row">
              <h4 class="col-12 text-center mb-3"
                ng-show="carritoExcursiones.length==0 && carritoCars.length==0 && carritoNights.length==0 && carritoGastronomys.length==0 && carritoGolfs.length==0 && carritoBoats.length==0 && carritoTraslados.length==0 && eventsCart.length==0 && photoPacksCart.length==0 && carritoParks.length==0">
                Add items to cart
              </h4>
              <div class="col-12 mb-3" ng-show="carritoExcursiones.length>0">
                <h3 class="text-center">Excursions</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Excursion</th>
                      <th>Date</th>
                      <th>Adults</th>
                      <th>Children</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoExcursiones track by $index">
                      <td>@{{ aux.titulo }}</td>
                      <td>@{{ aux.fecha }}</td>
                      <td>@{{ aux.adultos }}</td>
                      <td>@{{ aux.ninos }}</td>
                      <td>@{{ aux.precioTotal | currency: "$ " }}</td>
                      <td class="text-center"><i ng-click="eliminarExcursion(index)" class="fa fa-trash eliminar"></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4">Sub-total</td>
                      <td>@{{totalExcursiones | currency: "$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="carritoCars.length>0">
                <h3 class="text-center">Rent a Car</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Car</th>
                      <th>Date</th>
                      <th>Days</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoCars track by $index">
                      <td>@{{ aux.titulo }}</td>
                      <td>@{{ aux.fecha }}</td>
                      <td>@{{ aux.adultos }}</td>
                      <td>@{{ aux.precioTotal | currency: "$ " }}</td>
                      <td class="text-center"><i ng-click="eliminarCar(index)" class="fa fa-trash eliminar"></i></td>
                    </tr>
                    <tr>
                      <td colspan="3">Sub-total</td>
                      <td>@{{totalCars | currency: "$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="carritoNights.length>0">
                <h3 class="text-center">Night-Life</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Night Life</th>
                      <th>Date</th>
                      <th>Adults</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoNights track by $index">
                      <td>@{{ aux.titulo }}</td>
                      <td>@{{ aux.fecha }}</td>
                      <td>@{{ aux.adultos }}</td>
                      <td>@{{ aux.precioTotal | currency: "$ " }}</td>
                      <td class="text-center"><i ng-click="eliminarNight(index)" class="fa fa-trash eliminar"></i></td>
                    </tr>
                    <tr>
                      <td colspan="3">Sub-total</td>
                      <td>@{{totalNights | currency: "$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="carritoGastronomys.length>0">
                <h3 class="text-center">Gastronomy</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Gastronomy</th>
                      <th>Date</th>
                      <th>Adults</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoGastronomys track by $index">
                      <td>@{{ aux.titulo }}</td>
                      <td>@{{ aux.fecha }}</td>
                      <td>@{{ aux.adultos }}</td>
                      <td>@{{ aux.precioTotal | currency: "$ " }}</td>
                      <td class="text-center"><i ng-click="eliminarGastronomy(index)" class="fa fa-trash eliminar"></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3">Sub-total</td>
                      <td>@{{totalGastro | currency: "$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="carritoGolfs.length>0">
                <h3 class="text-center">Golf Course</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Golf Course</th>
                      <th>Date</th>
                      <th>Adults</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoGolfs track by $index">
                      <td>@{{ aux.titulo }}</td>
                      <td>@{{ aux.fecha }}</td>
                      <td>@{{ aux.adultos }}</td>
                      <td>@{{ aux.precioTotal | currency: "$ " }}</td>
                      <td class="text-center"><i ng-click="eliminarGolf(index)" class="fa fa-trash eliminar"></i></td>
                    </tr>
                    <tr>
                      <td colspan="3">Sub-total</td>
                      <td>@{{totalGolfs | currency: "$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="carritoBoats.length>0">
                <h3 class="text-center">Boat</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Boat</th>
                      <th>Date</th>
                      <th>Days</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoBoats track by $index">
                      <td>@{{ aux.titulo }}</td>
                      <td>@{{ aux.fecha }}</td>
                      <td>@{{ aux.adultos }}</td>
                      <td>@{{ aux.precioTotal | currency: "$ " }}</td>
                      <td class="text-center"><i ng-click="eliminarBoat(index)" class="fa fa-trash eliminar"></i></td>
                    </tr>
                    <tr>
                      <td colspan="3">Sub-total</td>
                      <td>@{{totalBoats | currency: "$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="carritoTraslados.length>0">
                <h3 class="text-center col-12">Transfers</h3>
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>Airport</th>
                      <th>Hotel</th>
                      <th>Transfer Type</th>
                      <th>Arrival</th>
                      <th>Departure</th>
                      <th>Passengers</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoTraslados track by $index">
                      <td>@{{ aux.de }}</td>
                      <td>@{{ aux.para }}</td>
                      <td>@{{ aux.tipo }}</td>
                      <td>@{{ aux.llegada_fecha?aux.llegada_fecha:'---' }}</td>
                      <td>@{{ aux.salida_fecha?aux.salida_fecha:'---' }}</td>
                      <td>@{{ aux.pasajeros }}</td>
                      <td>@{{ aux.precioTotal | currency:"$ " }}</td>
                      <td><i ng-click="eliminarTraslado(index)" class="fa fa-trash eliminar"></i></td>
                    </tr>
                    <tr>
                      <td colspan="6">Sub-total</td>
                      <td>@{{totalTraslados | currency:"$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="carritoParks.length>0">
                <h3 class="text-center col-12">Parks</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Park</th>
                      <th>Date</th>
                      <th>Adults</th>
                      <th>Children</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in carritoParks track by $index">
                      <td>@{{ aux.titulo }}</td>
                      <td>@{{ aux.fecha }}</td>
                      <td>@{{ aux.adultos }}</td>
                      <td>@{{ aux.ninos }}</td>
                      <td>@{{ aux.precioTotal | currency: "$ " }}</td>
                      <td class="text-center"><i ng-click="eliminarPark(index)" class="fa fa-trash eliminar"></i></td>
                    </tr>
                    <tr>
                      <td colspan="4">Sub-total</td>
                      <td>@{{totalParks | currency: "$ "}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="eventsCart.length>0">
                <h3 class="text-center col-12">Events</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in eventsCart track by $index">
                      <td>@{{ aux.title }}</td>
                      <td>@{{ aux.date }}</td>
                      <td>@{{ aux.price }}</td>
                      <td class="text-center"><i ng-click="deleteEvent(index)" class="fa fa-trash eliminar"></i></td>
                    </tr>
                    <tr>
                      <td colspan="2">Sub-total</td>
                      <td>@{{eventsTotal}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 mb-3" ng-show="photoPacksCart.length>0">
                <h3 class="text-center col-12">Photography & Videography</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Date</th>
                      <th>Add-ons</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="(index,aux) in photoPacksCart track by $index">
                      <td>@{{ aux.title }}</td>
                      <td>@{{ aux.type }}</td>
                      <td>@{{ aux.date }}</td>
                      <td>
                        <span ng-show="aux.selectedAddons.length == 0">No Add-ons</span>
                        <ul ng-show="aux.selectedAddons.length > 0">
                          <li ng-repeat="addon in aux.selectedAddons">@{{addon.title}} -
                            @{{addon.price | currency:'$ '}}</li>
                        </ul>
                      </td>
                      <td>
                        <strong>Package Price: </strong> @{{ aux.price | currency:'$ ' }}<br>
                        <span ng-show="aux.selectedAddons.length > 0"><strong>Package + Add-ons: </strong> @{{ aux.priceTotal |
													currency:'$ ' }}<br></span>
                      </td>
                      <td class="text-center"><i ng-click="deletePhotoPack(index)" class="fa fa-trash eliminar"></i>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4">Sub-total</td>
                      <td>@{{photoPacksTotal | currency:'$ '}}</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12"
                ng-show="carritoExcursiones.length>0 || carritoCars.length>0 || carritoNights.length>0 || carritoGastronomys.length>0 || carritoGolfs.length>0 || carritoBoats.length>0 || carritoTraslados.length>0 || eventsCart.length>0 || photoPacksCart.length>0 || carritoParks.length>0">
                <div class="row">
                  <h3 class="col-12 text-center">Client Info</h3>
                  <div class="form-group col-6">
                    <label>* Name</label>
                    <input name="nombre" type="text" class="form-control" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group col-6">
                    <label>* Last Name</label>
                    <input name="apellido" type="text" class="form-control" placeholder="Enter Last Name" required>
                  </div>
                  <div class="form-group col-6">
                    <label>* Email</label>
                    <input name="correo" type="email" class="form-control" placeholder="Enter Email" required>
                  </div>
                  <div class="form-group col-6">
                    <label>* Phone Number</label>
                    <input name="telefono" type="text" class="form-control" placeholder="Enter Phone Number" required>
                  </div>
                  <div class="form-group col-12">
                    <label>Comments</label>
                    <textarea name="comentarios" rows="1" class="form-control"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="col">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <div class="col">
              <h3 class="text-center">Total: @{{ (totalExcursiones + totalTraslados + eventsTotal + photoPacksTotal +
								totalCars + totalNights + totalGastro + totalGolfs + totalBoats + totalParks) | currency:'$ ' }}</h3>
            </div>
            <div class="col text-right">
              <button
                ng-disabled="carritoExcursiones.length==0 && carritoCars.length==0 && carritoNights.length==0 && carritoGastronomys.length==0 && carritoGolfs.length==0 && carritoBoats.length==0 && carritoTraslados.length==0 && eventsCart.length==0 && photoPacksCart.length==0 && carritoParks.length==0"
                type="submit" class="btn btn-primary">Payment</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <script src="{{ asset("/") }}bower_components/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset("/") }}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset("/") }}bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="{{ asset("/") }}bower_components/sweetalert2/sweetalert2.min.js"></script>    
    <script src="{{ asset("/") }}js/angular.min.js"></script>
    <script src="{{ asset("/") }}js/angular-sanitize.min.js"></script>

    <script src="{{ asset('around') }}/js/scripts.min.js"></script>
    <script src="{{ asset('around') }}/js/main.min.js"></script>
    <script src="{{ asset('around') }}/js/custom.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js'></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script-->
    <script src="{{ asset("/") }}bower_components/select2/dist/js/select2.min.js"></script>
    @yield('script')
    @yield('js')
    <script src="{{ asset("/") }}js/sitio.js?v=33"></script>
    <script src="{{ asset("/") }}js/main.js?v=33"></script>

  <script>
    $(function () {
      $('.dropdown-toggle').dropdown();
      //$('.selectpicker').selectpicker();
      $('.selectpicker').select2({
        theme: 'bootstrap4',
        width: '100%',
        dropdownPosition: 'below'
      });

      $('.numeros').select2({
        theme: 'bootstrap4 numeros',
        width: '100%',
        dropdownPosition: 'below'
      });

      @yield('jquery')

      $('.fecha').datepicker({
        minDate: 0,
        dateFormat: /*'yy-mm-dd'*/ 'DD, MM d, yy'
      });
      $(".hasta").datepicker({
        minDate: 0,
        dateFormat: /*'yy-mm-dd'*/ 'DD, MM d, yy'
      });

      $(".desde").datepicker({
        dateFormat: /*'yy-mm-dd'*/ 'DD, MM d, yy',
        minDate: 0,
        onSelect: function (date) {
          var Desde = $(this).datepicker('getDate');
          var date = new Date(Date.parse(Desde));
          date.setDate(date.getDate() + 1);
          var newDate = date.toDateString();
          newDate = new Date(Date.parse(newDate));
          $('.hasta').datepicker("option", "minDate", newDate);
          $(this).trigger('change');
        }
      });
    });
  </script>
</body>

</html>