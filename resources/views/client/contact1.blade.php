@extends('master_page')
@section('css_ref')
    @parent
@stop
@section('BarButtons')
    <div class="header-right paddingtop10">
        <h4>
            <a href="http://<?php echo $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']; ?>/auth/login"><button
                        class="btn btn-primary btn-quirk">Sign In</button></a>&nbsp;&nbsp;&nbsp;
            <a href="http://<?php echo $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']; ?>/auth/register"><button
                        class="btn btn-primary btn-quirk">Register</button></a>
        </h4>
    </div>
@stop
@section('content')
    <html>
    <head>
    </head>
    <body>
    <div class="row" style="margin-top: 75px;">
        <div class="col-md-6 col-lg-6 dash-left" style="margin-left: 44px; margin-right: 30px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-success">Contact us</h2>
                    <hr>
                    <!--contact form-->
                    {!! Form::open(array('action' => 'ContactController@contactFormSubmit')) !!}

                    <div class="col-md-10" style="font-size: medium">
                        <div class="form-group">
                            {!! Form::label('name','Name') !!}
                            <div class="input-group mb20">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                {!! Form::text('name',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone','Phone') !!}
                            <div class="input-group mb20">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                {!! Form::text('phone',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email','Email Address') !!}
                            <div class="input-group mb20">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                {!! Form::text('email',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('question',' Question/Suggestion') !!}
                            {!! Form::textarea('question',null,['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Submit',['class' => 'btn btn-success btn-quirk'],['onclick' => 'return validateFields()']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                            <!--end of contact form-->
                </div>
            </div>
        </div>

        <!--FAQ-->
        <div class="col-md-5 col-lg-4 dash-right">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-primary">Top questions</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 col-sm-14">
                            <div class="panel-group" id="accordion{{ $count }}">
                                @foreach($contacts as $contact)
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion{{ $count }}"
                                                   href="#collapse{{ $contact->id }}{{ $count }}">
                                                    {{ $contact->question }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse{{ $contact->id }}{{ $count }}"
                                             class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                {{ $contact->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of FAQ-->
    </div>
</body>
</html>

@stop


@section('js_ref')
    <script src="{{ asset('internal_css/lib/select2/select2.js') }}"></script>
    <script src="{{ asset('internal_css/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('internal_css/lib/bootstrap/js/bootstrap.js') }}"></script>

    <script>
        function validateFields(){

            /*var email = $("#email").val();
            var password = $("#password").val();

            var valid=validateRequest();
            if(valid){
                return true;
            }
            else{
                return false;
            }

            function validateRequest(){

                var emailEmpty = isEmpty("emailError", email, "Email");
                var passwordEmpty = isEmpty("passwordError", password, "Password");
                var validEmail=validateEmail("emailError", email, "Email");

                if(emailEmpty && passwordEmpty && validEmail){
                    return true;
                }
                else{
                    return false;
                }


                function isEmpty(errorCls, val, field) {
                    if (val == "") {
                        $("#" + errorCls).text("*"+field + " field cannot be empty!");
                        return false;
                    }
                    else {
                        $("#" + errorCls).text("");
                        return true;
                    }
                }

                function validateEmail(errorCls, val, field) {
                    if (isEmpty(errorCls, val, field)) {
                        var isEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if (!(isEmail.test(val))) {
                            $("#" + errorCls).text("Please enter a valid"+field);
                            return false;
                        }
                        else {
                            $("#" + errorCls).text("");
                            return true;
                        }
                    }
                }
            } //end of validate request
*/
            return false;
        }

    </script>

    @parent

@stop