<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Song extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author',
        'category',
        'lyrics',
        'background_id',
        'theme_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'lyrics' => 'array',
    ];

    /**
     * Get the background associated with the song.
     */
    public function background(): BelongsTo
    {
        return $this->belongsTo(Background::class);
    }

    /**
     * Get the theme associated with the song.
     */
    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }
}
