<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibleVerse extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'translation',
        'book',
        'book_number',
        'chapter',
        'verse',
        'text',
    ];
}
