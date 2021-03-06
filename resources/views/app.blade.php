<!DOCTYPE html>
<html lang="en">
<head>

    <script>
        function con(){
            var x = confirm("Are you sure you want to Deactivate ?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

    <script>
        function delcon(){
            var x = confirm("Are you sure you want to Delete the Account ?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

    <title>@yield('pageTitle')</title>

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
            <h2><a href="/">Match Maker</a></h2>
        </div>
        <!-- logopanel -->

        <div class="headerbar">

            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

            <div class="searchpanel">
                <div class="input-group">
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="name" class="form-control" placeholder="Search for..." required>--}}
                    <span class="input-group-btn">
                <a href="Search">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </a>
              </span>
                </div>
                <!-- input-group -->
            </div>

            <div class="header-right">
                <ul class="headermenu">

                    <li class="tooltips unread" data-toggle="tooltip" title="Check Mail">
                        <button id="chatview" class="btn btn-chat ">
                            <span class="badge-alert"></span>
                            <a href="viewMingle" style="color: #EE7D7D"><i  data-toggle="tooltip" title="Mingling" class="fa fa-heart" ></i></a>
                        </button>
                    </li>

                    <li>
                        <div id="noticePanel" class="btn-group">

                        </div>
                    </li>



                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-logged" data-toggle="dropdown">
                                <img src="{{asset('Profile_Pictures/default.png')}}" alt=""/>
                                {{ Auth::user()->name." "}} {{ Auth::user()->lastname  }}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{Auth::user()->id}}"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                                <li><a href="auth/logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- header-right -->
        </div>
        <!-- headerbar -->
    </div>
    <!-- header-->
</header>

<section>

    <div class="leftpanel">
        <div class="leftpanelinner">

            <!-- ################## LEFT PANEL PROFILE ################## -->

            <div class="media leftpanel-profile">
                <div class="media-left">
                    <a href="{{Auth::user()->id}}">
                        <img src="{{asset('Profile_Pictures/default.png')}}" alt="" class="media-object img-circle">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ Auth::user()->name }}<a data-toggle="collapse"
                                                                         data-target="#loguserinfo"
                                                                         class="pull-right"><i
                                    class="fa fa-angle-down"></i></a></h4>
                    <span>Software Engineer</span>
                </div>
            </div>
            <!-- leftpanel-profile -->

            <div class="leftpanel-userinfo collapse" id="loguserinfo">
                <h5 class="sidebar-title">Address</h5>
                <address>
                    4975 Cambridge Road
                    Miami Gardens, FL 33056
                </address>
                <h5 class="sidebar-title">Contact</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <label class="pull-left">Email</label>
                        <span class="pull-right">me@themepixels.com</span>
                    </li>
                    <li class="list-group-item">
                        <label class="pull-left">Home</label>
                        <span class="pull-right">(032) 1234 567</span>
                    </li>
                    <li class="list-group-item">
                        <label class="pull-left">Mobile</label>
                        <span class="pull-right">+63012 3456 789</span>
                    </li>
                    <li class="list-group-item">
                        <label class="pull-left">Social</label>

                        <div class="social-icons pull-right">
                            <a href="#"><i class="fa fa-facebook-official"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- leftpanel-userinfo -->

            <ul class="nav nav-tabs nav-justified nav-sidebar">
                {{--<li class="tooltips active" data-toggle="tooltip" title="Main Menu"><a data-toggle="tab"
                                                                                       data-target="#emailmenu"><i
                                class="tooltips fa fa-ellipsis-h"></i></a></li>--}}
                <li class="tooltips unread" data-toggle="tooltip" title="Check Mail"><a data-toggle="tab"
                                                                                        data-target="#emailmenu"><i
                                class="tooltips fa fa-envelope"></i></a></li>
                <li class="tooltips" data-toggle="tooltip" title="Contacts"><a data-toggle="tab"
                                                                               data-target="#contactmenu"><i
                                class="fa fa-user"></i></a></li>
                <li class="tooltips" data-toggle="tooltip" title="Settings"><a data-toggle="tab"
                                                                               data-target="#settings"><i
                                class="fa fa-cog"></i></a></li>
                <li class="tooltips" data-toggle="tooltip" title="Log Out"><a href="auth/logout"><i
                                class="fa fa-sign-out"></i></a></li>
            </ul>

            <div class="tab-content">

                <!-- ################# MAIN MENU ################### -->

                {{--<div class="tab-pane active" id="mainmenu">
                    <h5 class="sidebar-title">Favorites</h5>
                    <ul class="nav nav-pills nav-stacked nav-quirk">
                        <li><a href="index.html"><i class="fa fa-home"></i> <span>Add Topic</span></a></li>
                        <li><a href="widgets.html"><span class="badge pull-right">10+</span><i class="fa fa-cube"></i>
                                <span>Add Topic</span></a></li>
                        <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Add Topic</span></a></li>
                    </ul>

                    <h5 class="sidebar-title">Main Menu</h5>
                    <ul class="nav nav-pills nav-stacked nav-quirk">
                        <li class="nav-parent">
                            <a href=""><i class="fa fa-check-square"></i> <span>Add Topic</span></a>
                            <ul class="children">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li class="nav-parent"><a href=""><i class="fa fa-suitcase"></i> <span>Add Topic</span></a>
                            <ul class="children">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>Add Topic</span></a>
                            <ul class="children">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li class="nav-parent active"><a href=""><i class="fa fa-file-text"></i> <span>Add Topic</span></a>
                            <ul class="children">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>--}}
                <!-- tab-pane -->

                <!-- ######################## EMAIL MENU ##################### -->

                <div class="tab-pane active" id="emailmenu">
                    <div class="sidebar-btn-wrapper">
                        <a href="email" class="btn btn-danger btn-block">Send Message</a>
                    </div>

                    <h5 class="sidebar-title">Messages</h5>
                    <ul class="nav nav-pills nav-stacked nav-quirk nav-mail">
                        <li><a href="viewAllmessages"><i class="fa fa-inbox"></i> <span>Recieved(3)</span></a></li>
                        <li><a href="email.html"><i class="fa fa-pencil"></i> <span>Draft (2)</span></a></li>
                        <li><a href="viewAllSentMessages"><i class="fa fa-paper-plane"></i> <span>Sent</span></a></li>
                    </ul>

                    {{--<h5 class="sidebar-title">Tags</h5>
                    <ul class="nav nav-pills nav-stacked nav-quirk nav-label">
                        <li><a href="#"><i class="fa fa-tags primary"></i> <span>Communication</span></a></li>
                        <li><a href="#"><i class="fa fa-tags success"></i> <span>Updates</span></a></li>
                        <li><a href="#"><i class="fa fa-tags warning"></i> <span>Promotions</span></a></li>
                        <li><a href="#"><i class="fa fa-tags danger"></i> <span>Social</span></a></li>
                    </ul>--}}
                </div>
                <!-- tab-pane -->

                <!-- ################### CONTACT LIST ################### -->

                <div class="tab-pane" id="contactmenu">
                    <div class="input-group input-search-contact">
                        <input type="text" class="form-control" placeholder="Search contact">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                    <h5 class="sidebar-title">My Contacts</h5>
                    <ul class="media-list media-list-contacts">
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user1.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Christina R. Hill</h4>
                                    <span><i class="fa fa-phone"></i> 386-752-1860</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user2.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Floyd M. Romero</h4>
                                    <span><i class="fa fa-mobile"></i> +1614-650-8281</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user3.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Jennie S. Gray</h4>
                                    <span><i class="fa fa-phone"></i> 310-757-8444</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user4.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Alia J. Locher</h4>
                                    <span><i class="fa fa-mobile"></i> +1517-386-0059</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user5.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Nicholas T. Hinkle</h4>
                                    <span><i class="fa fa-skype"></i> nicholas.hinkle</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user6.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Jamie W. Bradford</h4>
                                    <span><i class="fa fa-phone"></i> 225-270-2425</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user7.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Pamela J. Stump</h4>
                                    <span><i class="fa fa-mobile"></i> +1773-879-2491</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user8.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Refugio C. Burgess</h4>
                                    <span><i class="fa fa-mobile"></i> +1660-627-7184</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user9.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Ashley T. Brewington</h4>
                                    <span><i class="fa fa-skype"></i> ashley.brewington</span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="#">
                                <div class="media-left">
                                    <img class="media-object img-circle"
                                         src="{{ asset('internal_css/images/photos/user10.png') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Roberta F. Horn</h4>
                                    <span><i class="fa fa-phone"></i> 716-630-0132</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- tab-pane -->

                <!-- #################### SETTINGS ################### -->

                <div class="tab-pane" id="settings">
                    <h5 class="sidebar-title">General Settings</h5>
                    <ul class="list-group list-group-settings">
                        <li class="list-group-item">
                            <h5>Details Show</h5>
                            <small>Allow others to view my profile details</small>
                            <button class="btn btn-primary btn-xs" onclick="ShowDetails()" value="Show">Show</button>
                            <button class="btn btn-primary btn-xs" onclick="HideDetails()" value="Hide">Hide</button>
                        </li>
                        <li class="list-group-item">
                            <h5>Photos Show</h5>
                            <small>Allow others to view my photo.</small>
                            <button class="btn btn-primary btn-xs" onclick="ShowPhotos()" value="Show">Show</button>
                            <button class="btn btn-primary btn-xs" onclick="HidePhotos()" value="Hide">Hide</button>
                        </li>
                    </ul>


                    <h5 class="sidebar-title">Security Settings</h5>
                    <ul class="list-group list-group-settings">
                        {{--<li class="list-group-item">
                            <h5>Reset Password</h5>
                            <a href="/password/email"> <button class="btn btn-warning btn-xs">Reset</button></a>
                        </li>--}}
                        <li class="list-group-item">
                            <h5>Accounts Settings</h5>
                            {{--<small>Turn off if you want to Deactivte</small>--}}
                            {{--<div class="toggle-wrapper">
                                <div class="leftpanel-toggle toggle-light success"></div>
                            </div>--}}
                            <br>

                            <a href="DeactivateUser"> <button class="btn btn-danger btn-xs" onclick="return con()">Deactivate</button></a>
                            <a href="DeleteUserFeedBack"> <button class="btn btn-danger btn-xs" onclick="return delcon()">Delete Account</button></a>
                        </li>

                    </ul>
                </div>
                <!-- tab-pane -->


            </div>
            <!-- tab-content -->

        </div>
        <!-- leftpanelinner -->
    </div>
    <!-- leftpanel -->
    <div id="dom-target" style="display: none;">
        <?php
        echo htmlspecialchars(Auth::user()->username);
        ?>
    </div>
    <div class="mainpanel">

        <div class="contentpanel">
            <?php if(strcmp((pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)), "home") != 0){ ?>
            <ol class="breadcrumb breadcrumb-quirk">
                <li><a href="/MatchMaker_Beta/public/"><i class="fa fa-home mr5"></i> Home</a></li>
                <li class="#"><?php echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME); ?></li>
            </ol>
            <?php }?>
                    <!-- content goes here... -->
            @yield('content')

        </div>
        <!-- contentpanel -->
    </div>
    <!-- mainpanel -->
