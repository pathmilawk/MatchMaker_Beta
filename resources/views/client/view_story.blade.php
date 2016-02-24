@extends('master_page')
@section('css_ref')
    @parent
@stop

@section('content')

    <!DOCTYPE html>
    <html>
    <head>
    <link href="{{asset('external_css/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('external_css/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('external_css/css/component.css')}}" rel="stylesheet" type="text/css"  />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Weekend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href='//fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>

    {{--<script src="{{asset('external_css/js/jquery-1.11.1.min.js')}}"></script>--}}
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
    <body class="cbp-spmenu-push">
    <div class="single">
        <div class="container">
            <h3 class="tittle">Success Stories</h3>
            <div class="article-post two">
                <div class="col-md-3 post-meta">
                    <div class="meta-icon">
                        <div class="pic">
                            <a href="#" > <i class="glyphicon glyphicon-picture"></i></a>
                        </div>
                    </div>
                    <ul class="ad-info">
                        <li>21 Aug'15</li>
                        <li> <a href="#">John Doe</a></li>
                        <li> <a href="#">24 Comments</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-9 post-details s-page">
                    <a href="#" class="mask"><img src="{{asset('external_css/images/single.jpg')}}" alt="image" class="img-responsive zoom-img"></a>
                    <a href="#"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4></a>
                    <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.
                        eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. <b>Proin in iaculis neque.</b> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                    <p class="eget">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. <b>Vivamus at elit quis urna adipiscing iaculis.</b> Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                    <p class="eget">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur <b>vitae velit in neque dictum blandit.</b> Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus <b>et malesuada fames ac turpis egestas.</b> </p>
                </div>
                <!--post-details-->
                <div class="clearfix"> </div>
            </div>
            <div class="top-single">
                <div class="single-middle">
                    <ul class="social-share">
                        <li><span>SHARE</span></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i class="tin"> </i></a></li>
                        <li><a href="#"><i class="message"> </i></a></li>
                    </ul>
                    <a href="#"><i class="arrow"> </i></a>
                    <div class="clearfix"> </div>
                </div>
                <div class="top-comments">
                    <h3>10 Comments</h3>

                    @foreach($notes as $note)
                    <div class="met">
                        <div class="code-in">
                            <p class="smith"><a href="#">{{ $note->name }}</a> <span>{{$note->created_at}}</span></p>
                            <p class="reply"><a href="#"><i> </i>REPLY</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="comments-top-top">
                            <div class="men" >
                                <img   src="{{asset('external_css/images/men.png')}}" alt="">
                            </div>
                            <p class="men-it">{{$note->note}} </p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    @endforeach
<!--
                    <div class="met met-in">
                        <div class="code-in">
                            <p class="smith"><a href="#">Robert Smith</a> <span>02 april 2015, 15:20</span></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="comments-top-top top-in">
                            <div class="men" >
                                <img   src="{{asset('external_css/images/men.png')}}" alt="">
                            </div>
                            <p class="men-it two">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
 -->
                </div>
                <div class="leave">
                    <h3>Leave a comment</h3>
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form id="myform" name="myform" action="commentFormSubmit" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="single-grid">
                            <div class="single-us">
                                <input type="text" id="name" name="name" placeholder="Name">
                                <input type="text" id="email" name="email"  placeholder="Email">
                                <textarea id="note" name="note" placeholder="Comment"></textarea>
                                <input type="submit" value="SEND" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
@stop


@section('js_ref')
    @parent

@stop
