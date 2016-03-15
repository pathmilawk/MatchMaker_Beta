<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Story extends Model {

    protected $table="storys";
	protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'address',
        'title',
        'story',
        'image'

    ];

    public static function getStories(){
        $story1=DB::table('storys')->where('published',1)->first();
        $story2=DB::table('storys')->where('published',2)->first();
        $stories=array(
            'story1' => $story1,
            'story2' => $story2,
        );
        return $stories;
    }

}
