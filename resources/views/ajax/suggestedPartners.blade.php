@if($final == "No Result")                                                    {{--This div will be displayed if no search results--}}
<div class="panel">
    <p>No Matching partner found. Update your profile and try again.</p>
</div>
@else
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">People You May Know</h4>
        </div>
        <div class="panel-body" >
            <ul class="media-list user-list">
                @foreach($final as $key)
                    <li class="media">
                        <div class="media-left">
                            <a href="{{$key->user_id}}">
                                @if($key->profile_picture == 1)
                                    <img class="media-object img-circle" src="{{asset('Profile_Pictures/'.$key->user_id.'/'.$key->picture)}}" alt="">
                                    @if($key->gender == "Male")
                                        <img class="media-object img-circle" src="{{asset('Profile_Pictures/defaultMale.png')}}" alt="">
                                    @else
                                       <img class="media-object img-circle" src="{{asset('Profile_Pictures/defaultFemale.png')}}" alt="">
                                    @endif
                                @endif
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="{{$key->user_id}}">{{$key->first_name}} {{$key->last_name}}</a></h4>
                            <span>{{$key->occupation}}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div><!-- panel -->
@endif