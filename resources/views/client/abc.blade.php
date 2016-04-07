@extends('app')
@section('pageTitle','Admin Panel')
@section('css_ref')
    @parent
@stop
@section('content')
    <div id="dom-target" style="display: none;">
        <?php
        echo htmlspecialchars(Auth::user()->username);
        ?>
    </div>
<form id="myForm" name="myForm">
    <button type="button" class="btn btn-primary btn-lg" onclick="return sendDateReq()" style="margin-left: 20px;">
        Send a date request
    </button>
</form>


{{--
    <div class="row">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>


        <div class="col-md-3 col-lg-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs nav-line nav-justified">
                        <li class="active"><a href="#daterequests12" data-toggle="tab"><strong>Date requests</strong></a></li>
                        <li><a href="#upcomingdates12" data-toggle="tab"><strong>Upcoming dates</strong></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="daterequests12" style="padding-top:10px;overflow-y:scroll;overflow-x:hidden;word-wrap:break-word;height: 190px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p style="font-size: medium;">*User wants to go on a date with you.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="text-align: center;">
                                        <button class="btn btn-success btn-sm" style="padding-right: 10px; margin-right: 5px;">Accept</button>
                                        <button class="btn btn-danger btn-sm" style="padding-left: 10px;margin-left: 5px;">Decline</button>
                                    </div>
                                </div>
                                <hr style="margin: 5px">
                            </div>

                        </div>
                        <div class="tab-pane" id="upcomingdates12">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><p class="text-primary">Let *USER know your </p> </h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
--}}


@stop


@section('js_ref')
    @parent
    <script>
        function sendDateReq() {
            var div = document.getElementById("dom-target");
            var username = div.textContent;

            $.ajax({
                url: '/sendDateRequest',
                type: 'post',
                data: {
                    username: username
                },
                dataType: 'json',
                success: function (data) {
                    alert(data);
                },
                error: function (err, req) {
                    alert(arr);
                },
            });

            return false;
        }




    </script>
@stop
