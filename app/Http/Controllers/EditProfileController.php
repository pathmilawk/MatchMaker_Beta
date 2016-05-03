<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;

class EditProfileController extends Controller
{

    /*
     * function for changing the profile picture of the user
     *
    */
    public function changeProfilePicture($id)
    {
        $user = DB::table('profiles')
            ->where('user_id', '=', $id)
            ->get();

        return view('ajax.changeProfilepic')->with('user', $user);

    }//End of the changeProfilePicture function


    /*
	 * function for changing the basic information of the user
	 * posted parameters - user id=id, Hometown=home, Location=loc, Country=con
	*/
    public function changePro(ProfileRequest $request)
    {
        $id = Auth::user()->id;
        $x = Carbon::now();

        if ($request->hasFile('profilePic')) {
            $picture = $request->file('profilePic')->getClientOriginalName();

            DB::table('profiles')
                ->where('user_id', $id)
                ->update([
                    'profile_picture' => 1,
                    'picture' => $picture
                ]);

            if (!File::exists('Profile_Pictures/' . $id)) {

                $result = File::makeDirectory('Profile_Pictures/' . $id);
                if ($result)
                {
                    Image::make($request->file('profilePic'))->resize(200, 200)->save('Profile_Pictures/' . Auth::user()->id . '/' . $request->file('profilePic')->getClientOriginalName());
                }
            }
            else
            {
                Image::make($request->file('profilePic'))->resize(200, 200)->save('Profile_Pictures/' . Auth::user()->id . '/' . $request->file('profilePic')->getClientOriginalName());
            }
        }

        $user = DB::table('profiles')
            ->where('user_id', '=', $id)
            ->get();

        return view('client.profile')->with('user', $user);
    }



	/*
	 * function for changing the basic information of the user
	 * posted parameters - user id=id, Hometown=home, Location=loc, Country=con
	*/
	public function updateBasicInfo(ProfileRequest $request)
	{
		$details = $request->all();

		$id= $details['id'];

		DB::table('profiles')
			->where('user_id','=',$id)
			->update([
				'hometown' => $details['home'],
				'location' => $details['loc'],
				'country' => $details['con']
			]);

		$user = DB::table('profiles')
			->where('user_id','=',$id)
			->get();

		return view('ajax.editProfile')->with('user',$user);

	}//End of the updateBasicInfo function

	/*
	 * function for changing the contact information of the user
	 * posted parameters - user id=id, Address=address, contact no=tp
	*/
	public function updateContactInfo(ProfileRequest $request)
	{
		$details = $request->all();

		$id= $details['id'];

		DB::table('profiles')
			->where('user_id','=',$id)
			->update([
				'address' => $details['address'],
				'telephone' => $details['tp'],
			]);

		$user = DB::table('profiles')
			->where('user_id','=',$id)
			->get();

		return view('ajax.editProfile')->with('user',$user);

	}//End of the updateContactInfo function

	/*
	 * function for changing the Appearance information of the user
	 * posted parameters - user id=id, hair=hair, complexion=complexion, height=height, body type=body
	*/
	public function updateAppearance(ProfileRequest $request)
	{
		$details = $request->all();

		$id= $details['id'];

		DB::table('profiles')
			->where('user_id','=',$id)
			->update([
				'height' => $details['height'],
				'hair' => $details['hair'],
				'complexion' => $details['complexion'],
				'bodyType' => $details['body'],
			]);

		$user = DB::table('profiles')
			->where('user_id','=',$id)
			->get();

		return view('ajax.editProfile')->with('user',$user);

	}//End of the updateAppearance function

	/*
	 * function for changing the Appearance information of the user
	 * posted parameters - user id=id, hair=hair, complexion=complexion, height=height, body type=body
	*/
	public function updateEducation(ProfileRequest $request)
	{
		$details = $request->all();

		$id= $details['id'];

		DB::table('profiles')
			->where('user_id','=',$id)
			->update([
				'education' => $details['des'],
				'occupation' => $details['occ']
			]);

		$user = DB::table('profiles')
			->where('user_id','=',$id)
			->get();

		return view('ajax.editProfile')->with('user',$user);

	}//End of the updateAppearance function


	/*
	 * function for changing the Other information of the user
	 * posted parameters - d=date, m=month, y=year, about=about me, religion=religion, mt=mother tongue, sign=sign, inter=interested in,
	*/
	public function updateOther(ProfileRequest $request)
	{
		$details = $request->all();

		$id= $details['id'];

		DB::table('users')
			->where('id','=',$id)
			->update([
				'birthDate' => $details['d'],
				'birthYear' => $details['y'],
				'birthMonth' => $details['m'],
			]);

		DB::table('profiles')
			->where('user_id','=',$id)
			->update([
				'about' => $details['about'],
				'religion' => $details['religion'],
				'motherTongue' => $details['mt'],
				'languages' => $details['la'],
				'sign' => $details['sign'],
				'interested_in' => $details['inter'],
				'drinking' => $details['drinking'],
				'smoking' => $details['smoking'],
			]);

		$user = DB::table('profiles')
			->where('user_id','=',$id)
			->get();

		return view('ajax.editProfile')->with('user',$user);

	}//End of the updateOther function
}
