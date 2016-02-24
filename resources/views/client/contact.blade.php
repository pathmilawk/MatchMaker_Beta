@extends('master_page')
@section('css_ref')
    @parent
    <link rel="stylesheet" href="{{asset('internal_css/lib/select2/select2.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/weather-icons/css/weather-icons.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/jquery-toggles/toggles-full.css')}}">

    <link rel="stylesheet" href="{{asset('internal_css/css/quirk.css')}}">
    <script src="{{asset('internal_css/lib/modernizr/modernizr.js')}}"></script>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6 col-lg-6 dash-left">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-success">Contact us</h2>
                    <hr>
                    {!! Form::open(array('action' => 'StoryController@contactFormSubmit')) !!}

                    <div class="col-md-10" style="font-size: medium">
                        <div class="form-group">
                            {!! Form::label('username','User Name') !!}
                            <div class="input-group mb20">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                {!! Form::text('username',null,['class' => 'form-control']) !!}
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
                            {!! Form::submit('Submit',['class' => 'btn btn-success btn-quirk']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 dash-right">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-primary">Top questions</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 col-sm-14">
                            <div class="panel-group" id="accordion8">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8">
                                                What is match making?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne8" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Matchmaking is the process of matching two or more people together, usually for the purpose of marriage                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseTwo8">
                                                What do I can access as a free member?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Once you have joined for free you will be able to browse all the profiles, and photos on our site. With your free profile you can also use the 'Show interest' feature, which sends your profile to the individual you are interested in. If they are a Gold Member, and they decide to send you an email your free profile will allow you to receive.                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseThree8">
                                               Username guidelines
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            When creating your Username, it is very important that you adhere to the following guidelines.
                                            No vulgarity, profanity or otherwise offensive words
                                            No more then 4 numerical digits consecutively (i.e. 3695187)
                                            No contact information (i.e. telephone number, email address and/or home address)
                                            No advertisements for other websites or businesses
                                            All member profiles are audited before being displayed. If your Username does not meet our guidelines, it may be rejected or deleted from our site.                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseFour8">
                                                Are all people allowed to become members?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            We does not discriminate regarding caste, color, religion or in any way. We believe all people are the same and deserve the chance to enjoy the success of an arranged marriage through our site
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseFive8">
                                                Where are my email messages being sent?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            All email messages generated by the site are sent to the registered email address of the member as well as to the inbox section of matchmaker.com                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseSix8">
                                                How do I upload my photo?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Go to www.matchmaker.com and login. On the welcome page, click personal profile. You will see the link to upload your photo. Click on it and follow the instructions there                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseSeven8">
                                                What credit cards do you accept?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            We accept Visa and Mastercard. Most ATM cards with the Visa or Master card logo can also be used.
                                        </div>
                                </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseEight8">
                                                    What email address should I use?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseEight8" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                You should use your own personal email address to create your profile, as this is where we will contact you regarding all inquiries, alert messages, and newsletters. If you use an invalid or fake email address, we will be unable to answer any concerns you may have in the future with respect to your account functions, and status. For example: if you forgot your Username and password, and your address was invalid you would be unable to retrieve the information. Your email address will not appear anywhere on your account, and it will not be accessible to our other members.
                                            </div>
                                        </div>
                            </div>
                        </div><!-- col-md-4 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
@stop


@section('js_ref')
    @parent
    <script src="{{asset('internal_css/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('internal_css/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-toggles/toggles.js')}}"></script>

    <script src="{{asset('internal_css/js/quirk.js')}}"></script>




@stop
