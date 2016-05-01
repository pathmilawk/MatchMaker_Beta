<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

    <title>MatchMaker sign up</title>

    <link rel="stylesheet" href="{{ asset('internal_css/lib/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/select2/select2.css') }}">

    <link rel="stylesheet" href="{{ asset('internal_css/css/quirk.css') }}">

    <script src="{{ asset('internal_css/lib/modernizr/modernizr.js') }}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('internal_css/lib/html5shiv/html5shiv.js') }}"></script>
    <script src="{{ asset('internal_css/lib/respond/respond.src.js') }}"></script>
    <![endif]-->
</head>

<body class="signwrapper">

<div class="sign-overlay" style="background-image: url({{ asset('/internal_css/images/photos/loginBack.jpg') }}); background-repeat: no-repeat;background-size: cover;"></div>
<div class="signpanel" ></div>

<div class="signup" style="margin-top: 75px;">
    <div class="row">
        <div class="col-sm-5" style="margin-top: 30px;">
            <div class="panel">
                <div class="panel-heading">
                    <h1>MatchMaker</h1>
                    <h4 class="panel-title">Create an Account!</h4>
                </div>
                <div class="panel-body">
                    <form action="http://<?php echo $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']; ?>/auth/register"
                          method="post"><input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <div class="form-group mb15">
                            <input name="username" id="username" type="text" class="form-control"
                                   placeholder="Enter Your Username">
                        </div>
                        <div class="form-group mb15">
                            <input name="password" id="password" type="password" class="form-control"
                                   placeholder="Enter Your Password">
                        </div>
                        <div class="form-group mb15">
                            <input name="name" id="name" type="text" class="form-control"
                                   placeholder="Enter Your Full Name">
                        </div>


                        <div class="form-group mb15">
                            <input name="email" id="email" type="text" class="form-control"
                                   placeholder="Enter Your email">
                        </div>


                        <div class="form-group" style="margin-top: 50px;">
                            <button type="submit" class="btn btn-success btn-quirk btn-block">Create Account</button>
                        </div>
                    </form>
                </div>
                <!-- panel-body -->
            </div>
            <!-- panel -->
        </div>
        <!-- col-sm-5 -->
        <div class="col-sm-7">
            <div class="sign-sidebar">
                <h3 class="signtitle mb20">Your perfect match is searching for you</h3>

                <p>MatchMaker is an online matchmaking service for a more mature audience. Join our free matchmaking
                    dating site today and find true love, search through millions of singles in your area don't let love
                    pass you by.</p>

                <p>Below are some of the reasons why you love MatchMaker.</p>

                <h4 class="reason">1. Reliable</h4>

                <p>Matchmaker.com is the premier online dating website with thousands of success stories from connected
                    singles who looked for friendships, romance, love and marriage.</p>

                <br>

                <h4 class="reason">2. Fast</h4>

                <p>Our unique scientific matching system calculates perfect matches by comparing your profile with over
                    10 million active members. To determine your best match, we take your profile and match it with what
                    you're looking for in a partner.</p>

                <hr class="invisible">

                <div class="form-group">
                    <a href="login" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Already
                        a member? Sign In Now!</a>
                </div>
            </div>
            <!-- sign-sidebar -->
        </div>
    </div>
</div>

<!-- signup -->
<script src="{{ asset('internal_css/lib/jquery/jquery.js') }}"></script>
<script src="{{ asset('internal_css/lib/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('internal_css/lib/select2/select2.js') }}"></script>

<script>
    $(function () {

        // Select2 Box
        $("select.form-control").select2({minimumResultsForSearch: Infinity});

    });
</script>

</body>
</html>









