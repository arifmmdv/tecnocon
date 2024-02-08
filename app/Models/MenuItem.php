<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class MenuItem extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['title','slug','menu_id','parent_id'];

    public $translatable = ['title'];

    public function template(): BelongsTo
    {
        return $this->belongsTo('App\Models\Menu');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuItem::class,'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany('App\Models\MenuItem','parent_id','id');
    }
}
