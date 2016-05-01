@extends('app')
@section('css_ref')
@parent
@stop

@section('content')
<!--Confirmation box-->
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
      <!--start of pannel-->
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <!--start of table-->
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
                  <th >Message</th>
                  <th>Time</th>

                  <th class="text-right"></th>

                </tr>
              </thead>
              <tbody>


                <!--loop to show table-->
              <?php  if ($result){ foreach($result as $row){
              ?>

                <tr>

                  <td class="text-center">
                    <label class="ckbox ckbox-primary">
                      <input type="checkbox"><span></span>
                    </label>
                  </td>

                  <!--navigate through table-->
                  <td><?php echo $row->name ?></td>
                  <td><?php echo $row->subject ?></td>
                    <td ><?php echo $row->message ?></td>
                  <td><?php echo $row->time ?></td>


                    <td>
                    <ul class="table-options">

                      <!--button to view each messahe-->
                      <li><a href="view_Selected_messages{{$row->id}}"><i class="fa fa-pencil"></i></a></li>
                      <!--delete Button-->
                      <li><a href="deleteMessage{{$row->id}}"><i class="fa fa-trash" onclick="return del()"></i></a></li>
                    </ul>
                  </td>
                  <?php }}?>


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
