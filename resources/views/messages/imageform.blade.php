@extends('master_page')
@section('css_ref')
    @parent
@stop

@section('content')


    <div class="row">

        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading nopaddingbottom">
                    <h4 class="panel-title">Image Uploader</h4>

                </div>
                <div class="panel-body">
                    <hr>

                    <form id="basicForm"  class="form-horizontal" action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" placeholder="Type your name..." required />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Choose Image <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" name="image" id="image">
                            </div>
                        </div>

                        <hr>
                        <input type="submit" class="btn btn-success btn-quirk btn-wide mr5" >



                           <a href="editUploadImage" ><input type="button" class="btn btn-success btn-quirk btn-wide mr5" value="Edit"></a>


                                {{--<button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>--}}
                    </form>
                </div><!-- panel-body -->
            </div><!-- panel -->

        </div><!-- col-md-6 -->






{{--
    <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
--}}

{{--
    <lable> Select Image to Upload</lable>
--}}
{{--
    <input type="file" name="image" id="image">
--}}
    {{--<input type="submit" value="Submit">--}}
    {{--<input type="hidden" value="{{ csrf_token() }}" name="_token">--}}
{{--
</form>
--}}

{{--<form action="{{ URL::to('viewUploadImage') }}" method="post">
    <input type="submit" value="Set" name="set">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>--}}

</div>

@stop


@section('js_ref')

    @parent
@stop





