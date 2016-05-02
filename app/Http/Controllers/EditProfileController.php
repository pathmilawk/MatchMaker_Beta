<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class EditProfileController extends Controller {

	/*
	 * function for changing the profile picture of the user
	 *
	*/
	public function changeProfilePicture(ProfileRequest $request)
	{
		if( $request->hasFile('profilePic') ) {

			Image::make ($request->file('profilePic'))->resize(200,200)->save('Profile_Pictures/'.Auth::user()->id.'.png');



		}

		return "Hi";
		//$details = $request->all();



		//Image::make ($request->file('file'))->resize(600,400)->save(public_path('internal_css\images\photos').'/'.$request->file('file')->getClientOriginalName(),60);

		//$input = $request->all();
		//$id = $input['id'];
		/*$input['image']=pathinfo(public_path('Profile_Pictures').'/'.Auth::user()->id.'/'.$request->file('file')->getClientOriginalName(),PATHINFO_BASENAME);

		$x = Carbon::now();

		DB::table('profiles')
			->where('user_id', $input['id'])
			->update(['profile_picture' => 1]);*/


		/*$check=DB::table('profilepictures')
			->select('picture')
			->where('user_id','=',$id)
			->get();

		if(count($check)>0){
			return $id;
		}
		return $id;*/

		/*if($picStatus == null)
		{
			DB::table('profilePictures')
				->insert([
					[
						'userID' => $input['id'],
						'picture' => $input['image'],
						'created_at' => $x,
						'updated_at' => $x
					]
				]);
		}
		else
		{
			DB::table('profilePictures')
				->where('user_id', $input['id'])
				->update(['picture' => $input['image']]);
		}*/

		/*$user = DB::table('profiles')
			->where('user_id','=',Auth::user()->id)
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
