<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    'title', 'description', 'deadline','status', 'author_id'
];

    public function task()
    {
        return $this->belongsTo('App\User');
    }

    public function getUserAttribute()
    {
        return User::find($this->author_id);
    }
}
