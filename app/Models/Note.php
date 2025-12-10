<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=[
        'title',
        'description',
        'is_checked',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subnotes()
    {
        return $this->hasMany(SubNotes::class, 'note_id','id');
    }



}
