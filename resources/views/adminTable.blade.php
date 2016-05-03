@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Admin Email Box</strong><a href="" class="alert-link"></a>
    </div>


    <div class="col-sm-4 col-md-12">
        <div class="panel panel-danger panel-weather">
            <div class="panel-heading">
                <h4 class="panel-title">Email Box</h4>
            </div>
            <div class="panel-body inverse">

                <div class="col-lg-3" style="margin-left: 10px">
                    <form method="POST" action="SearchDeletedUsers" id="search">
                        <div class="input-group mb4">
                            <input type="text" class="form-control" name="dname" placeholder="Search here">
                          <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                         </span>
                        </div>
                    </form>
                </div>
                <br>
                <br>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-danger table-striped nomargin">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    <label class="ckbox ckbox-danger">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </th>

                                <th class="text-center">Subject</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Time</th>
                                <th class="text-right">From</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php  foreach($result as $row){
                            ?>
                            <tr>
                                <td class="text-center">
                                    <label class="ckbox ckbox-danger">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </td>
                                <td><?php echo $row->subject; ?></td>
                                <td class="text-center"><?php echo $row->email; ?></td>
                                <td class="text-center"><?php echo $row->time; ?></td>
                                <td class="text-center"><?php echo $row->from; ?></td>
                                <td>
                                    <ul class="table-options">
                                        <li><a href=""><i class="fa fa-trash" onclick="return del()"></i></a></li>
                                        <li><a href="replyForAdminEmails_<?php echo $row->id; ?>"><i class="fa fa-reply" onclick="return del()"></i></a></li><ul>
                                </td>
                                {{--<td class="text-right">2012/03/29</td>
                                <td class="text-right">$433,060</td>--}}
                            </tr>

                            <?php }?>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <div class="col-md-2">
                            <div class="pull-left">
                        <div class="sidebar-btn-wrapper">
                            <a href="composeForAdminEmails" class="btn btn-danger btn-block">Compose</a>
                        </div>
                            </div>

                    </div><!-- table-responsive -->
                </div>

            </div>
        </div>


@stop


@section('js_ref')

    @parent
@stop