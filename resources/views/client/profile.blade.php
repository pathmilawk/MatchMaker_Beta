@extends('app')
@section('pageTitle','User Profile')

@section('css_ref')
    @parent
@stop

@section('content')
        @foreach( $user as $key )
            <div class="row profile-wrapper">
                <div class="col-xs-12 col-md-3 col-lg-2 profile-left">
                    <div class="profile-left-heading">
                        @if($key->profile_picture == 1)
                            <a href="{!! $key->user_id !!}" class="profile-photo"><img class="img-circle img-responsive" src="{{asset('Profile_Pictures/'.$key->user_id.'.png')}}" alt=""></a>
                        @else
                            @if($key->gender == "Male")
                                <a href="{!! $key->user_id !!}" class="profile-photo"><img class="img-circle img-responsive" src="{{asset('Profile_Pictures/defaultMale.png')}}" alt=""></a>
                            @else
                                <a href="{!! $key->user_id !!}" class="profile-photo"><img class="img-circle img-responsive" src="{{asset('Profile_Pictures/defaultFemale.png')}}" alt=""></a>
                            @endif
                        @endif
                        <h2 class="profile-name">{{ $key->first_name }} {{ $key->last_name }}</h2>
                        <h4 class="profile-designation">{{ $key->occupation }}</h4>

                        <ul class="list-group">
                            <li class="list-group-item"> <p>Birthday</p> <p align="right">1995.01.19</p> </li>
                            <li class="list-group-item"> <p>Hometown</p> <p align="right">{{$key->hometown}}</p> </li>
                            <li class="list-group-item"> <p>Religion</p> <p align="right">{{$key->religion}}</p> </li>
                        </ul>

                        @if(Auth::user()->id == $key->user_id)
                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow" onclick="editProfile({{$key->user_id}})">Edit Profile</button>
                        @else
                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow" onclick="sendRequest({{$key->user_id}})">Send Request</button>
                        @endif
                    </div>{{--end of profile-left-heading--}}

                    <div class="profile-left-body">
                        <h4 class="panel-title">About Me</h4>
                        <p>{{ $key->about }}</p>

                        <hr class="fadeout">

                        <h4 class="panel-title">Location</h4>
                        <p><i class="glyphicon glyphicon-map-marker mr5"></i> {{$key->location}},{{$key->country}}</p>

                        <hr class="fadeout">

                        <h4 class="panel-title">Social</h4>
                        <ul class="list-inline profile-social">
                            <li><a href=""><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6 col-lg-8 profile-right">
                    <div class="profile-right-body" id="profile-right-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified nav-line">
                            <li class="active"><a href="#presonalinfo" data-toggle="tab"><strong>Personal Information</strong></a></li>
                            <li><a href="#photos" data-toggle="tab"><strong>Photos</strong></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="presonalinfo">
                                {{--if the viewer is owner of the profile or owner has given the permission to view personal details--}}
                                @if(Auth::user()->id == $key->user_id || $key->allowNonFriendDetails)
                                    <div class="panel panel-post-item">
                                        <h4>Contact Information</h4>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="padding: 10px; width: 25%;"><i class="fa fa-envelope"></i>  Email</td>
                                                <td style="padding: 10px;">{{Auth::user()->email}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-list-alt"></i>  Address </td>
                                                <td style="padding: 10px;">{{$key->address}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-phone"></i> Contact No </td>
                                                <td style="padding: 10px;">{{$key->telephone}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="panel panel-post-item">
                                        <h4>Appearance</h4>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="padding: 10px; width: 25%;"><i class="fa fa-info-circle"></i>  Height</td>
                                                <td style="padding: 10px;">{{$key->height}} feet</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-info-circle"></i>  Complexion </td>
                                                <td style="padding: 10px;">{{$key->complexion}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Hair Type </td>
                                                <td style="padding: 10px;">{{$key->hair}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Body Type </td>
                                                <td style="padding: 10px;">{{$key->bodyType}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="panel panel-post-item">
                                        <h4><i class="fa fa-mortar-board"></i> Education</h4>
                                        <br>
                                        <table style="width: 100%;">
                                            <tr style="padding: 10px;">{{$key->education}}</tr>
                                        </table>
                                    </div>
                                    <div class="panel panel-post-item">
                                        <h4>Other Information</h4>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="padding: 10px; width: 50%;"><i class="fa fa-info-circle"></i>  Sign</td>
                                                <td style="padding: 10px;">{{$key->sign}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px; width: 50%;"><i class="fa fa-info-circle"></i>  Mother Tongue</td>
                                                <td style="padding: 10px;">{{$key->motherTongue}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Languages that can speak </td>
                                                <td style="padding: 10px;">{{$key->languages}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-info-circle"></i>  Interested in </td>
                                                <td style="padding: 10px;">{{$key->interested_in}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Smoking </td>
                                                <td style="padding: 10px;">{{$key->smoking}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Drinking </td>
                                                <td style="padding: 10px;">{{$key->drinking}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                @else
                                    <div class="panel panel-post-item">
                                        <p>You have no permission to see this person's personal details!</p>
                                    </div>
                                @endif
                            </div><!-- tab-1 -->

                            <div class="tab-pane " id="photos">
                                @if(Auth::user()->id == $key->user_id || $key->allowNonFriendPhotos)
                                    <div class="panel panel-post-item">
                                        <div style="width: 300px; height: 300px;">



                                        </div>
                                    </div>
                                @else
                                    <div class="panel panel-post-item">
                                        <p>You have no permission to see this person's photos!</p>
                                    </div>
                                @endif
                            </div><!-- tab-2 -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 profile-sidebar">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">People You May Know</h4>
                                </div>
                                <div class="panel-body">
                                    <ul class="media-list user-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user9.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="">Ashley T. Brewington</a></h4>
                                                <span>5,323</span> Followers
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user10.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="">Roberta F. Horn</a></h4>
                                                <span>4,100</span> Followers
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="">Jennie S. Gray</a></h4>
                                                <span>3,508</span> Followers
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="">Alia J. Locher</a></h4>
                                                <span>3,508</span> Followers
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="">Jamie W. Bradford</a></h4>
                                                <span>2,001</span> Followers
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- panel -->
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Following Activity</h4>
                                </div>
                                <div class="panel-body">
                                    <ul class="media-list user-list">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading nomargin"><a href="">Floyd M. Romero</a></h4>
                                                is now following <a href="">Christina R. Hill</a>
                                                <small class="date"><i class="glyphicon glyphicon-time"></i> Just now</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user10.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading nomargin"><a href="">Roberta F. Horn</a></h4>
                                                commented on <a href="">HTML5 Tutorial</a>
                                                <small class="date"><i class="glyphicon glyphicon-time"></i> Yesterday</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user3.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading nomargin"><a href="">Jennie S. Gray</a></h4>
                                                posted a video on <a href="">The Discovery</a>
                                                <small class="date"><i class="glyphicon glyphicon-time"></i> June 25, 2015</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user5.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading nomargin"><a href="">Nicholas T. Hinkle</a></h4>
                                                liked your video on <a href="">The Discovery</a>
                                                <small class="date"><i class="glyphicon glyphicon-time"></i> June 24, 2015</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object img-circle" src="../images/photos/user2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading nomargin"><a href="">Floyd M. Romero</a></h4>
                                                liked your photo on <a href="">My Life Adventure</a>
                                                <small class="date"><i class="glyphicon glyphicon-time"></i> June 24, 2015</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- panel -->
                        </div>
                    </div><!-- row -->

                </div>
            </div><!-- row -->
        @endforeach


@stop

@section('js_ref')
    <script src="{{asset('internal_css/lib/modernizr/modernizr.js')}}"></script>
    <script type="text/javascript">

        {{--Javascript function that send request using ajax--}}
        function sendRequest(id)
        {
            $.ajax({

                type: "POST",
                url: 'sendRequest_'+id,
                data: {

                },
                dataType: 'json',
                success: function (data) {
                    //console.log(data);
                    alert(data);
                }
            });
        }

        {{--Load editProfile.blade using ajax--}}
        function editProfile(id) {

            $.ajax({
                url: 'editProfile_'+id,
                type: "POST",
                data: {

                },
                dataType: 'html',
                success: function (data) {
                    document.getElementById("presonalinfo").innerHTML = data;

                },
                error: function (err) {
                    alert(err);
                },
            });
        }

        /*****************************************************************************/
        /*Java Scripts for editProfile.blade page*/
        /*****************************************************************************/

        {{--Change the profile picture--}}
        function changeProfilePicture(id)
        {
             var file = document.getElementById("profilePic").value;

             $.ajax({

                 type: "POST",
                 url: 'changeProfilePicture',
                 data: {
                     file: file, id:id
                 },
                 dataType: 'json',
                 success: function (data) {
                     //document.getElementById("presonalinfo").innerHTML = data;
                    alert(data);
                 },
                 error: function (err) {
                     alert("error");
                 }
             });

        }

        {{--Change the Basic info--}}
        function updateBasicInfo(id)
        {
            var home = document.getElementById("Hometown").value;
            var loc = document.getElementById("Location").value;
            var con = document.getElementById("Country").value;

            //to check if the string contains numbers
            var stringCk = /^[A-Za-z ]+$/;

            if((stringCk.test(home))&&(stringCk.test(con)))
            {
                document.getElementById('errorhome').style.display = 'none';
                document.getElementById('errorcon').style.display = 'none';

                $.ajax({

                    type: "POST",
                    url: 'updateBasicInfo',
                    data: {
                        home:home, loc:loc, con:con, id:id
                    },
                    dataType: 'html',
                    success: function (data) {
                        document.getElementById("presonalinfo").innerHTML = data;
                        // alert(data);
                    },
                    error: function (err) {
                        alert("error");
                    }
                });
            }
            else {
                if (!(stringCk.test(home)))
                    document.getElementById('errorhome').style.display = 'inline';

                if (!(stringCk.test(con)))
                    document.getElementById('errorcon').style.display = 'inline';
            }
        }


        {{--Change the Contact info--}}
        function updateContactInfo(id)
        {
            var address = document.getElementById("Address").value;
            var tp = document.getElementById("ContactNo").value;

            //alert(tp);
            //to check if the string contains numbers
            var phoneCk = /^\d{10}$/;

            if(phoneCk.test(tp))
            {
                document.getElementById('errortel').style.display = 'none';

                $.ajax({

                    type: "POST",
                    url: 'updateContactInfo',
                    data: {
                        id:id, address:address, tp:tp
                    },
                    dataType: 'html',
                    success: function (data) {
                        document.getElementById("presonalinfo").innerHTML = data;
                        // alert(data);
                    },
                    error: function (err) {
                        alert("error");
                    }
                });
            }
            else
                document.getElementById('errortel').style.display = 'inline';

        }


        {{--Change the Appearence--}}
        function updateAppearance(id)
        {
            var height = document.getElementById("height").value;
            var hair = document.getElementById("hair").value;
            var body = document.getElementById("bodyType").value;
            var complexion = document.getElementById("complexion").value;

            //to check if the string contains numbers
            var heightCk =  /^[0-9.]+$/;

            if(heightCk.test(height))
            {
                document.getElementById('errorheight').style.display = 'none';

                $.ajax({

                    type: "POST",
                    url: 'updateAppearance',
                    data: {
                        id:id, height:height, hair:hair, complexion:complexion, body:body
                    },
                    dataType: 'html',
                    success: function (data) {
                        document.getElementById("presonalinfo").innerHTML = data;
                        // alert(data);
                    },
                    error: function (err) {
                        alert("error");
                    }
                });
            }
            else {
                if (!(heightCk.test(height)))
                    document.getElementById('errorheight').style.display = 'inline';

            }
        }


    </script>
    @parent
@stop
