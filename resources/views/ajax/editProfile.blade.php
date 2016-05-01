@foreach($user as $key)
    <div class="panel panel-post-item">
        Change the profile picture
        <img class="img-circle img-responsive" src="{{asset('Profile_Pictures'.$key->first_name.'/'.$key->user_id.'.png')}}" alt="" style="left: 100px;">
        <input type="file" value="Change the profile picture">
        <button class="btn btn-danger" style="padding:10px; float: right;" onclick="changeProfilePicture({{$key->user_id}})">Change</button>
    </div>
    <div class="panel panel-post-item">
        <h4>Contact Information</h4>
        <table style="width: 100%;">
            <tr>
                <td style="padding: 10px; width: 25%;"><i class="fa fa-envelope"></i>  Email</td>
                <td style="padding: 10px;">{{Auth::user()->email}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-list-alt"></i>  Address </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->address}}" style="width: 250px;"></td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-phone"></i> Contact No </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->telephone}}"></td>
            </tr>
        </table>
        <button class="btn btn-danger" style="padding:10px; float: right;">Update</button>
    </div>
    <div class="panel panel-post-item">
        <h4>Appearance</h4>
        <table style="width: 100%;">
            <tr>
                <td style="padding: 10px; width: 25%;"><i class="fa fa-info-circle"></i>  Height</td>
                <td style="padding: 10px;"><input type="text" value="{{$key->height}}"> feet</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i>  Complexion </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->complexion}}"></td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Hair Type </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->hair}}"></td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Body Type </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->bodyType}}"></td>
            </tr>
        </table>
        <button class="btn btn-danger" style="padding:10px; float: right;">Update</button>
    </div>
    <div class="panel panel-post-item">
        <h4><i class="fa fa-mortar-board"></i> Education</h4>
        <br>
        <table style="width: 100%;">
            <tr style="padding: 10px;">{{$key->education}}</tr>
        </table>
        <button class="btn btn-danger" style="padding:10px; float: right;">Update</button>
    </div>
    <div class="panel panel-post-item">
        <h4>Other Information</h4>
        <table style="width: 100%;">
            <tr>
                <td style="padding: 10px; width: 50%;"><i class="fa fa-info-circle"></i>  Sign</td>
                <td style="padding: 10px;">{{$key->sign}}</td>
            </tr>
            <tr>
                <td style="padding: 10px; width: 50%;"><i class="fa fa-info-circle"></i>  Mother Tongue</td>
                <td style="padding: 10px;">{{$key->motherTongue}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Languages that can speak </td>
                <td style="padding: 10px;">{{$key->languages}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i>  Interested in </td>
                <td style="padding: 10px;">{{$key->interested_in}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Smoking </td>
                <td style="padding: 10px;">{{$key->smoking}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Drinking </td>
                <td style="padding: 10px;">{{$key->drinking}}</td>
            </tr>
        </table>
        <button class="btn btn-danger" style="padding:10px; float: right;">Update</button>
    </div>
    <div class="panel panel-post-item" style="text-align: center;">
        <button class="btn btn-danger" style="padding:10px;">Finish Editing</button>
    </div>
@endforeach