</section>
@section('js_ref')
    <script src="{{asset('internal_css/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('internal_css/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-toggles/toggles.js')}}"></script>
    <script src="{{asset('internal_css/js/quirk.js')}}"></script>

    <script>

        function ShowDetails()
        {

            $.ajax({
                url: 'showDetails',
                type: 'POST',
                data: {
                },
                dataType: 'json',
                success: function (data) {
                    alert(data);
                },
                error: function (err, req) {
                    alert(err);
                },
            });
        }

        function HideDetails()
        {
            $.ajax({
                url: 'HideDetails',
                type: 'POST',
                data: {
                },
                dataType: 'json',
                success: function (data) {
                    alert(data);
                },
                error: function (err, req) {
                    alert(err);
                },
            });
        }

        function ShowPhotos()
        {

            $.ajax({
                url: 'ShowPhotos',
                type: 'POST',
                data: {
                },
                dataType: 'json',
                success: function (data) {
                    alert(data);
                },
                error: function (err, req) {
                    alert(err);
                },
            });
        }

        function HidePhotos()
        {
            $.ajax({
                url: 'HidePhotos',
                type: 'POST',
                data: {
                },
                dataType: 'json',
                success: function (data) {
                    alert(data);
                },
                error: function (err, req) {
                    alert(err);
                },
            });
        }


        function refreshNotifications() {
            var div = document.getElementById("dom-target");
            var receiver_username = div.textContent;

            $.ajax({
                url: '/refreshNotifications',
                type: 'post',
                data: {
                    receiver_username: receiver_username
                },
                dataType: 'html',
                success: function (data) {
                    //if (data != "same") {
                    document.getElementById("noticePanel").innerHTML = data;
                    $(".make-switch").bootstrapSwitch();
                    //alert(data);

                    // }
                },
                error: function (err, req) {
                    Console.log(err);
                },
            });

            setTimeout("refreshNotifications()", 3000)
        }
        onload = refreshNotifications();
    </script>
@show


</body>
</html>
