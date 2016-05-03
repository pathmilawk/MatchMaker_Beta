@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')



    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Message With Your Friends</strong><a href="" class="alert-link"></a>
    </div>

    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Messaging</h4>
                {{--
                                <p>Please provide your name, email address (won't be published) and a comment.</p>
                --}}
            </div>
            <div class="panel-body">
                <hr>
                <form id="basicForm" action="sendmessage" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Type your name..." required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" placeholder="Type your email..." required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">URL</label>
                        <div class="col-sm-8">
                            <input type="url" name="url" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Comment <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" placeholder="Type your comment..." required></textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
                            <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
                        </div>
                    </div>

                </form>
            </div><!-- panel-body -->
        </div><!-- panel -->

    </div><!-- col-md-6 -->



@stop


@section('js_ref')

    @parent
@stop
