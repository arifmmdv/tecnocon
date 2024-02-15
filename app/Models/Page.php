<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title','slug','parent_id','is_visible','image','template_id','content','seo_title','seo_description'
    ];

    public $translatable = ['title','content','seo_title','seo_description'];

    protected $casts = [
        'content' => 'array'
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Page::class,'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Page::class,'parent_id','id');
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }
}
