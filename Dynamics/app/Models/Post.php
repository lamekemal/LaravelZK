<?php

namespace App\Models;

use Tonysm\RichTextLaravel\Models\Traits\HasRichText;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use HasRichText;
    use Sluggable;

    protected $guarded = [];

    protected $richTextFields = [
        'body',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}