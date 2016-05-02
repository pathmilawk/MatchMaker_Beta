<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

    <title>Login</title>

    <link rel="stylesheet" href="{{asset('internal_css/lib/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/css/quirk.css')}}">

    <script src="{{ asset('internal_css/lib/modernizr/modernizr.js') }}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <script src="{{ asset('internal_css/lib/html5shiv/html5shiv.js') }}"></script>

    <script src="{{ asset('internal_css/lib/respond/.src.js') }}"></script>
    <![endif]-->

    <script src="{{asset('external_css/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}"></script>

    <script>
        function validateFields(){

            var email = $("#email").val();

            var valid=validateRequest();
            if(valid){
                return true;
            }
            else{
                return false;
            }

            function validateRequest(){

                var emailEmpty = isEmpty("emailError", email, "Email");
                var validEmail=validateEmail("emailError", email, "Email");

                if(emailEmpty && validEmail){
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

        }

    </script>
</head>

<body class="signwrapper">

<div class="sign-overlay" style="background-image: url({{ asset('/internal_css/images/photos/loginBack.jpg') }}); background-repeat: no-repeat;background-size: cover;"></div>
<div class="signpanel" style="background-image: url({{ asset('/internal_css/images/photos/dot.jpg') }});"></div>

<div class="panel signin">
    <div class="panel-heading">
        <h1>Forgot Password</h1>
        <h4 class="panel-title" style="font-size: medium">Enter your valid email address.An email will be sent to your
            email</h4>
    </div>
    <div class="panel-body">
        <div class="or"></div>
        <form role="form" method="POST" action="/password/email">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group mb10">
                <div class="input-group">

                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                    <input type="text" class="form-control" name="email" id='email'
                           placeholder="Enter Email" value="{{ old('email') }}">

                </div>
                <div class="text-danger" id="emailError" style="font-size: medium"></div>
            </div>
            @if (session('status'))

                <li class="text-success" style="font-size: medium">    {{ session('status') }}</li>

            @endif
            @if (count($errors) > 0)


                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger" style="font-size: medium;margin-right: 5px">{{ $error }}</li>
                    @endforeach
                </ul>

            @endif
            <hr class="invisible">
            <div class="form-group">

                <button type="submit" class="btn btn-success btn-quirk btn-block" onclick="return validateFields()">
                    Send Password Reset Link
                </button>

            </div>
        </form>


        <div style="margin-top: 10px;font-size: small"><a href="/auth/login">Back to Login</a></div>


    </div>

</div>
<!-- panel -->

</body>
</html>




