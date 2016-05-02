<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

    <title>Reset Password</title>

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
            var password = $("#password").val();
            var confirmpassword = $("#password_confirmation").val();


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
                var confirmEmpty = isEmpty("confirmError", confirmpassword, "Confirm Password");
                var validEmail=validateEmail("emailError", email, "Email");
                var passwordMatch=isMacth("confirmError",password,confirmpassword,"Password and confirm password");

                if(emailEmpty && validEmail && passwordEmpty && confirmEmpty && passwordMatch){
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

                function isMacth(errorCls, val1, val2, field) {
                    if (val1 != val2) {
                        $("#" + errorCls).text("*"+field + " are not matching.");
                        return false;
                    }
                    else {
                        $("#" + errorCls).text("");
                        return true;
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
        <h1>Reset Password</h1>
        <h4 class="panel-title" style="font-size: medium">Change your account password.</h4>
    </div>
    <div class="panel-body">
        <div class="or"></div>
        <form role="form" method="POST" action="/password/reset">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group mb10">
                <div class="input-group">

                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                    <input type="text" class="form-control" name="email" id='email'
                           placeholder="Enter Email" value="{{ old('email') }}">

                </div>
                <div class="text-danger" id="emailError" style="font-size: medium"></div>
            </div>
            <div class="form-group mb10">
                <div class="input-group">

                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                    <input type="password" class="form-control" name="password" id='password'
                           placeholder="Enter Password">

                </div>
                <div class="text-danger" id="passwordError" style="font-size: medium"></div>
            </div>

            <div class="form-group mb10">
                <div class="input-group">

                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                    <input type="password" class="form-control" name="password_confirmation" id='password_confirmation'
                           placeholder="Confirm password">

                </div>
                <div class="text-danger" id="confirmError" style="font-size: medium"></div>
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
                    Reset Password
                </button>

            </div>
        </form>





    </div>

</div>
<!-- panel -->

</body>
</html>




