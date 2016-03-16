@extends('app')
@section('css_ref')

        <link rel="stylesheet" href="{{asset('internal_css/lib/jquery.gritter/jquery.gritter.css')}}">
        <link rel="stylesheet" href="{{asset('internal_css/lib/animate.css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('external_css/css/searchResult.css')}}">
    @parent
@stop

@section('content')

    <div class="col-sm-8" style="height: 100%;">                                                {{-- Result showing div--}}

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Most suitable results for you..</h3>
            </div>
           <div class="panel-body">

               @if($results === "No Result")                                                    {{--This div will be displayed if no search results--}}
                   <div class="col-md-8">
                       <h3>No results found!</h3>
                       <p>Try again using different preferences.</p>
                   </div>
               @else                                                                            {{--display this when only results vailabele--}}
                   <table style="width: 100%;">                                                 {{--Arrange serach results in a table--}}
                        @foreach($results as $raw)                                              {{--Access the passed data using foreach loop--}}

                       <div>
                           <input type="hidden" id="firstName_{{$raw->user_id}}" value="{{$raw->first_name}}"/>
                           <input type="hidden" id="lastName_{{$raw->user_id}}" value="{{$raw->last_name}}"/>
                       </div>
                                <tr>
                                   <td>
                                       <div class="col-sm-2">
                                           <img src="{{asset('uploads/'.$raw->first_name.'/'.$raw->user_id.'.png')}}" width="120px" height="120px">
                                       </div>
                                   </td>
                                   <td>
                                       <div class = 'col-sm-10'>
                                         <p style="font-size: medium">  {{ $raw->first_name }} {{ $raw->last_name }} <br> {{ $raw->location }} </p>
                                       </div>
                                   </td>
                                   <td>
                                        <div class="col-sm-5" style="float: right;">
                                            <button type="button" class="btn btn-primary" value="View Profile" style="width: 100px;margin-top: 2%;margin-bottom: 2%;color: black;">
                                                View Profile
                                            </button><br>
                                            <button type="button" class="btn btn-primary" value="Send Request" style="width: 100px;margin-top: 2%;margin-bottom: 2%;color: black;" onclick="sendRequest()">
                                                Send Request
                                            </button>
                                            <button type="button" data-placement="left" data-toggle="tooltip" class="btn btn-primary tooltips" data-original-title="Show Interest" style="margin-left: 40%;margin-top: 2%;margin-bottom: 2%;color: black; width: auto; height:auto;">
                                                <img src="{{asset('internal_css/images/showInterest.png')}}"  width="15px" height="15px"/>
                                            </button>
                                        </div>
                                   </td>
                               </tr>
                        @endforeach                                                                 {{--end of foreach--}}
                   </table>                                                                         {{-- End of the table--}}
               @endif

            </div>
        </div><!-- panel -->
    </div><!-- col-sm-6 -->

    <div class="col-sm-4" align="center">
        <h3>Filter your result by :</h3>
    </div>

    {{--Apearence filter box--}}
    <div class="col-sm-4" align="center">
        <div class="panel" >
            <h4 align="center" style="padding-top: 10px; padding-bottom: 10px; color: #31c1d2">Appearence</h4>

                {!! Form::open(['url' => 'search_appearence']) !!}                                   {{--Form Start--}}
                    <div class="col-md-60">
                        {!! Form::label('height','Height(in feet) :',['class' => 'col-sm-6 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('height',['Below'=>'Below 5',
                                             '5.0'=>'5,0',
                                             '5.1'=>'5,1',
                                             '5.2'=>'5,2',
                                             '5.3'=>'5,3',
                                             '5.4'=>'5,4',
                                             '5.5'=>'5,5',
                                             '5.6'=>'5,6',
                                             '5.7'=>'5,7',
                                             '5.8'=>'5,8',
                                             '5.9'=>'5,9',
                                             '5.10'=>'5,10',
                                             '5.11'=>'5,11',
                                             '6.0'=>'6,0',
                                             'over'=>'Over 6',]) !!}
                            </div>
                    </div><br>
                    <div class="col-sm-30"><br>
                        {!! Form::label('hair','Hair :',['class' => 'col-sm-6 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('hair',['Straight'=>'Straight','Curly'=>'Curly','Wavy' => 'Wavy']) !!}
                        </div>
                    </div> <br>
                    <div class="col-sm-30"><br>
                        {!! Form::label('complexiion','Complexion :',['class' => 'col-sm-6 control-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('complexion',['Dark'=>'Dark','Fair'=>'Fair','Brown' => 'Brown']) !!}
                        </div>
                    </div><br>
                    <div class="col-sm-30" align="center"><br>
                        {!! Form::submit('Go!',['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}<br>                                                                    {{--Form Ends--}}
        </div><!--end of panel div-->
    </div><!--end of col-sm-4-->

    <div class="col-sm-4" align="center" style="float: right">
        <div class="panel" >
            <h4 align="center" style="padding-top: 10px; padding-bottom: 10px; color: #31c1d2">Social Status</h4>

            {!! Form::open(['url' => 'search_social']) !!}
                <div class="col-md-60">
                    {!! Form::label('Occupation','Occupation :',['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-3">
                        {!! Form::text('occupation',null,['class' => 'occupation']) !!}
                    </div><br>
                <div class="col-sm-30"><br>
                    {!! Form::label('Drinking','Drinking :',['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-3">
                        {!! Form::select('drinking',['Yes'=>'Yes','No'=>'No','Occasionally' => 'Occasionally']) !!}
                    </div>
                </div><br>
                <div class="col-sm-30"><br>
                    {!! Form::label('Smoking','Smoking :',['class' => 'col-sm-6 control-label']) !!}
                    <div class="col-sm-3">
                        {!! Form::select('smoking',['Yes'=>'Yes','No'=>'No','Occasionally' => 'Occasionally']) !!}
                    </div>
                </div><br>
                <div class="col-sm-30" align="center"><br>
                    {!! Form::submit('Go!',['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}<br>
        </div><!--end of panel div-->
    </div><!--end of col-sm-4-->

</div><!--end of col-sm-8-->

@stop
@section('js_ref')
        <script>
            sendRequest()
            {
                /*alert (document.getElementById('firstName_'.$uid));*/
                alert("hi");
            }
        </script>
    @parent
@stop
