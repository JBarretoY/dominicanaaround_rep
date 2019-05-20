<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<body>
    <section class="row" style="background-image: url({{ asset("around") }}/img/fondo1.png);background-position: center; background-repeat: no-repeat;background-size:100% 100%">

        <div class="container">
            <center><a href="{{url('/')}}" class=""><img src="{{asset('around')}}/img/logo_md2.png" class="mb5 mt5" style="margin: 5em; width: 29%;"></a></center>
            <div class="row formShop mt1">
                <div class="col-xs-12 col-sm-12">
                    <h1 class="col-xs-12 text-center formTitle text-uppercase" style="margin: 0; padding-top: 10px;">Result</h1>
                    <div class="col-xs-12 col-sm-12">
                        <hr class="detailHr" style="border-top: 3px solid #407B1E !important;">
                    </div>
                    <div class="col-xs-10 col-xs-offset-1">
                        <div class="w3-container">
                            @if ($message = Session::get('success'))
                                <p class="formTitle text-center">{!! $message !!}</p>
                                <?php Session::forget('success');?>
                            @endif

                            @if ($message = Session::get('error'))
                                <p class="formTitle text-center">{!! $message !!}</p>
                                <?php Session::forget('error');?>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <footer role="contentinfo" class="probootstrap-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pull-left pull-left-footer" style="margin-top: 18px;">
                        <p class="call-us" style="color: #407B1E;">24 HOUR ASSISTANCE</p>
                        <p class="call-us" style="color: #407B1E;">CALL US: 1(829) 821-5833</p>
                    </div>
                    <div class="col-md-6 pull-right pull-right-footer" style="margin-top: 15px;">
                        <ul class="probootstrap-footer-social pull-right">
                            <h5 class="call-us text-white text-center" style="color: #407B1E !important;">Follow us</h5>
                            <li><a href="https://www.facebook.com/dominicanaaround" class=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/dominicanaaround" class=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class=""><i class="fab fa-tripadvisor"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center tresEM powered">
                        <h5 class="call-us text-white text-center" style="color: #407B1E !important; font-size: 1em !important;">Developed by <a href="http://domtecno.com" target="_blank" class="linkDevelop">Domtecno.com</a></h5>
                        <h5 class="call-us text-white text-center" style="color: #407B1E !important; font-size: 1em !important;">&copy Copyright Dominicana Around 2019</h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>




    
</body>
</html>