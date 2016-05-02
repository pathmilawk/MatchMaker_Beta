@foreach($user as $key)
    <div class="panel panel-post-item">
        Change the profile picture
            <img class="img-circle img-responsive" src="{{asset('Profile_Pictures/'.$key->user_id.'.png')}}" alt="" style="left: 100px;">
            <input type="file" class="form-group" id="profilePic" name="profilePic">
            <button class="btn btn-danger" style="padding:10px; float: right;" onclick="changeProfilePicture({{$key->user_id}})">Change</button>
    </div>
    <div class="panel panel-post-item">
        <h4>Basic Information</h4>
        <table style="width: 100%;">
            <tr>
                <td style="padding: 10px; width: 25%;"><i class="fa fa-info-circle"></i>  Hometown</td>
                <td style="padding: 10px;"><input type="text" id="Hometown" value="{{$key->hometown}}"></td>
                <td style="padding: 10px;"><div id="errorhome" class="alert alert-danger" style="display: none;" >Cannot Contain Numbers.</div></td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i>  Current Location </td>
                <td style="padding: 10px;">
                    <select id="Location">
                        @if( $key->hometown != null)
                            <option value="{{$key->location}}">{{$key->location}}</option>
                        @endif
                        <option value="Ampara">Ampara</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Manner">Manner</option>
                        <option value="Matale">Matale</option>
                        <option value="Matara">Matara</option>
                        <option value="Monaragala">Monaragala</option>
                        <option value="Mullativu">Mullativu</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Vavuniya">Vavuniya</option>
                        <option value="Ampara">Ampara</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Country </td>
                <td style="padding: 10px;"><input type="text" id="Country" value="{{$key->country}}"></td>
                <td style="padding: 10px;"><div id="errorcon" class="alert alert-danger" style="display: none;" >Cannot Contain Numbers.</div></td>
            </tr>
        </table>
        <button class="btn btn-danger" style="padding:10px; float: right;" onclick="updateBasicInfo({{$key->user_id}})">Update</button>
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
                <td style="padding: 10px;"><input type="text" value="{{$key->address}}" style="width: 200px;" id="Address"></td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-phone"></i> Contact No </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->telephone}}" id="ContactNo"></td>
                <td style="padding: 10px;"><div id="errortel" class="alert alert-danger" style="display: none;" >Invalid format.</div></td>
            </tr>
        </table>
        <button class="btn btn-danger" style="padding:10px; float: right;" onclick="updateContactInfo({{$key->user_id}})">Update</button>
    </div>
    <div class="panel panel-post-item">
        <h4>Appearance</h4>
        <table style="width: 100%;">
            <tr>
                <td style="padding: 10px; width: 25%;"><i class="fa fa-info-circle"></i>  Height</td>
                <td style="padding: 10px;"><input type="text" value="{{$key->height}}" id="height" style="width: 100px"> feet [ex 5.1]</td>
                <td style="padding: 10px;"><div id="errorheight" class="alert alert-danger" style="display: none;" >Cannot contain letters.</div></td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i>  Complexion </td>
                <td style="padding: 10px;">
                    <select id="complexion">
                        @if($key->complexion != null)
                            <option value="{{$key->complexion}}">{{$key->complexion}}</option>
                        @endif
                        <option value="Dark">Dark</option>
                        <option value="Fair">Fair</option>
                        <option value="Brown">Brown</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Hair Type </td>
                <td style="padding: 10px;">
                    <select id="hair">
                        @if($key->hair != null)
                            <option value="{{$key->hair}}">{{$key->hair}}</option>
                        @endif
                        <option value="Curly">Curly</option>
                        <option value="Straight">Straight</option>
                        <option value="Wavy">Wavy</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Body Type </td>
                <td style="padding: 10px;">
                    <select id="bodyType">
                        @if($key->bodyType != null)
                            <option value="{{$key->bodyType}}">{{$key->bodyType}}</option>
                        @endif
                        <option value="Slim">Slim</option>
                        <option value="Well Build">Well Build</option>
                        <option value="Average">Average</option>
                        <option value="Fat">Fat</option>
                        <option value="Skinny">Skinny</option>
                    </select>
                </td>
            </tr>
        </table>
        <button class="btn btn-danger" style="padding:10px; float: right;" onclick="updateAppearance({{$key->user_id}})">Update</button>
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
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Birthday </td>
                <td style="padding: 10px;">
                    <select id="day">
                        <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                        <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                        <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                        <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        <option value="13">13</option><option value="14">14</option><option value="15">15</option>
                        <option value="16">16</option><option value="17">17</option><option value="18">18</option>
                        <option value="19">19</option><option value="20">20</option><option value="21">21</option>
                        <option value="22">22</option><option value="23">23</option><option value="24">24</option>
                        <option value="25">25</option><option value="26">26</option><option value="27">27</option>
                        <option value="28">28</option><option value="29">29</option><option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select id="month">
                        <option value="January">January</option><option value="February">February</option><option value="March">March</option>
                        <option value="April">April</option><option value="May">May</option><option value="June">June</option>
                        <option value="July">July</option><option value="August">August</option><option value="September">September</option>
                        <option value="October">October</option><option value="November">November</option><option value="December">December</option>
                    </select>
                    <select id="year">
                        <option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
                        <option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option>
                        <option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> About me </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->about}}"></td>
            </tr>
            <tr>
                <td style="padding: 10px; width: 50%;"><i class="fa fa-info-circle"></i>  Sign</td>
                <td style="padding: 10px;">{{$key->sign}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;"><i class="fa fa-info-circle"></i> Religion </td>
                <td style="padding: 10px;"><input type="text" value="{{$key->religion}}"></td>
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
