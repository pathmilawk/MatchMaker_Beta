@extends('master_page')
@section('css_ref')
    @parent
@stop

@section('content')


    <div class="row">

{{--
        Image Upload title comes here
--}}

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading nopaddingbottom">
                    <h4 class="panel-title">Image Uploader</h4>


                    <br>

{{--
                    Sucess Message Area
--}}
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4 style="color: blue;font-size:12px;font-family: sans-serif "><?php echo Session::get('message'); Session::forget('message')?></h4>
                        .
                    </div>


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
                        <input type="submit" class="btn btn-success btn-quirk btn-wide mr5" >

{{--
                    If form sucess it will go to the link editUploadImage Route
--}}
                        <!--go to the set Add panel-->
                           <a href="editUploadImage" ><input type="button" class="btn btn-success btn-quirk btn-wide mr5" value="Edit"></a>


                    </form>
                </div><!-- panel-body -->
            </div><!-- panel -->

        </div><!-- col-md-6 -->



</div>

@stop


@section('js_ref')

    @parent
@stop





