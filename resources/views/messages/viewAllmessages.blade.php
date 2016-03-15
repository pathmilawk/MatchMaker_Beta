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
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Time</th>

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


                        <td><?php echo $row->name ?></td>
                        <td><?php echo $row->subject ?></td>
                        <td><?php echo $row->message ?></td>
                        <td><?php echo $row->time ?></td>


                        <td>
                            <ul class="table-options">
                                <li><a href="view_Selected_messages{{$row->id}}"><i class="fa fa-pencil"></i></a></li>

                                <li><a href="deleteMessage{{$row->id}}"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </td>
                        <?php }}?>


                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- table-responsive -->
        </div>
    </div><!-- panel -->



@stop


@section('js_ref')
    @parent

@stop
