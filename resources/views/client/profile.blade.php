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

                        <a href="" class="profile-photo"><img class="img-circle img-responsive" src="{{asset('uploads/'.$key->first_name.'/'.$key->user_id.'.png')}}" alt=""></a>
                        <h2 class="profile-name">{{ $key->first_name }} {{ $key->last_name }}</h2>
                        <h4 class="profile-designation">{{ $key->occupation }}</h4>

                        <ul class="list-group">
                            <li class="list-group-item"> <p>Birthday</p> <p align="right">1995.01.19</p> </li>
                            <li class="list-group-item"> <p>Hometown</p> <p align="right">{{$key->hometown}}</p> </li>
                            <li class="list-group-item"> <p>Religion</p> <p align="right">{{$key->religion}}</p> </li>
                        </ul>

                        <button class="btn btn-danger btn-quirk btn-block profile-btn-follow" onclick="sendRequest({{$key->user_id}})">Send Request</button>
                    </div>
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
                    <div class="profile-right-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified nav-line">
                            <li class="active"><a href="#presonalinfo" data-toggle="tab"><strong>Personal Information</strong></a></li>
                            <li><a href="#photos" data-toggle="tab"><strong>Photos</strong></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="presonalinfo">
                                @if($key->allowNonFriendDetails)
                                    <div class="panel panel-post-item">
                                        <div class="panel panel-post-item">
                                            <p>You have permission to see this person's details!</p>
                                        </div>
                                    </div><!-- panel panel-post -->
                                @else
                                    <div class="panel panel-post-item">
                                        <p>You have no permission to see this person's personal details!</p>
                                    </div>
                                @endif

                            </div><!-- tab-pane -->

                            <div class="tab-pane" id="photos">
                                @if($key->allowNonFriendPhotos)
                                    <div class="panel panel-post-item">
                                        <p>You have permission to see this person's photos!</p>
                                    </div>
                                @else
                                    <div class="panel panel-post-item">
                                        <p>You have no permission to see this person's photos!</p>
                                    </div>
                                @endif
                            </div>
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
    </script>
    @parent
@stop
