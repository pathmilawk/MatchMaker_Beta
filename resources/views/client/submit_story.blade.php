@extends('app')
@section('pageTitle','Submit Story')
@section('css_ref')
    @parent
    <link rel="stylesheet" href="{{asset('internal_css/lib/jquery.steps/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/weather-icons/css/weather-icons.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/jquery-toggles/toggles-full.css')}}">

    <link rel="stylesheet" href="{{asset('internal_css/css/quirk.css')}}">
    @stop

    @section('content')
            <!--Submit story-->
    <div class="row">
        <div class="col-md-12 col-lg-11 dash-left">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h1 class="panel-title" style="font-size: large">Share your success story</h1>
                </div>
                <div class="panel-body"
                     style="background-image: url('{{asset('internal_css/images//photos/wedding.jpg')}}');background-repeat: no-repeat;background-position: right top;">

                    @if(isset($success)) <!--status of submitting the story-->
                    @if($success=='true')
                        <div class="alert alert-success" style="width: 65%">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Thank you!your story is submitted.</strong>
                        </div>
                        @endif
                        @endif


                                <!--start of story submit form-->
                        {!! Form::open(array('action' => 'StoryController@storyFormSubmit','files'=>true)) !!}

                        <div class="col-md-8" style="font-size: medium">
                            <div class="form-group">
                                {!! Form::label('firstname','First Name') !!}
                                <div class="input-group mb20">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-align-justify"></i></span>
                                    {!! Form::text('firstname',Auth::user()->name,['class' => 'form-control','disabled']) !!}
                                </div>
                                <div class="text-danger" id="firstnameError" style="font-size: small">{{ $errors->first('firstname')}}</div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('lastname','Last Name') !!}
                                <div class="input-group mb20">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-align-justify"></i></span>
                                    {!! Form::text('lastname',Auth::user()->lastname,['class' => 'form-control','disabled']) !!}
                                </div>
                                <div class="text-danger" id="lastnameError" style="font-size: small">{{ $errors->first('lastname')}}</div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone','Phone') !!}
                                <div class="input-group mb20">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    {!! Form::text('phone',null,['class' => 'form-control']) !!}
                                </div>
                                <div class="text-danger" id="phoneError" style="font-size: small">{{ $errors->first('phone')}}</div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('email','Email Address') !!}
                                <div class="input-group mb20">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    {!! Form::text('email',Auth::user()->email,['class' => 'form-control','disabled']) !!}
                                </div>
                                <div class="text-danger" id="emailError" style="font-size: small">{{ $errors->first('email')}}</div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('address','Address') !!}
                                <div class="input-group mb20">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                                    {!! Form::text('address',null,['class' => 'form-control']) !!}
                                </div>
                                <div class="text-danger" id="addressError" style="font-size: small">{{ $errors->first('address')}}</div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('title','Title for your story!') !!}
                                <div class="input-group mb20">
                                    <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-align-justify"></i></span>
                                    {!! Form::text('title',null,['class' => 'form-control']) !!}
                                </div>
                                <div class="text-danger" id="titleError" style="font-size: small">{{ $errors->first('title')}}</div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('story',' Write your story here:',['class' => 'fa fa-smile-o']) !!}
                                {!! Form::textarea('story',null,['class' => 'form-control']) !!}
                                <div class="text-danger" id="storyError" style="font-size: small">{{ $errors->first('story')}}</div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('photo','Upload your wedding photo here:',['class' => 'fa fa-smile-o']) !!}
                                {!! Form::file('photo',null,['class' => 'form-control']) !!}
                                <div class="text-danger" id="photoError" style="font-size: small">{{ $errors->first('photo')}}</div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                {{--{{!! Form::hidden('_token',csrf_token()); !!}}--}}
                                {!! Form::submit('Submit Story',['class' => 'btn btn-primary btn-quirk']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                                <!--end of story submit form-->
                </div>
                <!--panel body-->
            </div>
        </div>
    </div>
@stop

@section('js_ref')
    @parent
    <script src="{{asset('internal_css/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}"></script>

    <script src="{{asset('internal_css/lib/jquery-toggles/toggles.js')}}"></script>

    <script src="{{asset('internal_css/js/quirk.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery.steps/jquery.steps.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-validate/jquery.validate.js')}}"></script>
    <script>

        $(document).ready(function () {

            'use strict';

            $('#wizard-basic, #wizard-basic2').steps({
                headerTag: 'h3',
                bodyTag: 'div',
                transitionEffect: 'slideLeft',
                autoFocus: true
            });


            var form = $('#wizard-form');
            form.steps({
                headerTag: 'h3',
                bodyTag: 'div',
                transitionEffect: 'slideLeft',
                onStepChanging: function (event, currentIndex, newIndex) {

                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex) {
                        return true;
                    }

                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex) {
                        // To remove error styles
                        form.find('.body:eq(' + newIndex + ') label.error').remove();
                        form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
                    }

                    form.validate().settings.ignore = ':disabled,:hidden';
                    return form.valid();
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ':disabled';
                    return form.valid();
                },
                onFinished: function (event, currentIndex) {
                    alert('Submitted!');
                }
            }).validate({
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });

            $('#wizard-vertical').steps({
                headerTag: 'h3',
                bodyTag: 'div',
                transitionEffect: 'slideLeft',
                autoFocus: true,
                stepsOrientation: 'vertical'
            });


        });
    </script>


@stop
