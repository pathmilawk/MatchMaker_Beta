@extends('app')
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
                        <th></th>
                        <th></th>
                        <th ></th>
                        <th></th>

                        <th class="text-right"></th>

                    </tr>
                    </thead>
                    <tbody>

                    <!--Suceess messages-->
                    <h4 style="color: blue"><?php echo Session::get('messagesucessmingl'); ?></h4>
                    <?php  foreach($result as $row){
                    ?>

                    <tr>

                        <td class="text-center">
                            <label class="ckbox ckbox-primary">
                                <input type="checkbox"><span></span>
                            </label>
                        </td>


                        <td><h4><?php echo $row->name ?></h4></td>
                        <td><img  src="{{asset($row->path)}}" alt="" /></td>

                        <td>
                            <ul class="table-options">
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-primary btn-quirk" data-toggle="modal" data-target="#myModal">Send Message</button>

                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body">


                                                <div class="row">

                                                    <div class="col-md-9">
                                                        <div class="panel">
                                                            <div class="panel-heading nopaddingbottom">
                                                            </div>
                                                            <div class="panel-body">
                                                                <h4>Message</h4>
                                                                <hr>
                                                                <form id="basicForm" action="saveMessages<?php echo $row->id; ?>" class="form-horizontal">
                                                                    {{--<div class="form-group">
                                                                        <label class="col-sm-9 control-label">Name <span class="text-danger">*</span></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" name="name" class="form-control" placeholder="Type your name..." required />
                                                                        </div>
                                                                    </div>--}}

                                                                   {{-- <div class="form-group">
                                                                        <label class="col-sm-9 control-label">Email <span class="text-danger">*</span></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="email" name="email" class="form-control" placeholder="Type your email..." required />
                                                                        </div>
                                                                    </div>--}}



                                                                    <div class="form-group">
                                                                        <label class="col-sm-9 control-label">Message <span class="text-danger">*</span></label>
                                                                        <div class="col-sm-9">
                                                                            <textarea rows="9" class="form-control" placeholder="Type your Message..." name="msg"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <hr>

                                                                    <div class="row">
                                                                        <div class="col-sm-9 col-sm-offset-3" class="modal-foote">
                                                                           <input type="submit" class="btn btn-success btn-quirk btn-wide mr5" value="Submit">
                                                                            <button type="reset" class="btn btn-quirk btn-wide btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                                <!--scrppt for save the data from the modal-->
                                                                {{--<script>
                                                                    $(function(){
                                                                        $('basicForm').on('submit', function(e){
                                                                            e.preventDefault();
                                                                            $.ajax({
                                                                                url: "saveMessages.$row->id",
                                                                                type: "POST",
                                                                                data: $("basicForm").serialize(),
                                                                                success: function(data){
                                                                                    alert("Successfully submitted.")
                                                                                }
                                                                            });
                                                                        });
                                                                    });
                                                                </script>
--}}
                                                            </div><!-- panel-body -->
                                                        </div><!-- panel -->

                                                    </div><!-- col-md-6 -->

                                                </div>

                                            </div>
                                        </div>

                                        <li><a href=""><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </td>
                        <?php unset($row->id); }?>


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

