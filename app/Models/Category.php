<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'fa_name', 'en_name'
    ];

    public function product()
    {
        return $this->hasMany('App\Models\Products');
    }
}
