<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class optFilter extends Model {

    protected $table="opt_filters";

    protected $fillable = [
        'user_id',
        'gender',
        'age',
        'district',
        'religion',
        'motherTongue',
        'height',
        'complexion',
        'hair',
        'bodyType',
        'occupation',
        'drinking',
        'smoking'
    ];



    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
