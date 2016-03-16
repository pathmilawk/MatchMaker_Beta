@extends('app')
@section('pageTitle','Home')
@section('css_ref')
    @parent
@stop

@section('content')
    <html>
    <head>
        <title>Match Maker</title>
        <link href="{{asset('external_css/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
        <link href="{{asset('external_css/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
        <link href="{{asset('external_css/css/component.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Search Box CSS-->
        <link href="{{asset('external_css/css/searchBox.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Weekend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!--web-fonts-->
        <link href='//fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic|PT+Serif:400,700,400italic'
              rel='stylesheet' type='text/css'>
        <!--js-->
        <script src="{{asset('external_css/js/jquery-1.11.1.min.js')}}"></script>
        {{-- <script src="{{asset('external_css/js/bootstrap.js')}}"> </script>--}}
        <script src="{{asset('external_css/js/modernizr.custom.js')}}"></script>
        <!--//js-->
        <script type="text/javascript" src="{{asset('external_css/js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{asset('external_css/js/easing.js')}}"></script>
        <!--/script-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
                });
            });
        </script>
    </head>
    <!--start-home-->
    <body class="cbp-spmenu-push">
    <div class="banner">
        <div class="logo">
            <h1>Sri Lankan no 1 Dating Site...</h1>
        </div>
    </div>

    <script src="{{asset('external_css/js/classie.js')}}"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
                showLeftPush = document.getElementById('showLeftPush'),
                showRightPush = document.getElementById('showRightPush'),
                body = document.body;

        showLeftPush.onclick = function () {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
            if (button !== 'showRightPush') {
                classie.toggle(showRightPush, 'disabled');
            }
        }
    </script>

    <!--bottom-grids-->
    <div class="banner-bottom">
        <div class="container">
            <h3 class="tittle">Happy Life</h3>

            <div class="slider">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="bottom">
                                    <div class=" bottom-in bottom-grid">
                                        <a href="{{URL::to('abc')}}">
                                            <img class="img-responsive " src="{{asset('external_css/images/s1.jpg')}}"
                                                 alt=""/>
                                        </a>
                                    </div>
                                    <div class=" bottom-in bottom-grid1">
                                        <img class="img-responsive" src="{{asset('external_css/images/s2.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid2">
                                        <img class="img-responsive " src="{{asset('external_css/images/s3.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid3">
                                        <img class="img-responsive " src="{{asset('external_css/images/s4.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <div class="bottom">
                                    <div class=" bottom-in bottom-grid">
                                        <img class="img-responsive " src="{{asset('external_css/images/s3.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid1">
                                        <img class="img-responsive" src="{{asset('external_css/images/s4.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid2">
                                        <img class="img-responsive " src="{{asset('external_css/images/s1.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid3">
                                        <img class="img-responsive " src="{{asset('external_css/images/s2.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <div class="bottom">
                                    <div class=" bottom-in bottom-grid">
                                        <img class="img-responsive " src="{{asset('external_css/images/s2.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid1">
                                        <img class="img-responsive" src="{{asset('external_css/images/s1.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid2">
                                        <img class="img-responsive " src="{{asset('external_css/images/s4.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class=" bottom-in bottom-grid3">
                                        <img class="img-responsive " src="{{asset('external_css/images/s3.jpg')}}"
                                             alt=""/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <script>window.jQuery || document.write('<script src="{{asset('external_css/js/libs/jquery-1.7.min.js')}}">\x3C/script>')</script>
                <!--**********>
                           <!--flexslider-->
                <link rel="stylesheet" href="{{asset('external_css/css/flexslider.css')}}" type="text/css"
                      media="screen"/>
                <script defer src="{{asset('external_css/js/jquery.flexslider.js')}}"></script>
                <script type="text/javascript">
                    $(function () {
                        SyntaxHighlighter.all();
                    });
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            start: function (slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    });
                </script>

            </div>
        </div>
    </div>

    <!--start-success-stories-->
    <div class="news">
        <div class="container">
            <h3 class="tittle">Success Stories</h3>

            <div class="news-article">
                <div class="col-md-6 article-post"> <!--first success story-->
                    <div class="col-md-3 post-meta">
                        <div class="meta-icon">
                            <div class="pic">
                                <a href="view_story/{{ @$stories['story1']->id }}"> <i
                                            class="glyphicon glyphicon-picture"></i></a>
                            </div>
                        </div>
                        <ul class="ad-info">
                            <li>{{ @$stories['story1']->firstname }}.{{ @$stories['story1']->lastname }}</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-9 post-details" style="height: 150px;">
                        <a href="view_story/{{ @$stories['story1']->id }}" class="mask">
                            <img src="{{ asset('internal_css/images/photos/'.@$stories['story1']->image) }}" alt="image"
                                 class="img-responsive zoom-img">
                        </a>
                        <a href="view_story/{{ @$stories['story1']->id }}"><h4>{{ @$stories['story1']->title }}</h4></a>

                        <div class="read">
                            <a class="button" href="/view_story/{{ @$stories['story1']->id }}"><img
                                        src="{{asset('external_css/images/read.png')}}" alt=""/></a>
                        </div>
                    </div>
                    <!--post-details-->
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 article-post"><!--second story-->
                    <div class="col-md-3 post-meta">
                        <div class="meta-icon">
                            <div class="pic">
                                <a href="view_story/{{ @$stories['story2']->id }}"> <i
                                            class="glyphicon glyphicon-picture"></i></a>
                            </div>
                        </div>
                        <ul class="ad-info">
                            <li>{{ @$stories['story2']->firstname }}.{{ @$stories['story2']->lastname }}</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-9 post-details">
                        <a href="view_story/{{ @$stories['story2']->id }}" class="mask"><img
                                    src="{{ asset('internal_css/images/photos/'.@$stories['story2']->image) }}"
                                    alt="image" class="img-responsive zoom-img"></a>

                        <a href="view_story/{{ @$stories['story2']->id }}"><h4>{{ @$stories['story2']->title }}</h4></a>

                        <p></p>

                        <div class="read">
                            <a class="button" href="view_story/{{ @$stories['story2']->id }}"><img
                                        src="{{asset('external_css/images/read.png')}}" alt=""/></a>
                        </div>
                    </div>
                    <!--post-details-->
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--end success stories-->

    <!--advertisements-->

    <!--contact-->
    <div class="contact">
        <div class="col-md-6 contact-top">
            <div class="point"><i class="glyphicon glyphicon-map-marker"></i></div>
            <a href="contact_us"><h3 class="tittle two">Contact us</h3></a>
            <h4>For Any questions, Please feel free to Contact us by mail.</h4>

            <div class="contact-ad">
                <p>Address:Newyork Still Road.756 gt globel Place.

                <p>

                <p>Phone:Newyork Still Road.756 gt globel Place.

                <p>

                <p>E-mail :<a href="mailto:info@example.com">mail@example.com</a></p>

            </div>
        </div>
        <div class="col-md-6 map">
            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>
            <div class="black">
                <div class="map-l"><i class="glyphicon glyphicon-map-marker"></i></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--//contact-->

    <!--/footer-->
    <div class="copy">
        <p>&copy; MatchMaker</p>
    </div>
    <!--start-smoth-scrolling-->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                              style="opacity: 1;"> </span></a>

    </body>
    </html>
@stop

@section('js_ref')
    @parent

@stop
