
@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>User Log Activities</strong><a href="" class="alert-link"></a>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-danger nomargin">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    <label class="ckbox ckbox-danger">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </th>

                                <th class="text-center">User Id</th>
                                <th class="text-right">Name</th>
                                <th class="text-right">Time</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($result as $row){?>
                            <tr>
                                <td class="text-center">
                                    <label class="ckbox ckbox-danger">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </td>
                                <td><?php echo $row->id; ?></td>
                                <td class="text-center"><?php echo $row->name; ?></td>
                                <td class="text-right"><?php echo $row->time; ?></td>

                            </tr>
                            <?php }?>

                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                </div>
            </div><!-- panel -->
        </div>

@stop


@section('js_ref')

    @parent
@stop