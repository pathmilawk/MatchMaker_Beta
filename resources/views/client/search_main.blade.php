@extends('master_page')
@section('css_ref')
@parent
@stop

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Weekend a People and Society Category Flat bootstrap Responsive website Template | Home :: w3layouts</title>
    <link href="{{asset('external_css/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('external_css/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('external_css/css/component.css')}}" rel="stylesheet" type="text/css"  />

    <!-- Search Box CSS-->
    <link href="{{asset('external_css/css/searchBox.css')}}" rel="stylesheet" type="text/css"  />

    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Weekend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
    <!--js-->
    <script src="{{asset('external_css/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('external_css/js/bootstrap.js')}}"> </script>
    <script src="{{asset('external_css/js/modernizr.custom.js')}}"></script>
    <!--//js-->
    <script type="text/javascript" src="{{asset('external_css/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('external_css/js/easing.js')}}"></script>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>


</head>
<!--start-home-->
<body class="cbp-spmenu-push">



</body>
</html>


@stop


@section('js_ref')
    @parent

@stop
