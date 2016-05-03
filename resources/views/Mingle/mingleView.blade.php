
@extends('app')
@section('pageTitle','Mingle')
@section('css_ref')
    <link rel="stylesheet" href="{{asset('external_css/css/minglebackground.css')}}">
    @parent
@stop
@section('content')


    {{--
        put a like
    --}}
    <script>
        function my(){
            alert('You Have Add a Like');

        }
    </script>



    <?php foreach($result as $row){

    if (Session::has('val'))
    {
        $x=Session::get('val');

        if($x>9)
        {
            echo "Error";
        }
    }

    else{

        $x=1;
    }

    ?>



       {{-- <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Find Your Partner</strong><a href="" class="alert-link"></a>
        </div>
--}}

       {{-- <div class="row profile-wrapper">--}}
        <div class="col-xs-8 col-md-7 col-lg-2 profile-left" style="opacity: 0.88;">
            <div class="profile-left-heading">
                <ul class="panel-options">
                    <li><a><i class="glyphicon glyphicon-option-vertical"></i></a></li>
                </ul>
                <a href="" class="profile-photo"><img class="img-circle img-responsive" src="{{asset($row->image_path)}}" alt=""></a>
                <h2 class="profile-name"><?php echo $row->name ?></h2>
                <h4 class="profile-designation"></h4>

                <ul class="list-group">
                    <li class="list-group-item">Posts <a href="timeline.html">1,333</a></li>
                    <li class="list-group-item">Following <a href="people-directory.html">541</a></li>

                </ul>

                <a href="mingle_fav_view<?php echo $row->id ?>"><button class="btn btn-danger" style="margin: 8px" onclick="my()">Like</button></a>
                <a href="mingleMessageView"><button class="btn btn-danger" style="margin: 8px">Message</button></a>
                <a href="viewMingle_table"><button class="btn btn-danger" style="margin: 8px">Faviourite</button></a>

                <form action="getnext<?php echo $x;$x++;  if($x<9){Session::put('val',$x);} else{$value = Session::pull('val', 1);
                }?>" method="post">




                <button type="submit" class="btn btn-danger btn-quirk btn-block profile-btn-follow">Next</button>
            </div>
            <div class="profile-left-body">
                <h4 class="panel-title">About Me</h4>
                <p><?php echo $row->description ?></p>

                <hr class="fadeout">
            </div>
        </div>
    </div>

    </form>



    <?php $x++; }?>
            <!--increment x-->


    </div>

@stop


@section('js_ref')
    @parent

@stop
