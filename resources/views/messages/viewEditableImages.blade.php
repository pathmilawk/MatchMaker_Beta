@extends('master_page')
@section('css_ref')
    @parent
@stop

@section('content')


    <div class="panel">

        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover nomargin">
                    <thead>
                    <tr>
                        <th class="text-center">
                            <label class="ckbox ckbox-primary">
                                <input type="checkbox"><span></span>
                            </label>
                        </th>
                        <th>Advertistment</th>
                        <th>Action</th>

                        <th class="text-right"></th>

                    </tr>
                    </thead>
                    <tbody>



                    <?php  if ($result){ foreach($result as $row){
                    ?>

                    <tr>

                        <td class="text-center">
                            <label class="ckbox ckbox-primary">
                                <input type="checkbox"><span></span>
                            </label>
                        </td>


                        <td> <img  src="{{asset('images/'.$row->contentName )}}" alt="" /></td>



                        <td>
                            <ul class="table-options">
                                <li><a href="SetUploadedImage{{$row->id}}"><button class="btn btn-primary btn-quirk btn-stroke">Set as active</button></a></li>

                                <li><a href="deleteImage{{$row->id}}"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </td>
                        <?php }}?>


                    </tr>

                    <tr>
                        <form action="viewUploadmenu" method="post">
                            <td><input type="submit" class="btn btn-success btn-quirk btn-wide mr5" value="Back" ></td>
                        </form>
                    </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div>
    </div><!-- panel -->


@stop


@section('js_ref')

    @parent
@stop
