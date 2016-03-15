@extends('master_page')
@section('css_ref')
    @parent
@stop

@section('content')

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          xmlns="http://www.w3.org/1999/html">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



    <h4> <?php echo 'View' . ' ' . $nam . '"s Message'?></h4>
    <hr>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
            style="margin-left: 10px">View Message
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <hr>
                    <h4 class="modal-title"><?= $nam; ?></h4>

                    <p><?= $messag; ?></p>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <br>
        <hr>

        <div class="col-md-4 col-sm-6">
            <div class="panel-group" id="accordion3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">
                                Messaging
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne3" class="panel-collapse collapse in">

                        <h4 style="margin-left: 12px"><?= $nam; ?></h4>

                        <h5 style="margin-left: 12px"><?= $subjec; ?></h5>
                        <hr>

                        <span><h5 style="margin-left: 12px"><i class="fa fa-paper-plane"></i> <?= $messag; ?>
                            </h5></span>

                        <div class="media-body">
                            <span class="pull-right"><?= $tim; ?></span>

                        </div>


                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion3" href="#collapseTwo3">
                                Reply
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo3" class="panel-collapse collapse">
                        <div class="panel-body">

                            <input type="text" name="subject" placeholder="Subject" style="width: 300px">
                            <hr>
                            <textarea class="note-codable" style="width: 300px;height: 100px"
                                      placeholder="Message"></textarea>
                            <input type="button" class="btn btn-info btn-lg" name="send" value="Send"></button>

                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion3"
                               href="#collapseThree3">
                                Forward
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
        </div>
        <!-- col-md-4 -->


        <form action="viewAllmessages">
            <input type="submit" value="Back" class="btn btn-info btn-lg">
        </form>
    </diV>
@stop


@section('js_ref')
    @parent

@stop