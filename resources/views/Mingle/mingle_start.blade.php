
@extends('app')
@section('css_ref')
@parent
@stop

@section('content')


    <div class="row">
        <div class="col-md-10">
            <div class="panel" style="height:400px;margin-left: 100px;margin-top:50px">
                <div class="panel-heading">
                    <h4 class="panel-title" style="margin-left: 350px">Mingle</h4>
                </div>
                <div class="panel-body" >
                    <img src="{{asset('internal_css/images/minglesa.jpg')}}" style="width:770px;height:300px ">


                       <a href="viewMingle"> <button class="btn btn-danger btn-quirk" style="width: 770px;margin-right:50px">Start</button></a>


                </div>
            </div><!-- panel -->
        </div><!-- col-md-6 -->

        </div>
@stop


@section('js_ref')
@parent

@stop
