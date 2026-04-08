<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    use HasFactory, HasSEO;

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title,
        );
    }

    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function getMenuNameAttribute(): string
    {
        return $this->title;
    }
    
    public function getMenuLinkAttribute(): string
    {
        return route('page.show', $this->slug);
    }
}
