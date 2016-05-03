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
                            <a href="{!! $key->user_id !!}" class="profile-photo"><img class="img-circle img-responsive" src="{{asset('Profile_Pictures/'.$key->user_id.'/'.$key->picture)}}" alt=""></a>
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
                            <li class="list-group-item"> <p>Birthday</p> <p align="right">{{Auth::user()->birthDate}} {{Auth::user()->birthMonth}} {{Auth::user()->birthYear}}</p> </li>
                            <li class="list-group-item"> <p>Hometown</p> <p align="right">{{$key->hometown}}</p> </li>
                            <li class="list-group-item"> <p>Religion</p> <p align="right">{{$key->religion}}</p> </li>
                        </ul>

                        @if(Auth::user()->id == $key->user_id)
                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow" onclick="editProfile({{$key->user_id}})">Edit Profile</button>
                            <button class="btn btn-danger btn-quirk btn-block profile-btn-follow" onclick="changeProfilePicture({{$key->user_id}})">Change Profile Picture</button>
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
                                @if(Auth::user()->id == $key->user_id)
                                    <div class="panel panel-post-item">
                                        <button style="width:525px; display: inline;" class="btn btn-primary btn-quirk btn-block profile-btn-follow" onclick="loadPhotos({{$key->user_id}})">View All</button>
                                        <button style="width:525px; display: inline;" class="btn btn-primary btn-quirk btn-block profile-btn-follow" onclick="addPhoto()">Add Photo</button>
                                        <button style="width:525px; display: inline;" class="btn btn-primary btn-quirk btn-block profile-btn-follow" onclick="deletePhotos()">Delete Photo</button>
                                    </div>
                                    <div class="panel panel-post-item" id="load">
                                        {{--content will be loaded via ajax--}}
                                    </div>
                                @elseif( $key->allowNonFriendPhotos)
                                    <div class="panel panel-post-item">
                                        <button style="width:525px; display: inline;" class="btn btn-primary btn-quirk btn-block profile-btn-follow" onclick="loadPhotos({{$key->user_id}})">View All</button>
                                    </div>
                                    <div class="panel panel-post-item" id="load">
                                        {{--content will be loaded via ajax--}}
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
                        <div class="col-sm-6 col-md-12" id="suggested">
                            <div class="panel" style="align-content: center;">
                                <button style="margin: 10px; margin-left:60px;" class="btn btn-primary" value="View Suggested People" onclick="suggestedPartners({{$key->user_id}})">View Suggested People</button>
                                {{--content will Load via ajax function suggestedPartners--}}
                            </div>
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

        /*Javascript function that send request using ajax*/
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

        /*Load editProfile.blade using ajax*/
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

        /*Change the profile picture*/
        function changeProfilePicture(id)
        {
            $.ajax({

                type: "POST",
                url: 'changeProfilePicture_'+id,
                data: {
                },
                dataType: 'html',
                success: function (data) {
                    document.getElementById("presonalinfo").innerHTML = data;
                },
                error: function (err) {
                    alert("error");
                }
            });

        }

        /*Load suggested partners*/
        function suggestedPartners(id)
        {
            $.ajax({
                type: "POST",
                url: 'suggestedPartners_'+id,
                data: {
                },
                dataType: 'html',
                success: function (data) {
                    document.getElementById("suggested").innerHTML = data;
                },
                error: function (err) {
                    alert("error");
                }
            });
        }

        /*Add photos*/
        function addPhoto()
        {
            $.ajax({
                type: "POST",
                url: 'addPhoto',
                data: {
                },
                dataType: 'html',
                success: function (data) {
                    document.getElementById("load").innerHTML = data;
                },
                error: function (err) {
                    alert("error");
                }
            });
        }

        /*Load photos*/
        function loadPhotos(id)
        {
            $.ajax({
                type: "POST",
                url: 'loadPhoto_'+id,
                data: {
                },
                dataType: 'html',
                success: function (data) {
                    document.getElementById("load").innerHTML = data;
                },
                error: function (err) {
                    alert("error");
                }
            });
        }

        /*Delete photos*/
        function deletePhotos()
        {
            var photos =  document.getElementsByName("photoSelected");
            var len = photos.length;

            for(k=0;k< len;k++)
            {
                if(photos[k].checked == true)
                {
                    var delP = photos[k].value;
                }
            }

            $.ajax({
                type: "POST",
                url: 'deletePhotos',
                data: {
                    delP:delP
                },
                dataType: 'html',
                success: function (data) {
                    document.getElementById("load").innerHTML = data;
                    alert('Deleted');
                },
                error: function (err) {
                    alert("error");
                }
            });
        }

        /*****************************************************************************/
        /*Java Scripts for editProfile.blade page*/
        /*****************************************************************************/

        /*Change the Basic info*/
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
                        alert("Updated");
                        document.getElementById("presonalinfo").innerHTML = data;
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


        /*Change the Contact info*/
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
                        alert("Updated");
                        document.getElementById("presonalinfo").innerHTML = data;
                    },
                    error: function (err) {
                        alert("error");
                    }
                });
            }
            else
                document.getElementById('errortel').style.display = 'inline';

        }


        /*Change the Appearence*/
        function updateAppearance(id)
        {
            var height = document.getElementById("height").value;
            var hair = document.getElementById("hair").value;
            var body = document.getElementById("bodyType").value;
            var complexion = document.getElementById("complexion").value;

            //to check if contains Strings
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
                        alert("Updated");
                        document.getElementById("presonalinfo").innerHTML = data;

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

        /*Change the Education details*/
        function updateEducation(id)
        {
            var des = document.getElementById("education").value;
            var occ = document.getElementById("occupation").value;

            var stringCk = /^[A-Za-z ]+$/;

            if((stringCk.test(occ)))
            {
                document.getElementById('erroroccu').style.display = 'none';

                $.ajax({

                    type: "POST",
                    url: 'updateEducation',
                    data: {
                        id: id, des: des, occ:occ
                    },
                    dataType: 'html',
                    success: function (data) {
                        alert("Updated");
                        document.getElementById("presonalinfo").innerHTML = data;
                    },
                    error: function (err) {
                        alert("error");
                    }
                });
            }
            else {
                    document.getElementById('erroroccu').style.display = 'inline';

            }

        }

        /*Change the other details*/
        function updateOther(id)
        {
            var d = document.getElementById("day").value;
            var y = document.getElementById("year").value;
            var m = document.getElementById("month").value;
            var about = document.getElementById("about").value;
            var sign = document.getElementById("sign").value;
            var religion = document.getElementById("religion").value;
            var la = document.getElementById("lan").value;
            var mt = document.getElementById("mLan").value;
            var inter = document.getElementById("in").value;
            var drinking = document.getElementById("drinking").value;
            var smoking = document.getElementById("smoking").value;

            $.ajax({

                type: "POST",
                url: 'updateOther',
                data: {
                    id:id, d:d, m:m, y:y, about:about, sign:sign, religion:religion, la:la, mt:mt, inter:inter, drinking:drinking, smoking:smoking
                },
                dataType: 'html',
                success: function (data) {
                    alert("Updated");
                    document.getElementById("presonalinfo").innerHTML = data;

                },
                error: function (err) {
                    alert("error");
                }
            });

        }



    </script>
    @parent
@stop
