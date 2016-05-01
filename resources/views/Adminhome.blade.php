@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')




    <div style="margin: 20px">
    <div class="row panel-quick-page">
        <div class="col-xs-4 col-sm-5 col-md-4 page-user">
           <div class="panel">
                <div class="panel-heading">
                    <a href="userAdmin"> <h4 class="panel-title">Manage Users</h4></a>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-male"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 page-products">
            <div class="panel">
                <div class="panel-heading">
                   <a href="test"> <h4 class="panel-title">Manage Advertisments</h4></a>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-shopping-cart"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 page-events">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Events</h4>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-exchange"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-2 page-messages">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Messages</h4>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-envelope"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-5 col-md-2 page-reports">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Reports</h4>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-bar-chart"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-2 page-statistics">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Statistics</h4>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-stack-overflow"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 page-support">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Manage Support</h4>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-support"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-2 page-privacy">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Privacy</h4>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-female"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-2 page-settings">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Settings</h4>
                </div>
                <div class="panel-body">
                    <div class="page-icon"><i class="fa fa-check"></i></div>
                </div>
            </div>
        </div>
    </div><!-- row -->
    </div>



    <div style="margin-left: 10px">
        <div class="col-sm-5 col-md-4 col-lg-6">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">Recently Logged Uers</h4>
                </div>
                <div class="panel-body">
                    <ul class="media-list user-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-circle" src="images/adminuser.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading nomargin"><a href="">Floyd M. Romero</a></h4>
                                is now following <a href="">Christina R. Hill</a>
                                <small class="date"><i class="glyphicon glyphicon-time"></i> Just now</small>
                            </div>
                        </li>



                    </ul>
                </div>
            </div><!-- panel -->



@stop


@section('js_ref')

    @parent
@stop