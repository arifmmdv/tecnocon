<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Brand extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'name','slug','url','primary_hex','is_visible','description'
    ];

    public $translatable = ['description'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
