<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

    protected $table="notifications";
    protected $fillable = [
        'sender_username',
        'receiver_username',
        'type',
        'message',
        'linktogo',
        'image',
        'read',
    ];

}
