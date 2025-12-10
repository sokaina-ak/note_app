<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubNotes extends Model
{
    protected $fillable = [
        'note_id',
        'content',
    ];

    public function note()
    {
        return $this->belongsTo(Note::class, 'note_id');
    }
}
