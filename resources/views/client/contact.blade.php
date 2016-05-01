@extends('app')
@section('pageTitle','contact Us')
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
            <!--start of contact-->
    <div class="row">
        <div class="col-md-6 col-lg-6 dash-left">
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
                            {!! Form::submit('Submit',['class' => 'btn btn-success btn-quirk']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                            <!--end of contact form-->
                </div>
            </div>
        </div>

        <!--FAQ-->
        <div class="col-md-6 col-lg-4 dash-right">
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
@stop

@section('js_ref')
    @parent
    <script src="{{asset('internal_css/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('internal_css/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-toggles/toggles.js')}}"></script>

    <script src="{{asset('internal_css/js/quirk.js')}}"></script>




@stop
