<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Story;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('admin');
    }

    public  function adminPanel(){
        $stories=DB::table('storys')->get();
        return view('admin.admin_panel')->with('stories',$stories);
    }

}
