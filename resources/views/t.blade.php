
@extends('master_page')
@section('css_ref')
    @parent
@stop

@section('content')

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          xmlns="http://www.w3.org/1999/html">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<div style="margin-left: 80px">

<h4 class="panel-title mb5">Messagings</h4>
<p class="mb15"></p>




        <div class="row">
    <div class="col-md-10 col-sm-12">
        <div class="panel-group" id="accordion3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">
                            View Message
                        </a>
                    </h4>
                </div>
                <div id="collapseOne3" class="panel-collapse collapse in">
                    <div class="panel-body">

                        <h4 style="margin-left: 12px"><?= $nam; ?></h4>

                        <h5 style="margin-left: 12px"><?= $subjec; ?></h5>
                        <hr>

                        <span><h5 style="margin-left: 12px"><i class="fa fa-paper-plane"></i> <?= $messag; ?></h5></span>

                        <div class="media-body">
                            <span class="pull-right"><?= $tim; ?></span>

                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion3" href="#collapseTwo3">
                            Send a Message
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo3" class="panel-collapse collapse">
                    <div class="panel-body">


                        <input type="text" name="subject" placeholder="Subject" style="width: 300px">
                        <hr>
                        <textarea class="note-codable" style="width: 300px;height: 100px" placeholder="Message"></textarea>
                        <input type="button" class="btn btn-info btn-lg" name="send" value="Send"></button>

                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion3" href="#collapseThree3">
                            Reply
                        </a>
                    </h4>
                </div>
                <div id="collapseThree3" class="panel-collapse collapse">
                    <div class="panel-body">



                        <input type="text" name="address" placeholder="Address" style="width: 300px">
                        <hr>
                        <input type="button" class="btn btn-info btn-lg" name="send" value="Send"></button>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- col-md-4 --></div><!-- col-md-6 -->
</div><!-- row -->

<div class="mb15"></div>


@stop


@section('js_ref')
    @parent

@stop