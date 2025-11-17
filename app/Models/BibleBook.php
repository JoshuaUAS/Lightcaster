<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BibleBook extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'abbreviation',
        'book_number',
        'testament',
        'chapter_count',
    ];
}
