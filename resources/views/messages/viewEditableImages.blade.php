@extends('app')
@section('css_ref')
    @parent
@stop

@section('content')

{{--
    Java script for viewing the confirm Message
--}}

    <script>
        function del(){
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>


    <div class="panel">
        <!--start of panel-->
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="table-responsive">

{{--
                This will show the Success Mesages
--}}
                <!-- sucess message-->
                <h3 style="color: blue"><?php echo Session::get('addmessage'); ?></h3>
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


                    <!--start of table data-->
                    <?php  if ($result){ foreach($result as $row){
                    ?>

                    <tr>

                        <td class="text-center">
                            <label class="ckbox ckbox-primary">
                                <input type="checkbox"><span></span>
                            </label>
                        </td>

{{--
                        This will show the Image row by row
--}}


                        <td> <img  src="{{asset('images/'.$row->contentName )}}" alt="" /></td>


                        <!--set ad buttons-->
                        <td>
                            <ul class="table-options">
                                <li><a href="SetUploadedImageone{{$row->id}}"><button class="btn btn-primary btn-quirk btn-stroke">Set as AD 1</button></a></li>
                                <li><a href="SetUploadedImagetwo{{$row->id}}"><button class="btn btn-primary btn-quirk btn-stroke">Set as AD 2</button></a></li>
                                <li><a href="SetUploadedImagethree{{$row->id}}"><button class="btn btn-primary btn-quirk btn-stroke">Set as AD 3</button></a></li>
                                <li><a href="SetUploadedImagefour{{$row->id}}"><button class="btn btn-primary btn-quirk btn-stroke">Set as AD 4</button></a></li>

{{--
                                This will delete that add if confirmed
--}}

                                <li><a href="deleteImage{{$row->id}}" onclick="return del()"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </td>
                        <?php }}?>


                        </tr>
                        <!--back button-->
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
