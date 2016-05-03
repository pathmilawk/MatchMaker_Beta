
    <button class="btn btn-notice" data-toggle="dropdown">
        <i class="fa fa-globe"><span class="badge badge-notify" id="notification_count" style="background: rgba(255,0,0,0.6);position:relative;top: -12px;left: -8px;">{{ $notificationCount }}</span></i>
    </button>
    <div id="noticeDropdown" class="dropdown-menu dm-notice pull-right">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="active"><a data-target="#notification" data-toggle="tab">Notifications
                        ({{ $notificationCount }})</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="notification">
                    <ul class="list-group notice-list">
                        @foreach($results as $result)
                        <li class="list-group-item unread">
                            <div class="row">
                                @if($result->type=="Date")
                                    <div class="col-xs-2">
                                        <i class="fa fa-heart"></i>
                                     </div>
                                @elseif($result->type=="friend")
                                    <div class="col-xs-2">
                                        <i class="fa fa-user"></i>
                                       {{--
                                            <button id="accept" value="Accept" class="btn btn-primary"></button>
                                        </a>
                                        <a href="">
                                            <button id="reject" value="Reject" class="btn btn-primary"></button>
                                        </a>--}}
                                    </div>
                                @endif

                                @if($result->type=="Date")
                                    <div class="col-xs-10">
                                        <h5><a href="{{$result->linktogo}}">{{ $result->sender_username }} {{ $result->message }}</a></h5>
                                        <small>{{ $result->created_at }}</small>
                                        <button type="button" class="btn btn-primary btn-quirk" style="color:#0075b0;" data-toggle="modal" data-target="#myModal">Accept</button>
                                        <button type="button" class="btn btn-danger btn-quirk" style="color:red;" >Decline</button>
                                    </div>
                                    @elseif($result->type=="friend")
                                        <div class="col-xs-10">
                                            <h5><a href="{{$result->linktogo}}">{{ $result->sender_username }} <br>{{ $result->message }}</a></h5>
                                            <small>{{ $result->created_at }}</small>
                                            <a href="acceptReq">
                                                <button type="button" class="btn btn-primary btn-quirk" style="color:#0075b0;">Accept</button>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-quirk" style="color:red;" >Decline</button>
                                        </div>
                                    @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <a class="btn-more" href="">View More Notifications <i
                                class="fa fa-long-arrow-right"></i></a>
                </div>
                <!-- tab-pane -->
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><p class="text-primary">Let her know your preferences</p> </h4>
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
