<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Request;
use Session;


class ProfileController extends Controller
{
    /*
    * Function for loading add 4to div
    *
    */
    public function addPhoto()
    {
        return view('ajax.addPhoto');
    }//end of addPhoto function


    /*
    * Function for loading interested people
    *
    */
    public function getI($id)
    {

        $interested = DB::table('show_interested')
            ->join('profiles', 'profiles.user_id', '=', 'show_interested.user_id')
            ->select('profiles.gender','profiles.first_name','profiles.last_name','profiles.occupation','profiles.user_id')
            ->where('show_interested.user_id','=',$id)
            ->get();

        if(count($interested)<1)
        {
            $interested = "No Result";

            //if query does not have any result return this
            return view('ajax.interest')->with('interested',$interested);
        }

        return view('ajax.interest')->with('interested',$interested);
    }//end of getI function



    /*
    * Function for add the 4to
    *
    */
    public function addPt(ProfileRequest $request)
    {
        $id = Auth::user()->id;
        $x = Carbon::now();

        if ($request->hasFile('photo')) {
            $picture = $request->file('photo')->getClientOriginalName();

            DB::table('uploaded_photos')->insert([
                [
                    'userID' => $id,
                    'photo' => $picture,
                    'created_at' => $x,
                    'updated_at' => $x
                ]
            ]);

            if (!File::exists('Uploaded_photos/'. $id)) {

                $result = File::makeDirectory('Uploaded_photos/' . $id);
                if ($result)
                {
                    Image::make($request->file('photo'))->resize(400, 400)->save('Uploaded_photos/' . Auth::user()->id . '/' . $request->file('photo')->getClientOriginalName());
                }
            }
            else
            {
                Image::make($request->file('photo'))->resize(400, 400)->save('Uploaded_photos/' . Auth::user()->id . '/' . $request->file('photo')->getClientOriginalName());
            }

            $user = DB::table('profiles')
                ->where('user_id', '=', $id)
                ->get();

            return view('client.profile')->with('user', $user);

        }

    }//End of addPt function



    /*
    * Function for loading 4to
    *
    */
    public function loadPhoto($id)
    {
        $image=DB::table('uploaded_photos')
            ->where('userID','=',$id)
            ->get();

        return view('ajax.LoadPhotos')->with('image',$image);

    }//end of addPhoto function


    /*
   * Function for loading 4to
   *
   */
    public function deletePhotos(ProfileRequest $request)
    {
        $id = Auth::user()->id;

        $delete = $request->all();

        DB::table('uploaded_photos')
            ->where('userID', '=', $id)
            ->where('photo','=',$delete['delP'])
            ->delete();

        File::delete('Uploaded_photos/' . Auth::user()->id . '/' . $request->$delete['delP']);

        $image=DB::table('uploaded_photos')
            ->where('userID','=',$id)
            ->get();

        return view('ajax.LoadPhotos')->with('image',$image);

    }//end of addPhoto function




    public function suggestedPartners($id)
    {
        $details = DB::table('profiles')
            ->where('user_id','=',$id)
            ->get();

        foreach($details as $raw)
        {
            $gender=$raw->gender;
            $age = $raw->age;
            $religion = $raw->religion;
            $motherT = $raw->motherTongue;
            $height= $raw->height;
            $complexion =$raw->complexion;
            $location =$raw->location;
            $languages = $raw->languages;


            if($gender == 'Male')
            {
                $final=DB::table('profiles')
                    ->join('users', 'users.id', '=', 'profiles.user_id')
                    ->where('profiles.user_id','!=', Auth::user()->id)
                    ->where('profiles.location','=',$location)
                    ->where('profiles.religion','=',$religion)
                    ->where('profiles.motherTongue','=',$motherT)
                    ->where('profiles.gender','!=',$gender)
                    ->where('profiles.age','<',$age)
                    ->where('profiles.height','<',$height)
                    ->where('profiles.complexion','=',$complexion)
                    ->where('profiles.languages','=',$languages)
                    ->where('users.is_admin','=',0)
                    ->where('users.user_activate_state','=','activate')
                    ->get();
            }
            else
            {
                $final=DB::table('profiles')
                    ->join('users', 'users.id', '=', 'profiles.user_id')
                    ->where('profiles.user_id','!=', Auth::user()->id)
                    ->where('profiles.location','=',$location)
                    ->where('profiles.religion','=',$religion)
                    ->where('profiles.motherTongue','=',$motherT)
                    ->where('profiles.gender','!=',$gender)
                    ->where('profiles.age','>',$age)
                    ->where('profiles.height','>',$height)
                    ->where('profiles.complexion','=',$complexion)
                    ->where('profiles.languages','=',$languages)
                    ->where('users.is_admin','=',0)
                    ->where('users.user_activate_state','=','activate')
                    ->get();
            }

            //check if has any results from the query
            if(count($final)<1)
            {
                $final = "No Result";

                //if query does not have any result return this
                return view('ajax.suggestedPartners')->with('final',$final);
            }

            //if query has values return this
            return view('ajax.suggestedPartners')->with('final',$final);
        }

        //return ("Hi");

    }

    public function ShowDetails()
    {
        $id = Auth::user()->id;

        DB::table('profiles')
            ->where('user_id','=',$id)
            ->update([

                'allowNonFriendDetails' => 1,

            ]);

        return json_encode("Anyone can view your details");
    }

    public function HideDetails()
    {
        $id = Auth::user()->id;

        DB::table('profiles')
            ->where('user_id','=',$id)
            ->update([

                'allowNonFriendDetails' => 0,

            ]);

        return json_encode("Your details are protected");
    }

    public function ShowPhotos()
    {
        $id = Auth::user()->id;

        DB::table('profiles')
            ->where('user_id','=',$id)
            ->update([

                'allowNonFriendPhotos' => 1,

            ]);

        return json_encode("Anyone can view your photos");
    }

    public function HidePhotos()
    {
        $id = Auth::user()->id;

        DB::table('profiles')
            ->where('user_id','=',$id)
            ->update([

                'allowNonFriendPhotos' => 0,

            ]);

        return json_encode("Your photos are protected");
    }


}