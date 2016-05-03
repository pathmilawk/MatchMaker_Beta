@foreach($user as $key)
    <div class="panel panel-post-item" style="align-items: center">
        <h3 align="center">Change the profile picture</h3>
        <br>
        <img style="left: 200px;" class="img-circle img-responsive" src="{{asset('Profile_Pictures/'.$key->user_id.'/'.$key->picture)}}" alt="">
        {!! Form::open(array('action' => 'EditProfileController@changePro','files'=>true)) !!}
            <input type="file" class="form-group" id="profilePic" name="profilePic" style="left: 200px;">
            <br>
            <input type="submit" class="btn btn-danger" style="padding:10px; float: right;" value="Change">
        {!! Form::close() !!}
    </div>
@endforeach
