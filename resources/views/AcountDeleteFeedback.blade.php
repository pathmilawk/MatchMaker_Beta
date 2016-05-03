@extends('app')
@section('css_ref')
    @parent
@stop

@section('content')


    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Customer Feedback</strong><a href="" class="alert-link"></a>
    </div>


        <div class="col-md-12">

            <div class="panel" >
                <div class="panel-heading nopaddingbottom">
                    <h4 class="panel-title">FeedBack Form</h4>
                </div>
                <div class="panel-body">
                    <hr>
                    <form id="feedback" action="submitFeedBack" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" value="{{ $name }}" required />
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control" value="{{ $email }}" required />
                            </div>
                        </div>

                        <br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Comment <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <textarea rows="5" name="comment" class="form-control" placeholder="Type your comment..." required></textarea>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-danger btn-quirk btn-wide mr5" type="submit">Inform</button>
                                <button type="reset" class="btn btn-quirk btn-wide btn-default">Back</button>
                            </div>
                        </div>

                    </form>
                </div><!-- panel-body -->
            </div><!-- panel -->

        </div><!-- col-md-6 -->
    </form>

@stop


@section('js_ref')
    @parent

@stop