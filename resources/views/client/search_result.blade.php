@extends('app')
@section('pageTitle','Search Results')
@section('css_ref')

    <link rel="stylesheet" href="{{asset('internal_css/lib/jquery.gritter/jquery.gritter.css')}}"
          xmlns="http://www.w3.org/1999/html">
        <link rel="stylesheet" href="{{asset('internal_css/lib/animate.css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('external_css/css/searchResult.css')}}">
    @parent
@stop

@section('content')

    <div class="col-sm-8" style="height: 100%;">                                                {{-- Result showing div--}}

        <div class="panel panel-success">
            <div class="panel-heading"  style ="background-color: #3b4354">
                <h3 class="panel-title">Most suitable results for you..</h3>
            </div>
           <div class="panel-body">

               @if($final == "No Result")                                                    {{--This div will be displayed if no search results--}}
                   <div class="col-md-8">
                       <h3>No results found!</h3>
                       <p>Try again using different preferences.</p>
                   </div>
               @else                                                                            {{--display this when only results vailabele--}}
                   <table style="width: 100%;">                                                          {{--Arrange serach results in a table--}}
                        <?php $count = 0;?>
                       @foreach($final as $raw)                                              {{--Access the passed data using foreach loop--}}
                       <tr>
                           <td>
                               <div class="col-sm-2">
                                   <img src="{{asset('Profile_Pictures/'.$raw->user_id.'/'.$raw->picture)}}" width="120px" height="120px">
                               </div>
                           </td>
                           <td>
                               <div class = 'col-sm-10'>
                                   <p style="font-size: medium">  {{ $raw->first_name }} {{ $raw->last_name }} <br> {{ $raw->location }} </p>
                               </div>
                           </td>
                           <td>
                               <div class="col-sm-7" style="float: right;">
                                   <a href='{!! $raw->user_id !!}'>
                                       <button type="button" class="btn btn-primary" style="width: 100px;margin-top: 4%;margin-bottom: 2%;color: white;">View Profile</button><br>
                                   </a>
                                   <button type="button" class="btn btn-primary" onclick="sendRequest(<?php echo $raw->user_id; ?>)" style="width: 100px;margin-top: 2%;margin-bottom: 2%;color: white;">Send Request</button><br>
                                   <button type="button" onclick="showInterest(<?php echo $raw->user_id; ?>)" data-placement="left" data-toggle="tooltip" class="btn btn-primary tooltips" data-original-title="Show Interest" style="margin-left: 30%;margin-top: 2%;margin-bottom: 4%;color: white; width: auto; height:auto;" >
                                       <img src="{{asset('internal_css/images/showInterest.png')}}"  width="14px" height="14px"/>
                                   </button>
                               </div>
                           </td>
                       </tr>
                       <?php $userIds[$count]=$raw->user_id ; $count = $count+1; ?>
                       @endforeach                                                                 {{--end of foreach--}}
                       <tr>
                           <p align="center">{{$count}} Results Found!</p>
                       </tr>
                   </table>                                                                         {{-- End of the table--}}
               @endif

            </div>
        </div><!-- panel -->
    </div><!-- col-sm-6 -->

    <div class="col-sm-4" align="center" style="background-color: #262b36; border-radius: 2px;">
        <h3 style="color: white;">Filter your result by :</h3>
    </div>

    {{--Apearence filter box--}}
    <div class="col-sm-4" align="center">
        <div class="panel" >
            <h4 align="center" style="padding-top: 10px; padding-bottom: 10px; color: #31c1d2">Appearance</h4>

                {!! Form::open(['url' => 'search_appearance']) !!}                                   {{--Form Start--}}
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
                        {!! Form::submit('Go',['class' => 'btn btn-primary']) !!}
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
                    {!! Form::submit('Go',['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}<br>
        </div><!--end of panel div-->
    </div><!--end of col-sm-4-->

</div><!--end of col-sm-8-->

@stop
@section('js_ref')

       <script type="text/javascript">

           {{--Javascript function that send request using ajax--}}
           function sendRequest(id)
           {
               $.ajax({

                   type: "POST",
                   url: 'sendRequest_'+id,
                   data: {

                   },
                   dataType: 'json',
                   success: function (data) {
                       //console.log(data);
                       alert(data);
                   }
               });
           }

           function showInterest(id)
           {
               $.ajax({

                   type: "POST",
                   url: 'showInterest_'+id,
                   data: {

                   },
                   dataType: 'json',
                   success: function (data) {
                       //console.log(data);
                       alert(data);
                   }
               });
           }
       </script>

    @parent
@stop
