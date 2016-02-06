<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model {

    protected $table="storys";
	protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'address',
        'story',
        'image'

    ];

}
