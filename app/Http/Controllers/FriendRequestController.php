<?php namespace App\Http\Controllers;

use App\Http\Requests;

class FriendRequestController extends Controller {

	/*
     * function for accept request
     *
     *return

    */
	public function acceptReq()
	{
		return view('client.search_main2');
	}

}
