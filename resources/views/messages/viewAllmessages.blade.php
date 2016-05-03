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




<div class="mainpanel">
  <div class="emailcontent">
    <div class="email-options">
      <div class="settings">
        <a href="" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Archive"><i class="fa fa-archive"></i></a>
        <a href="" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Report Spam"><i class="fa fa-exclamation-triangle"></i></a>
        <a href="" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Move to Folder"><i class="fa fa-folder-open"></i></a>
        <a href="" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Add Tag"><i class="fa fa-tag"></i></a>
        <a href="" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Move to Trash"><i class="fa fa-trash"></i></a>
        <a href="" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="More"><i class="fa fa-ellipsis-v"></i></a>
      </div>

      <label class="ckbox">
        <input type="checkbox"><span></span>
      </label>
    </div><!-- email-options -->
    <div class="list-group">
    <?php foreach( $result as $row){  $x=$row->status; if($x==0){  ?>

      <div class="list-group-item unread">
        <div class="list-left">
          <label class="ckbox ckbox-danger">
            <input type="checkbox" checked><span></span>
          </label>
          <a href="view_Selected_messages<?php echo $row->id; ?>"><span class="markstar"><i class="glyphicon glyphicon-star-empty"></i></span></a>

        </div>
        <div class="media">
          <div class="media-left">
            <img class="media-object img-circle" src="mingleImages/1.jpg" alt="">
          </div>
          <div class="media-body">
            <span class="pull-right"><?php echo $row->time; ?></span>
            <h5 class="media-heading"><?php echo $row->name; ?></h5>
            <h5><?php echo $row->message; ?></h5>
          </div><a href="eleteMessagesB_<?php echo $row->id; ?>"><span class="pull-right"><i class="fa fa-trash"></i></span></a>
{{--
          <p>Your new commission account can now have up to $26,184.00. You were approved for the amount...</p>
--}}
        </div>
      </div>

      <?php }else{ ?>
      <div class="list-group-item">
        <div class="list-left">
          <label class="ckbox">
            <input type="checkbox"><span></span>
          </label>

          <a href="view_Selected_messages<?php echo $row->id; ?>"><span class="markstar"><i class="glyphicon glyphicon-star"></i></span></a>

          {{--<span class="markstar"><i class="glyphicon glyphicon-star"></i></span>--}}
          {{--<span class="attachment"><i class="fa fa-paperclip"></i></span>--}}
        </div>
        <div class="media">
          <div class="media-left">
            <img class="media-object img-circle" src="mingleImages/2.jpg" alt="">
          </div>
          <div class="media-body">
            <span class="pull-right"><?php echo $row->time; ?></span>
            <h5 class="media-heading"><?php echo $row->name; ?></h5>
            <h5><?php echo $row->message; ?></h5>
          </div><a href="eleteMessagesB_<?php echo $row->id; ?>"><span class="pull-right"><i class="fa fa-trash"></i></span></a>
{{--
          <p>These technologies will contain, by definition, a level of insight about how the network is operating that...</p>
--}}
        </div>
      </div>

      <?php }} ?>

    <div class="contentpanel emailpanel">
      <h3 class="nomail">No mail selected</h3>
      <div class="mailcontent hide">
        <div class="email-header">
          <div class="pull-right">
            1 hour ago &nbsp;
            <div class="btn-group mr5">
              <button class="btn btn-default" type="button"><i class="fa fa-reply"></i></button>
              <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul role="menu" class="dropdown-menu dm-icon pull-right">
                <li><a href="#"><i class="fa fa-reply-all"></i> Reply to All</a></li>
                <li><a href="#"><i class="fa fa-arrow-right"></i> Foward</a></li>
                <li><a href="#"><i class="fa fa-print"></i> Print</a></li>
                <li><a href="#"><i class="fa fa-exclamation-triangle"></i> Report Spam</a></li>
                <li><a href="#"><i class="fa fa-trash"></i> Delete Message</a></li>
              </ul>
            </div>

            <div class="btn-group">
              <button class="btn btn-default" type="button"><i class="fa fa-angle-left"></i></button>
              <button class="btn btn-default" type="button"><i class="fa fa-angle-right"></i></button>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object img-circle" src="../images/photos/user1.png" alt="">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Christina R. Hill</h4>
              to: me, Floyd, Alia, Nicholas
            </div>
          </div><!-- media -->
        </div><!-- email-header -->

        <hr>

        <h3 class="email-subject">Envato Market: Your request for all earnings has been calculated <span class="markstar"><i class="glyphicon glyphicon-star"></i></span></h3>
        <div class="email-body">
          <p>Hi Elen,</p>



          <p>Your request to withdraw all earnings up until the end of May 2015 has been calculated.</p>
          <p>Children of the sun, see your time has just begun, searching for your ways, through adventures every day. Every day and night, with the condor in flight, with all your friends in tow, you search for the Cities of Gold. Ah-ah-ah-ah-ah... wishing for The Cities of Gold. Ah-ah-ah-ah-ah... some day we will find The Cities of Gold. Do-do-do-do ah-ah-ah, do-do-do-do, Cities of Gold. Do-do-do-do, Cities of Gold. Ah-ah-ah-ah-ah... some day we will find The Cities of Gold.</p>
          <p>Thunder, thunder, thundercats, Ho! Thundercats are on the move, Thundercats are loose. Feel the magic, hear the roar, Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thundercats!</p>
          <blockquote>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</blockquote>
          <p>Mutley, you snickering, floppy eared hound. When courage is needed, you're never around. Those medals you wear on your moth-eaten chest should be there for bungling at which you are best. So, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon, stop that pigeon. Howwww! Nab him, jab him, tab him, grab him, stop that pigeon now.</p>

        </div>

        <br>
        <hr>

        <h4 class="panel-title">Attachments:</h4>
        <ul class="list-unstyled list-attachments">
          <li><i class="fa fa-file-pdf-o"></i> <a href="">Template_Documentation.pdf</a></li>
          <li><i class="fa fa-file-pdf-o"></i> <a href="">Template_Documentation.pdf</a></li>
        </ul>

        <hr>

        <div class="form-group email-editor">
          <div id="summernote">Reply</div>
        </div>
        <button class="btn btn-success">Send Message</button>
        <button class="btn btn-default">Save as Draft</button>

        <br><br>


      </div><!-- mailcontent -->
    </div><!-- contentpanel -->

  </div><!-- mainpanel -->



@stop


@section('js_ref')
@parent

@stop
