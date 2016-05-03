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
    <link href="{{asset('external_css/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('external_css/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('external_css/css/component.css')}}" rel="stylesheet" type="text/css"/>

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

    <link href='//fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic|PT+Serif:400,700,400italic'
          rel='stylesheet' type='text/css'>

    <script src="{{asset('external_css/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('external_css/js/bootstrap.js')}}"></script>
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
<!--body-->
<body class="cbp-spmenu-push">
<div class="single">
    <div class="container">
        <h3 class="tittle">Success Stories</h3>


        <div class="article-post two">
            <div class="col-md-3 post-meta">
                <div class="meta-icon">
                    <div class="pic">
                        <a href="#"> <i class="glyphicon glyphicon-picture"></i></a>
                    </div>
                </div>
                <ul class="ad-info">
                    <li>{{ $story->firstname }}{{ $story->lastname   }}</li>
                    <!--values from story controller-->
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-9 post-details s-page">
                <a href="#" class="mask"><img src="{{ asset('internal_css/images/photos/'.$story->image) }}" alt="image"
                                              class="img-responsive zoom-img" style="width: 950px;height: 450px;"></a>
                <a href="#"><h4>{{ $story->title }}</h4></a>

                <p>{{$story->story}}</p>
            </div>
            <!--post-details-->
            <div class="clearfix"></div>
        </div>
        <div class="top-single">

            <div class="top-comments" id="comments">



            </div>
            <div id="dom-target" style="display: none;">
                <?php
                echo htmlspecialchars($story->id);
                ?>
                    <input type="hidden" value="{{ $story->id }}" id="mmm" name="mmm" />
            </div>

            <!--post comments-->
            <div class="leave">
                <h3>Leave a comment</h3>

                <form id="myform" name="myform" action="{{ action('StoryController@commentFormSubmit',$story->id) }}"
                      method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="single-grid">
                        <div class="single-us">
                            <input type="text" id="name" name="name" placeholder="Name" required>
                            <textarea id="comment" name="comment" placeholder="Comment" required></textarea>
                            <input type="submit" onclick="return commentPublish({{ $story->id }})" value="SEND">
                        </div>
                    </div>
                </form>
            </div>
            <!--end of comments-->
        </div>
    </div>
</div>
</div>

</body>
</html>
@stop
@section('js_ref')

    @parent
    <script>

        function commentPublish(storyid) {

            var name = document.getElementById("name").value;
            var comment = document.getElementById("comment").value;

            var info=$('.info');
            $.ajax({
                url: '/commentAjax',
                type: 'post',
                data: {
                    name: name, comment: comment, storyid: storyid

                },
                success: function (data) {

                    $("#name").val('');
                    $("#comment").val('');
                    document.getElementById("errors").innerHTML = data;

                },
                error: function (data) {

                },
            });
            return false;
        }


        function showcomment() {
            var div = document.getElementById("dom-target");
            var storyid = $("#mmm").val();

            $.ajax({
                url: '/showCommentAjax1'+storyid,
                type: 'post',
                data: {
                    storyid: storyid
                },
                dataType: 'html',
                success: function (data) {
                    //if (data != "same") {
                    document.getElementById("comments").innerHTML = data;
                    //alert(data);

                    // }
                },
                error: function (err, req) {
                    alert(arr);
                },
            });

            setTimeout("showcomment()", 3000)
        }


        //onload = showcomment();
        $(document).ready(function(){
            showcomment();
        })

    </script>

@stop


