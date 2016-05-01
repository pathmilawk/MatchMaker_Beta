@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')


    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Advertisments</strong><a href="" class="alert-link"></a>
    </div>

    <div class="row" style="margin: 20px">

        {{--
                Image Upload title comes here
        --}}

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading nopaddingbottom">
                    <h4 class="panel-title">Upload Your Advertisment</h4>


                    <br>

                    {{--
                                        Sucess Message Area
                    --}}

                    <?php $x=Session::get('message'); if(isset($x)){ ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4 style="color: green;font-size:12px;font-family: sans-serif "><?php echo Session::get('message'); Session::forget('message')?></h4>

                    </div>
                    <?php }?>


                </div>
                <div class="panel-body">
                    <hr>

                    {{--
                                        If for sucess it will go to upload Route
                    --}}
                    <!--Form to upload image-->
                    <form id="basicForm"  class="form-horizontal" action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">

                        <!--start of title tag-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" placeholder="Type your Title..." required />
                            </div>
                        </div>

                        <!--start of choose image tag-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Choose Image <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" name="image" id="image">
                            </div>
                        </div>

                        <hr>
                        <!--Submit button-->
                        <input type="submit" class="btn btn-danger btn-quirk btn-wide mr5" >

                        {{--
                                            If form sucess it will go to the link editUploadImage Route
                        --}}
                        <!--go to the set Add panel-->
                        <a href="editUploadImage" ><input type="button" class="btn btn-danger btn-quirk btn-wide mr5" value="Edit"></a>


                    </form>
                </div><!-- panel-body -->
            </div><!-- panel -->

        </div><!-- col-md-6 -->



    </div>

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Advertisment Log</strong><a href="" class="alert-link"></a>
    </div>


<div class="col-lg-4" style="margin: 20px">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h4 class="panel-title">Log</h4>
        </div>

        <?php foreach($result as $row){?>
        <div class="panel-body">


            <ul class="media-list user-list">
                <li class="media">
                    <div class="media-left" >
                        <a href="#">
                           <img class="media-object img-circle" src="images/<?php echo $row->contentName; ?>">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading nomargin"><a href=""><?php echo $row->title; ?></a></h4>
                         <a href=""></a>
                        <small class="date"><i class="glyphicon glyphicon-time"></i><?php echo $row->time; ?> </small>
                    </div>
                </li>



            </ul>

        </div>
        <?php }?>
    </div><!-- panel -->
    </div><!-- col-sm-4 -->

@stop


@section('js_ref')

    @parent
@stop





