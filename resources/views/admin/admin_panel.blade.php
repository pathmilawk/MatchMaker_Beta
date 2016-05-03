@extends('admin')
@section('css_ref')
    @parent
@stop

@section('content')
    <div class="row">
        <div class="alert alert-info" style="text-align: center;">
            <strong style="font-size: large;">Manage Success Stories</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-success">Success stories</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="col-md-3" style="height: 30px;text-align: center;"><h3 class="text-primary">Image</h3></div>
                                <div class="col-md-3" style="height: 30px;text-align: center;"><h3 class="text-primary">Author</h3></div>
                                <div class="col-md-3" style="height: 30px;text-align: center;"><h3 class="text-primary">Title</h3></div>
                            </div>
                            @foreach($stories as $story)
                                <div class="row">
                                    <div class="col-md-3" style="height: 120px;">
                                        <img src="{{ asset('internal_css/images/photos/'.$story->image) }}" style="width: 180px;height: 120px;">
                                    </div>
                                    <div class="col-md-3" style="height: 120px;text-align: center;"><p style="font-size: large">{{ $story->firstname }}{{ $story->lastname }}</p></div>
                                    <div class="col-md-3" style="height: 120px;text-align: center;"><p style="font-size: large">{{ $story->title }}</p></div>
                                    <div class="col-md-3">
                                        <table style="background-color: white;">
                                            <tr>
                                                <td style="margin: 3px;"><?php if( $story->published==1 )
                                                            {
                                                                echo "<p style='font-size: medium;margin-top: 5px;margin-right:8px;margin-left:15px;padding: 2%;font-style: oblique;'>";echo "active as 1";"</p>";
                                                            }
                                                        elseif( $story->published==2 ){
                                                                echo "<p style='font-size: medium;margin-top: 5px;margin-right:8px;margin-left:15px;padding: 2%;font-style: oblique'>";echo "active as 2";"</p>";
                                                            }
                                                            else{
                                                                echo "<p style='font-size: medium;margin-top: 5px;margin-right:8px;margin-left:21px;padding: 2%;font-style: oblique'>";echo " Not active";"</p>";
                                                            } ?></td>
                                                <td style="margin: 3px;"><a href="set_story1/{{ $story->id }}"><button class="btn btn-success btn-sm" style="margin-top: 10%;margin-right:8px;">Set as active 1</button></a></td>
                                                <td style="margin: 3px;"><a href="delete_story/{{ $story->id }}" onclick="return del()"><button class="glyphicon glyphicon-trash" style="margin-top: 25%;padding:8%;font-size: 20px;"></button></a></td>
                                            </tr>
                                            <tr>
                                                <td><p>        </p></td>
                                                <td><a href="set_story2/{{ $story->id }}"><button class="btn btn-info btn-sm" style="margin-right:8px;">Set as active 2</button></a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <hr style="padding:5px;">
                            @endforeach
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
@stop


@section('js_ref')
    @parent
    <script>
        function del(){
            var a=confirm("Do you want to delete this story?");
            if(a){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
@stop
