<?php namespace App\Http\Controllers;

use App\Http\Requests;
//use App\Http\Controllers\Controller;
use Request;
use Mail;
use DB;

use validator;
use App\GallaryContent;
use Illuminate\Support\Facades\Input;
use Sessions;
use Image;

class imagecontroller extends Controller {


    public function showImageGallery()
    {

        $galleryContent =  GalleryContent::where('contentType','=','image')->get();
        return view('pages.admin.adminImageGallery',array('imageList' => $galleryContent, 'status' =>null));
    }

   /* public function uploadImageToGallery(Requests $request)
	{

        $galleryContent = new GalleryContent();
        $file = Input::file();
        $fileName = explode(".", $file->getClientOriginalName());
        $fileExtention = $file->getClientOriginalExtension();

        $fileType = $contentType;
        $fileDescription = $request->input($contentTitle);
        $file->move($pathToSave, $file->getClientOriginalName());
        $galleryContent->contentType = $fileType;
        $galleryContent->contentName = $fileName[0];
        $galleryContent->contentFileExtension = $fileExtention;
        $galleryContent->contentDescription = $fileDescription;
        $galleryContent->save();
    }
*/



public function deleteImageFromGallery($id) {

    if (GalleryContent::deleteContent($id,'client/img/img-gallery/')){
/*        return redirect()->action('AdminDashboardController@showImageGallery')->with('message', 'Image has been removed from the server ');;*/
    } else {
       /* return redirect()->action('AdminDashboardController@showImageGallery')->with('message', 'error occurred');;*/
    }


}

public function uploadVideoToGallery(Request $request)
{
    if (GalleryContent::saveContent($request, 'video', 'videoTitle', 'client/video/vid-gallery')) {
/*        return redirect()->action('AdminDashboardController@showImageGallery')->with('message', 'Image has been successfully uploaded');*/
    } else {
/*        return redirect()->action('AdminDashboardController@showImageGallery')->with('message', 'error occurred');*/
    }


}

/**
 * Store a newly created resource in storage.
 *
 * @return Response
 */
public function showVideoGallery()
{
    $galleryContent =  GalleryContent::where('contentType','=','video')->get();
    return view('pages.admin.adminVideoGallery',array('videoList' => $galleryContent));
}



    public function test()
    {
           return view('messages.imageform');

    }



    //This method will save the image to database
    public function upload(Request $request)
    {
        $title=Input::get('title');


/*       --$fileName = explode(".", $file->getClientOriginalName());--*/
        Image::make(Input::file('image'))->resize(500, 500)->save(public_path('images').'/'.Input::file('image')->getClientOriginalName(),60);
        $fileName=pathinfo(public_path('images') . '/' .Input::file('image')->getClientOriginalName(),PATHINFO_BASENAME);
        $fileExtention = pathinfo(public_path('images') . '/' .Input::file('image')->getClientOriginalName(),PATHINFO_EXTENSION);

        $fileType = 'image';
/*       --$fileDescription = $request->input('demo');--*/

        DB::table('gallery_contents')->insert(['contentType' =>$fileType,'contentName' =>$fileName,'contentFileExtension' => $fileExtention, 'title' =>$title]);
        \Session::flash('message','successfully saved.');

        return view('messages.imageform');



    }

    public function viewUpload()
    {
       $result= DB::table('gallery_contents')->where('contentType','=','image')->get();

        return view('client.index')->with('result',$result);
    }


    public function editUpload()
    {

        $result=DB::table('gallery_contents')->where('contentType','=','image')->get();
        return view('messages.viewEditableImages')->with('result',$result);
    }

    public function delete($id)
    {
        $res=DB::table('gallery_contents')->where('id','=',$id)->delete();
        $result=DB::table('gallery_contents')->get();
        return view('messages.viewEditableImages')->with('result',$result);

    }

    public function menu()
    {
        return view('messages.imageform');
    }

    //this method will set db values to 1
    //and update the db

    public function setUploadone($id)
    {
        DB::table('gallery_contents')->where('publishStatus', 1)->update(['publishStatus' => 0]);
        DB::table('gallery_contents')->where('id', $id)->update(['publishStatus' => 1]);

        return redirect('editUploadImage')->with('addmessage','Add One has Been Successfully Added');

    }

    //this method will set db values to 2
    //and update the db
    public function setUploadtwo($id)
    {
        DB::table('gallery_contents')->where('publishStatus', 2)->update(['publishStatus' => 0]);
        DB::table('gallery_contents')->where('id', $id)->update(['publishStatus' => 2]);
        return redirect('editUploadImage')->with('addmessage','Add has Two Been Successfully Added');

    }

    //this method will set db values to 3
    //and update the db
    public function setUploadthree($id)
    {
        DB::table('gallery_contents')->where('publishStatus', 3)->update(['publishStatus' => 0]);
        DB::table('gallery_contents')->where('id', $id)->update(['publishStatus' => 3]);
        return redirect('editUploadImage')->with('addmessage','Add has Three Been Successfully Added');;

    }

    //this method will set db values to 4
    //and update the db
    public function setUploadfour($id)
    {
        DB::table('gallery_contents')->where('publishStatus', 4)->update(['publishStatus' => 0]);
        DB::table('gallery_contents')->where('id', $id)->update(['publishStatus' => 4]);
        return redirect('editUploadImage')->with('addmessage','Add has Been Foue Successfully Added');;

    }

    public function StoreSendMsg()
{
    /*Input::ge('');
    Input::get('');
    Input::get('');*/
}


}
