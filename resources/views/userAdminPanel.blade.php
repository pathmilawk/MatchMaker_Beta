@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')

    <script>
        function del(){
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

    <script>
        function deac(){
            var x = confirm("Are you sure you want to Deactivate?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

    <script>
        function act(){
            var x = confirm("Are you sure you want to Activate This Account?");
            if (x)
                return true;
            else
                return false;
        }
    </script>


    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Admin Pannel</strong><a href="" class="alert-link"></a>
    </div>

    <br>
    <div class="col-sm-4 col-md-12"  style="margin-left: 0px;margin-right: 10px">
        <div class="panel panel-danger panel-weather">
            <div class="panel-heading">
                <h4 class="panel-title">All Users</h4>

                <div class="page-icon"><i class="icon ion-person-stalker"></i></div>

            </div>
            <div class="panel-body inverse">
                {{--table--}}


                {{--  <form method="POST" action="SearchUsers" id="search">
                    <div class="form-group" style="margin-left: 10px" >

                       <div class="col-md-3">
                           <input type="text" name="name" class="form-control" placeholder="Type name..." required />
                           <br>
                           <button class="btn btn-quirk btn-wide btn-default" type="submit" value="Search"></button>

                       </div>
                    </div>
                   </form>--}}
                <div class="col-lg-3">
                    <form method="POST" action="SearchUsers" id="search">
                        <div class="input-group mb4">
                            <input type="text" class="form-control" name="name" placeholder="Search here">
                          <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                         </span>
                        </div>
                    </form>
                </div>
                <script>
                    $(function(){
                        $('search').on('submit', function(e){
                            e.preventDefault();
                            $.ajax({
                                url: "SearchUsers",
                                type: "POST",
                                data: $("basicForm").serialize(),
                                success: function(data){
                                    alert("Successfully submitted.")
                                }
                            });
                        });
                    });
                </script>

                <br>
                <br>


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
                                <th>Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Action</th>
                                {{--<th class="text-right">Salary</th>--}}
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
                                <td><?php echo $row->name; ?></td>
                                <td class="text-center"><?php echo $row->email; ?></td>
                                <td>
                                    <ul class="table-options">
                                        <li><a href="DeleteUsers_<?php echo $row->id; ?>"><i class="fa fa-trash" onclick="return del()"></i></a></li>

                                        <?php $x=$row->admin_activate_state; if($x=="activate"){  ?>

                                        <li><a href="DeactivateUsers_<?php echo $row->id; ?>"><i class="fa fa-unlock" onclick="return deac()" ></i></a></li>

                                        <?php }else{ ?>
                                        <li><a href="ActivateUsersByAd_<?php echo $row->id; ?>"><i class="fa fa-lock" onclick="return act()" ></i></a></li>
                                        <?php } ?>
                                        <ul>
                                </td>
                                {{--<td class="text-right">2012/03/29</td>
                                <td class="text-right">$433,060</td>--}}
                            </tr>

                            <?php }?>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div>

            </div>
        </div><!-- row -->

        {{--end of the table--}}


    </div>
    </div>

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>FeedBacks</strong><a href="" class="alert-link"></a>
    </div>


    <div class="col-sm-4 col-md-12">
    <div class="panel panel-danger panel-weather">
        <div class="panel-heading">
            <h4 class="panel-title">Deactivated Users FeedBacks</h4>
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
                            <th>Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Comment</th>
                            <th class="text-center">Action</th>
                            {{--<th class="text-right">Salary</th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        <?php  foreach($result2 as $row2){
                        ?>
                        <tr>
                            <td class="text-center">
                                <label class="ckbox ckbox-danger">
                                    <input type="checkbox"><span></span>
                                </label>
                            </td>
                            <td><?php echo $row2->name; ?></td>
                            <td class="text-center"><?php echo $row2->email; ?></td>
                            <td class="text-center"><?php echo $row2->comment; ?></td>
                            <td>
                                <ul class="table-options">
                                    <li><a href="DelteDelUsers_<?php echo $row2->id; ?>"><i class="fa fa-trash" onclick="return del()"></i></a></li><ul>
                            </td>
                            {{--<td class="text-right">2012/03/29</td>
                            <td class="text-right">$433,060</td>--}}
                        </tr>

                        <?php }?>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div>

        </div>
    </div>










@stop


@section('js_ref')
    @parent

@stop