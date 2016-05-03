
@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')


    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Email Form</strong><a href="" class="alert-link"></a>
    </div>



    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Emails</h4>
                <br>

                <?php  if(isset($message)){ ?>
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Well done!</strong> Email Sent Successfully..! <a href="" class="alert-link"></a>.
                </div>
                <?php } ?>
                {{--

                                <p>Please provide your name, email address (won't be published) and a comment.</p>
                --}}
            </div>
            <div class="panel-body nopaddingtop">
                <hr>
                <form id="basicForm2" action="AdminSentEmail" method="post" class="form-horizontal">

                    <div class="error"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Subject <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="subject" class="form-control" title="Your name is required!" placeholder="Subject" required />
                        </div>
                    </div>

                   <div class="form-group">
                        <label class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="email" class="form-control" title="Your name is required!" value="{{ $email }}" required />
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Message <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <textarea rows="5" class="form-control" name="message" title="Please type a comment at least 6 characters long!" placeholder="Type your comment..." required></textarea>
                        </div>
                    </div>

                    <hr>


                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-wide btn-danger btn-quirk mr5" type="submit">Send</button>
                            <button type="reset" class="btn btn-wide btn-default btn-quirk">Reset</button>
                        </div>
                    </div>
                </form>
            </div><!-- panel-body -->
        </div><!-- panel -->


    </div><!-- col-md-6 -->

    <br>
@stop


@section('js_ref')

    @parent
@stop