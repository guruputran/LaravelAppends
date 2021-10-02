<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//https://stackoverflow.com/questions/19084619/how-to-update-the-timezone-for-the-timestamps-created-at-and-updated-at-manage ghostyu answer

class Deposit extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'user_id', 'depositID', 'amount'
    ];


    public $appends = ['username', 'email'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getUsernameAttribute()
    {

        return $this->user->username;
    }
    public function getEmailAttribute()
    {

        return $this->user->email;
    }
}
