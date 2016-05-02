<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\DB;
use Image;

class EditProfileController extends Controller {

	/*
	 * function for changing the profile picture of the user
	 *
	*/
	public function changeProfilePicture(Requests $request)
	{

		return ($request->all());
		/*Image::make ($requests>file('file'))->resize(200,200)->save(public_path('Profile_Pictures').'/'.Auth::user()->id.'/'.$requests->file('file')->getClientOriginalName(),60);

		$input = $requests->except(['file']);
		$input['image']=pathinfo(public_path('Profile_Pictures').'/'.Auth::user()->id.'/'.$requests->file('file')->getClientOriginalName(),PATHINFO_BASENAME);


		$x = Carbon::now();

		DB::table('profiles')
			->where('user_id', $input)
			->update(['profile_picture' => 1]);

		$picStatus=DB::table('profiles')
			->select('profile_picture')
			->where('user_id', $input)
			->get();

		if($picStatus == 0)
		{
			DB::table('profilePictures')
				->insert([
					[
						'userID' => $input,
						'picture' => $input,
						'created_at' => $x,
						'updated_at' => $x
					]
				]);
		}
		else
		{
			DB::table('profilePictures')
				->where('user_id', $input)
				->update(['picture' => $input]);
		}

		$user = DB::table('profiles')
			->where('user_id','=',$input)
			->get();

		return view('ajax.editProfile')->with('user',$user);*/

	}//End of the changeProfilePicture function


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
}
