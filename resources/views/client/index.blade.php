@extends('master_page')
@section('css_ref')
    @parent
@stop
@section('BarButtons')
    <div class="header-right paddingtop10">
        <h4>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']; ?>/auth/login"><button
                            class="btn btn-primary btn-quirk">Sign In</button></a>&nbsp;&nbsp;&nbsp;
            <a href="http://<?php echo $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']; ?>/auth/register"><button
                            class="btn btn-primary btn-quirk">Register</button></a>
        </h4>
    </div>
@show
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
    <body class="cbp-spmenu-push" style="margin-top: 63px">
    <div class="banner">
        <div class="logo">
            <br>
            <br>
            <!-- Search Box Starts -->
            <div class="searchBox">
                <h1 style=" margin-top: 30px; ">Find Your Soulmate Here...</h1>
                <br>
                {!! Form::open( ['url' => 'beforeRegister']) !!}
                <div class="form-group mt15">
                    {!! Form::label('gender','I am looking for a :', ['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::select('Gender',['Select a gender'=>'Select a gender','Male'=>'Male','Female'=>'Female']) !!}
                    </div>
                </div>
                <br>
                <br>
                <br>

                <div class="form-group mt15">
                    {!! Form::label('Age','Age Between :', ['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-3">
                        {!! Form::select('AgeStart',['From' => 'From',
                                                    '18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29',
                                                    '30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39',
                                                    '40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49',
                                                    '50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54','55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59',
                                                    '60'=>'60','61'=>'61','62'=>'62','63'=>'63','64'=>'64','65'=>'65','66'=>'66','67'=>'67','68'=>'68','69'=>'69','70'=>'70',
                                                    ]) !!}
                    </div>
                    <div class="col-sm-3">
                        {!! Form::select('AgeEnd',['To' => 'To',
                                                        '18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29',
                                                        '30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39',
                                                        '40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49',
                                                        '50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54','55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59',
                                                        '60'=>'60','61'=>'61','62'=>'62','63'=>'63','64'=>'64','65'=>'65','66'=>'66','67'=>'67','68'=>'68','69'=>'69','70'=>'70',
                                                        ]) !!}
                    </div>
                </div>
                <br>
                <br>

                <div class="form-group mt10">
                    {!! Form::label('From','From :', ['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::select('From',
                        ['Select a district'=>'Select a district',
                            'Ampara'=>'Ampara',
                            'Anuradhapura'=>'Anuradhapura',
                            'Badulla'=>'Badulla',
                            'Batticaloa'=>'Batticaloa',
                            'Colombo'=>'Colombo',
                            'Galle'=>'Galle',
                            'Hambantota'=>'Hambantota',
                            'Jaffna'=>'Jaffna',
                            'Kalutara'=>'Kalutara',
                            'Kandy'=>'Kandy',
                            'Kilinochchi'=>'Kilinochchi',
                            'Kurunegala'=>'Kurunegala',
                            'Manner'=>'Manner',
                            'Matale'=>'Matale',
                            'Matale'=>'Matale',
                            'Monaragala'=>'Monaragala',
                            'Mullativu'=>'Mullativu',
                            'Nuwara Eliya'=>'Nuwara Eliya',
                            'Polonnaruwa'=>'Polonnaruwa',
                            'uttalam'=>'uttalam',
                            'Ratnapura'=>'Ratnapura',
                            'Trincomalee'=>'Trincomalee',
                            'Vavuniya'=>'Vavuniya',
                            'Does not matter'=>'Does not matter',]) !!}
                    </div>
                </div>
                <br>
                <br>

                <div class="form-group mt10">
                    {!! Form::label('Religion','Religion :', ['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::select('Religion',['Select a religion'=>'Select a religion',
                                                    'Buddhist'=> 'Buddhist',
                                                    'Christian'=>'Christian',
                                                    'Muslim'=> 'Muslim',
                                                    'Hindu'=>'Hindu',
                                                    'Does not matter'=>'Does not matter',]) !!}
                    </div>
                </div>
                <br>
                <br>

                <div class="form-group mt15">
                    {!! Form::label('Mother Tongue','Mother Tongue :', ['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::select('MotherTongue',['Select a language'=>'Select a language',
                                                    'Sinhala'=>'Sinhala',
                                                    'Tamil'=>'Tamil',
                                                    'English'=>'English',
                                                    'Hindi'=>'Hindi',
                                                    'Does not matter'=>'Does not matter',]) !!}
                    </div>
                </div>
                <br>

                <div class="form-group mt15">
                    {!! Form::submit('Search', ['id' => 'button']) !!}
                </div>
                {!! Form::close() !!}
            </div>

            <div class="col-md-3" style="left: 600px;">
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <!-- Search Box Ends -->
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
    <script src="{{ asset('internal_css/lib/select2/select2.js') }}"></script>
    <script src="{{ asset('internal_css/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('internal_css/lib/bootstrap/js/bootstrap.js') }}"></script>

    @parent

@stop
