
@extends('app')
@section('css_ref')
    @parent
@stop

@section('content')


    {{--
        put a like
    --}}
    <script>
        function my(){
            alert('You Have Add a Like');

        }
    </script>


    <div class="col-md-12">

        <h4 class="panel-title mb5"></h4>
        <p class="mb20"></p>

        <div class="panel panel-map-sidebar" style="background-color: white">
            <div class="row" style="background-color: white">
                <div class="col-md-7 main">
                    <div id="mapShiftWorker2" class="map-wrapper" style="background-color: white">


                        {{--
                        Loop to navigate itteratively
                        --}}
                        <?php foreach($result as $row){

                        if (Session::has('val'))
                        {
                            $x=Session::get('val');

                            if($x>9)
                            {
                                echo "Error";
                            }
                        }

                        else{

                            $x=1;
                        }

                        ?>
                        {{--
                        navigate itteratively through getnext route
                        increment x
                        action perform
                        Set the Path using sessions
                        --}}
                        <img  src="{{asset($row->image_path)}}" alt="" />
                        <form action="getnext<?php echo $x;$x++;  if($x<9){Session::put('val',$x);} else{$value = Session::pull('val', 1);
                        }?>" method="post">


                            <br>

                            <table>
                                <tr>
                                    <div style="background-color: white">
                                        <td>
                                            {{--
                                            Add favaritues to the list
                                            --}}
                                            <a href="mingle_fav_view<?php echo $row->id ?>"  class="btn btn-danger btn-quirk" style="margin-left: 70px;width: 110px;height: 40px" onclick="my()"><span class="glyphicon glyphicon-heart"></span>Like
                                            </a>
                                        </td>
                                        <td>

                                            {{--
                                            Message same menu
                                            --}}

                                            <a href="mingle_fav_view<?php echo $row->id ?>"  class="btn btn-primary btn-quirk" style="margin-left: 10px;width:110px ;height: 40px;margin-top: 12px" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-envelope"></span>Message</a>


                                            <div class="container">
                                                <h2></h2>
                                                <!-- Trigger the modal with a button -->

                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Modal Header</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Some text in the modal.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>




                                        </td>
                                        <td>
                                            <a href="gggg" style="margin-left: 40px"></a>

                                        </td>
                                    </div>
                                </tr>
                            </table>
                            <hr>
                            <!-- go to the view mingle table-->
                            <input type="submit" name="next" value="Next" class="btn btn-primary btn-quirk">
                            <a href="viewMingle_table"><input type="button" name="fav" value="View Faviourite" class="btn btn-primary btn-quirk" style="float: right"></a>

                        </form>






                    </div>
                </div>
                <div class="col-md-5 map-sidebar">
                    <div class="panel-body">
                        <h4 class="panel-title mb20"><?php echo $row->name ?></h4>
                        <p><?php echo $row->description ?></p>
                        <?php $x++; }?>
                                <!--increment x-->

                        <form class="form" action="#">
                            <div class="form-group">
                            </div>

                            <div class="form-group">
                            </div>

                            <div class="form-group">

                                <div class="btn-group">

                                </div>
                            </div>

                            <hr>
                            <!--still not implamented-->
                            <button class="btn btn-success btn-block">Go to Profile</button>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- panel -->

    </div><!-- col-md-4 -->

@stop


@section('js_ref')
    @parent

@stop
