<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Match Maker Beta</title>

    @section('css_ref')
        <link rel="stylesheet" href="{{asset('internal_css/lib/fontawesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('internal_css/lib/weather-icons/css/weather-icons.css')}}">
        <link rel="stylesheet" href="{{asset('internal_css/lib/jquery-toggles/toggles-full.css')}}">
        <link rel="stylesheet" href="{{asset('internal_css/lib/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('internal_css/css/quirk.css')}}">
    @show
</head>
<body>
<header>
    <div class="headerpanel">
        <div class="logopanel">
            <h2><a href="/">MatchMaker</a></h2>
        </div>

        <div class="headerbar">
            @section('BarButtons')

            @show
        </div>
    </div>
</header>

<section>
    <div class="contentpanel">
        <?php
        //echo basename($_SERVER['PHP_SELF']);
        //if(basename($_SERVER['PHP_SELF'])!="index.php"){ ?>
                <!--ol class="breadcrumb breadcrumb-quirk"-->
        <!--li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li-->
        <!--li><a href="buttons.html">Pages</a></li-->
        <!--li class="active">Blank</li-->
        <!--/ol-->
        <?php// } ?>

        @yield('content')

    </div>
</section>

@section('js_ref')
    <script src="{{asset('internal_css/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('internal_css/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-toggles/toggles.js')}}"></script>
    <script src="{{asset('internal_css/lib/modernizr/modernizr.js')}}"></script>
    <script src="{{asset('internal_css/js/quirk.js')}}"></script>
@show
</body>
</html>