@extends('app')
@section('css_ref')
    @parent
@stop

@section('content')

    <div>

    <div class="panel">

        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Message With Your Partner</strong><a href="" class="alert-link"></a>
            </div>
            <div class="table-responsive">
                <table class="table table-danger nomargin">




                    <!--Suceess messages-->
                    <h4 style="color: blue"><?php echo Session::get('messagesucessmingl'); ?></h4>
                    <?php  foreach($result as $row) {
                    ?>



                    <div class="col-sm-5 col-md-10 col-lg-6">
                        <div class="panel panel-danger panel-weather">
                            <div class="panel-heading">
                                <h4 class="panel-title">Woops!</h4>
                            </div>
                            <div class="panel-body inverse">
                                <div class="row mb10">
                                    <div class="col-xs-6">
                                        <h2 class="today-day"><?php echo $row->name ?></h2>
                                        <h3 class="today-date">{{--July 13, 2015--}}<a href="mingleMessageView"><button class="btn btn-danger">Message</button></a></h3>
                                    </div>
                                    <div class="col-md-1">

                                        <i><img  src="{{asset($row->path)}}" alt="" /></i>
                                    </div>
                                </div>
                                <p class="nomargin">{{--Thunderstorm in the area of responsibility this afternoon through this evening.--}}</p>
                                <div class="row mt10">
                                    <div class="col-xs-7">
                                       {{-- <strong>Temperature:</strong> (Celcius) 19--}}
                                    </div>
                                    <div class="col-xs-5">
                                        {{--<strong>Wind:</strong> 30+ mph--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-md-12 -->





                                                            </div><!-- panel-body -->
                                                        </div><!-- panel -->

                                                    </div><!-- col-md-6 -->

                                                </div>

                                            </div>
                                        </div>


                            </ul>

                        <?php unset($row->id); }?>

        </div>
    </div><!-- panel -->



@stop


@section('js_ref')
    @parent

@stop

