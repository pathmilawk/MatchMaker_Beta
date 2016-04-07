@extends('app')
@section('pageTitle','Search')
@section('css_ref')
    <link rel="stylesheet" href="{{asset('external_css/css/searchMain2.css')}}">
    @parent
@stop

@section('content')

    {{--error handling div--}}
    <div class="col-md-3" style="left: 20px; top:100px;">
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div id="searchBody" align="center">
        <h3 align="center" style="padding-top: 10px; padding-bottom: 10px; color: #31c1d2">What kind of person you are looking for..</h3>
        {!! Form::open( ['url' => 'Results']) !!}                                    {{-- Form Start--}}

                <div class="form-group mt10">
                    {!! Form::label('gender','I am looking for a :', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('Gender',['Select a gender'=>'Select a gender','Male'=>'Male','Female'=>'Female']) !!}
                    </div>
                </div><br>                                                                      {{--breake Statements for styling purposes--}}
                <div class="form-group mt10">
                    {!! Form::label('Age','Age Between :', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-4">
                        {!! Form::select('AgeStart',['From' => 'From',
                                                     '18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24',
                                                     '25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29',
                                                     '30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34',
                                                     '35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39',
                                                     '40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44',
                                                     '45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49',
                                                     '50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54',
                                                     '55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59',
                                                     '60'=>'60','61'=>'61','62'=>'62','63'=>'63','64'=>'64',
                                                     '65'=>'65','66'=>'66','67'=>'67','68'=>'68','69'=>'69',
                                                     '70'=>'70',]) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::select('AgeEnd',['To' => 'To',
                                                   '18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24',
                                                   '25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29',
                                                   '30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34',
                                                   '35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39',
                                                   '40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44',
                                                   '45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49',
                                                   '50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54',
                                                   '55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59',
                                                   '60'=>'60','61'=>'61','62'=>'62','63'=>'63','64'=>'64',
                                                   '65'=>'65','66'=>'66','67'=>'67','68'=>'68','69'=>'69',
                                                   '70'=>'70',]) !!}
                    </div>
                </div><br>                                                                      {{--breake Statements for styling purposes--}}
                <div class="form-group mt10">
                    {!! Form::label('From','From :', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('From',['Select a district'=>'Select a district',
                                                'Ampara'=>'Ampara',
                                                'Anuradhapura'=>'Anuradhapura',
                                                'Badulla'=>'Badulla',
                                                'Batticaloa'=>'Batticaloa',
                                                'Colombo'=>'Colombo',
                                                'Galle'=>'Galle',
                                                'Hambantota'=>'Hambantota',
                                                'Jaffna'=>'Jaffna',
                                                'Kalutara'=>'Kalutara',
                                                'Kandy'=>'Kandy',
                                                'Kilinochchi'=>'Kilinochchi',
                                                'Kurunegala'=>'Kurunegala',
                                                'Manner'=>'Manner',
                                                'Matale'=>'Matale',
                                                'Matale'=>'Matale',
                                                'Monaragala'=>'Monaragala',
                                                'Mullativu'=>'Mullativu',
                                                'Nuwara Eliya'=>'Nuwara Eliya',
                                                'Polonnaruwa'=>'Polonnaruwa',
                                                'uttalam'=>'uttalam',
                                                'Ratnapura'=>'Ratnapura',
                                                'Trincomalee'=>'Trincomalee',
                                                'Vavuniya'=>'Vavuniya',
                                                'Does not matter'=>'Does not matter',]) !!}
                    </div>
                </div><br>
                <div class="form-group mt10">
                    {!! Form::label('Religion','Religion :', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('Religion',['Select a religion'=>'Select a religion',
                                                    'Buddhist'=> 'Buddhist',
                                                    'Christian'=>'Christian',
                                                    'Muslim'=> 'Muslim',
                                                    'Hindu'=>'Hindu',
                                                    'Does not matter'=>'Does not matter',]) !!}
                    </div>
                </div><br><br>                                                                  {{--breake Statements for styling purposes--}}
                <div class="form-group mt15">
                    {!! Form::label('Mother Tongue','Mother Tongue :', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::select('MotherTongue',['Select a language'=>'Select a language',
                                                        'Sinhala'=>'Sinhala',
                                                        'Tamil'=>'Tamil',
                                                        'English'=>'English',
                                                        'Hindi'=>'Hindi',
                                                        'Does not matter'=>'Does not matter',]) !!}
                    </div>
                 </div></br><br>                                                                {{--breake Statements for styling purposes--}}
                 <div class="form-group mt15">
                     {!! Form::submit('Search', ['id' => 'button']) !!}
                 </div>
         {!! Form::close() !!}                                                                  {{--Form Ended--}}
    </div>

@stop
@section('js_ref')
    @parent
@stop
