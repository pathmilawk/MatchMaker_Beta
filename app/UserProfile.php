<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    protected $fillable = [
            'first_name',
			'last_name',
			'nickname',
			'gender',
			'interested_in',
			'age',
			'religion',
			'ethnicity',
			'country',
			'hometown',
			'location',
			'address',
			'telephone_mobile',
			'telephone_home',
            'telephone_office',
			'education',
			'work',
			'languages',
			'facebook',
			'about',
			'is_verified',
			'cover_photo',
			'inbox',
			'is_admin'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
