<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'source_language_id',
        'target_language_id',
        'source_text',
        'translated_text',
    ];

    // Relationships
    public function sourceLanguage()
    {
        return $this->belongsTo(Language::class, 'source_language_id');
    }

    public function targetLanguage()
    {
        return $this->belongsTo(Language::class, 'target_language_id');
    }
}
