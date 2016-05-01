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

<div class="signup" style="margin-top: 40px;">
    <div class="row">
        <div class="col-sm-5">
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
                                   placeholder="Enter Your First Name">
                        </div>
                        <div class="form-group mb15">
                            <input name="lastname" id="lastname" type="text" class="form-control"
                                   placeholder="Enter Your Last Name">
                        </div>

                        <div class="form-group mb15">
                            <input name="email" id="email" type="text" class="form-control"
                                   placeholder="Enter Your email">
                        </div>

                        <div class="row mb15">
                                <div class="form-group">
                                    <select name="gender" id="gender" class="form-control" style="width: 100%"
                                            data-placeholder="Gender">
                                        <option value="">&nbsp;</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                        </div>

                        <div class="row mb15">
                            <div class="col-xs-5">
                                <div class="form-group">
                                    <select name="bdayM" id="bdayM" class="form-control" style="width: 100%"
                                            data-placeholder="Birth Month">
                                        <option value="">&nbsp;</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">June</option>
                                        <option value="August">June</option>
                                        <option value="Semtember">June</option>
                                        <option value="October">June</option>
                                        <option value="November">June</option>
                                        <option value="December">June</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <select name="bdayD" id="bdayD" class="form-control" style="width: 100%"
                                            data-placeholder="Birth Day">
                                        <option value="">&nbsp;</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <select name="bdayY" id="bdayY" class="form-control" style="width: 100%"
                                            data-placeholder="Birth Year">
                                        <option value="">&nbsp;</option>
                                        <option value="1988">1980</option>
                                        <option value="1988">1981</option>
                                        <option value="1988">1982</option>
                                        <option value="1988">1983</option>
                                        <option value="1988">1984</option>
                                        <option value="1988">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1988">1989</option>
                                        <option value="1988">1990</option>
                                        <option value="1988">1991</option>
                                        <option value="1988">1992</option>
                                        <option value="1988">1993</option>
                                        <option value="1988">1994</option>
                                        <option value="1988">1995</option>
                                        <option value="1988">1996</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 30px;">
                            <button type="submit" class="btn btn-success btn-quirk btn-block">Create Account</button>
                        </div>
                    </form>
                </div>
                <!-- panel-body -->
                @if($errors->any())<!--retrieving errors from validations-->
                <ul class="text-danger" style="margin-top: 5px;margin-bottom: 0px;">
                    @foreach($errors->all() as $error)
                        <li style="font-size: small">{{$error}}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <!-- panel -->
        </div>
        <!-- col-sm-5 -->
        <div class="col-sm-7" style="margin-top: 30px">
            <div class="sign-sidebar">
                <h3 class="signtitle mb20">Your perfect match is searching for you</h3>

                <p>MatchMaker is an online matchmaking service for a more mature audience. Join our free matchmaking
                    dating site today and find true love, search through millions of singles in your area don't let love
                    pass you by.</p>

                <p>Below are some of the reasons why you love MatchMaker.</p>

                <br>
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









