<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
