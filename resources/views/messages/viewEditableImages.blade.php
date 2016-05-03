@extends('admin')
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
                <?php $x=Session::get('addmessage'); if(isset($x)){ ?>
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Congradulations!</strong><a href="" class="alert-link"><?php echo Session::get('addmessage'); ?></a>.
                </div>
                <?php } ?>

                <table class="table table-danger">
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


                            <div class="thmb">
                        <div class="thmb-prev">
                            <td><img  src="{{asset('images/'.$row->contentName )}}" class="img-responsive" alt="" /></td>

                           {{--<td> <img src="../images/mp3.png" class="img-responsive" alt="" /></td>--}}
                        </div>
                                </div>





                        <!--set ad buttons-->
                        <td>
                            <ul class="table-options">
                                <li><a href="SetUploadedImageone{{$row->id}}"><button class="btn btn-danger btn-quirk btn-stroke">Set as AD 1</button></a></li>
                                <li><a href="SetUploadedImagetwo{{$row->id}}"><button class="btn btn-danger btn-quirk btn-stroke">Set as AD 2</button></a></li>
                                <li><a href="SetUploadedImagethree{{$row->id}}"><button class="btn btn-danger btn-quirk btn-stroke">Set as AD 3</button></a></li>
                                <li><a href="SetUploadedImagefour{{$row->id}}"><button class="btn btn-danger btn-quirk btn-stroke">Set as AD 4</button></a></li>

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
                        <form action="test" method="get">
                            <td><input type="submit" class="btn btn-danger btn-quirk btn-wide mr5" value="Back" ></td>
                        </form>

                            <form action="/" method="get">
                            <td><input type="submit" class="btn btn-danger btn-quirk btn-wide mr5" value="Test"  ></td>
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
