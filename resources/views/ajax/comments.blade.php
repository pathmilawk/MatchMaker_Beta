<h3>{{ $commentCount }} Comments</h3>

@foreach($comments as $comment)<!--comments section-->
<div class="met">
    <div class="code-in">
        <p class="smith"><a href="#">{{ $comment->name }}</a> <span>{{$comment->created_at}}</span></p>
        <p class="reply"><a href="#"><i> </i>REPLY</a></p>
        <div class="clearfix"> </div>
    </div>
    <div class="comments-top-top">
        <div class="men" >
            <img   src="{{asset('external_css/images/men.png')}}" alt="">
        </div>
        <p class="men-it">{{$comment->comment}} </p>
        <div class="clearfix"> </div>
    </div>
</div>
@endforeach