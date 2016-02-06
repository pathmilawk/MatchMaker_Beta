<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

	<title>Quirk Responsive Admin Templates</title>

	<link rel="stylesheet" href="{{ asset('client/lib/fontawesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('client/lib/select2/select2.css') }}">

	<link rel="stylesheet" href="{{ asset('client/css/quirk.css') }}">

	<script src="{{ asset('client/lib/modernizr/modernizr.js') }}"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="{{ asset('client/lib/html5shiv/html5shiv.js') }}"></script>
    <script src="{{ asset('client/lib/respond/respond.src.js') }}"></script>
    <![endif]-->
</head>

<body class="signwrapper">

<div class="sign-overlay"></div>
<div class="signpanel"></div>

<div class="signup">
	<div class="row">
		<div class="col-sm-5">
			<div class="panel">
				<div class="panel-heading">
					<h1>Quirk</h1>
					<h4 class="panel-title">Create an Account!</h4>
				</div>
				<div class="panel-body">
					<button class="btn btn-primary btn-quirk btn-fb btn-block">Sign Up Using Facebook</button>
					<div class="or">or</div>
					<form action="http://localhost/auth/register" method="post" ><input type="hidden" name="_token" value="{{ csrf_token() }}">



						<div class="form-group mb15">
							<input name="username" id="username" type="text" class="form-control" placeholder="Enter Your Username">
						</div>
						<div class="form-group mb15">
							<input name="password" id="password" type="password" class="form-control" placeholder="Enter Your Password">
						</div>
						<div class="form-group mb15">
							<input name="name" id="name" type="text" class="form-control" placeholder="Enter Your Full Name">
						</div>


					<div class="form-group mb15">
						<input name="email" id="email" type="text" class="form-control" placeholder="Enter Your email">
					</div>

						<div class="row mb15">
							<div class="col-xs-5">
								<div class="form-group">
									<select name="bdayM" id="bdayM"class="form-control" style="width: 100%" data-placeholder="Birth Month">
										<option value="">&nbsp;</option>
										<option value="January">January</option>
										<option value="February">February</option>
										<option value="March">March</option>
										<option value="April">April</option>
										<option value="May">May</option>
										<option value="June">June</option>
									</select>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="form-group">
									<select name="bdayD" id="bdayD" class="form-control" style="width: 100%" data-placeholder="Birth Day">
										<option value="">&nbsp;</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<select name="bdayY" id="bdayY"class="form-control" style="width: 100%" data-placeholder="Birth Year">
										<option value="">&nbsp;</option>
										<option value="1986">1986</option>
										<option value="1987">1987</option>
										<option value="1988">1988</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group mb20">
							<label class="ckbox">
								<input type="checkbox" name="checkbox">
								<span>Accept terms and conditions</span>
							</label>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-quirk btn-block">Create Account</button>
						</div>






					</form>
				</div><!-- panel-body -->
			</div><!-- panel -->
		</div><!-- col-sm-5 -->
		<div class="col-sm-7">
			<div class="sign-sidebar">
				<h3 class="signtitle mb20">Two Good Reasons to Love Quirk</h3>
				<p>When it comes to websites or apps, one of the first impression you consider is the design. It needs to be high quality enough otherwise you will lose potential users due to bad design.</p>
				<p>Below are some of the reasons why you love Quirk.</p>

				<br>

				<h4 class="reason">1. Attractive</h4>
				<p>When your website or app is attractive to use, your users will not simply be using it, they’ll look forward to using it. This means that you should fashion the look and feel of your interface for your users.</p>

				<br>

				<h4 class="reason">2. Responsive</h4>
				<p>Responsive Web design is the approach that suggests that design and development should respond to the user’s behavior and environment based on screen size, platform and orientation. This would eliminate the need for a different design and development phase for each new gadget on the market.</p>

				<hr class="invisible">

				<div class="form-group">
					<a href="login" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Already a member? Sign In Now!</a>
				</div>
			</div><!-- sign-sidebar -->
		</div>
	</div>
</div><!-- signup -->



<script src="{{ asset('client/lib/jquery/jquery.js') }}"></script>
<script src="{{ asset('client/lib/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('client/lib/select2/select2.js') }}"></script>

<script>
	$(function() {

		// Select2 Box
		$("select.form-control").select2({ minimumResultsForSearch: Infinity });

	});
</script>

</body>
</html>









