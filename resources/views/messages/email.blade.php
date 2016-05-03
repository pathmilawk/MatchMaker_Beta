@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')


    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Send Messages</strong><a href="" class="alert-link"></a>
    </div>



    <div class="col-md-12">
        <div class="panel ">
            <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Messages</h4>
{{--
                <p>Please provide your name, email address (won't be published) and a comment.</p>
--}}
            </div>
            <div class="panel-body">
                <hr>
                <form id="basicForm" action="sendemail" method="post" class="form-horizontal">



                    {{--<div class="form-group">
                        <label class="col-sm-3 control-label">Name<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="nam" class="form-control" placeholder="Type your name..." required />
                        </div>
                    </div>--}}

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <select id="fruits" class="select2" name="name" style="width: 100%" data-placeholder="Choose One" required>
                                <option value="">&nbsp;</option>
                                <?php foreach($result as $row){?>
                                <option><?php echo $row->name; ?></option>
                                <?php } ?>

                            </select>
                            <label class="error" for="fruits"></label>
                        </div>
                    </div><!-- form-group -->



                    <div class="form-group">
                        <label class="col-sm-3 control-label">Message<span class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <textarea rows="5"  name="message" class="form-control" placeholder="Type your comment..." required></textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-danger btn-quirk btn-wide mr5">Send</button>
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