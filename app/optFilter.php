<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class optFilter extends Model {

	/*
	 * Get the user that uses this optional filter
	 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
