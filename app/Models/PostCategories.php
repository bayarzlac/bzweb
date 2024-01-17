<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategories extends Model
{
    use SoftDeletes;

    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'title', 
        'main_id'
    ];

    public function children()
    {
        return $this->hasMany(PostCategories::class, 'main_id')->with('children');
    }
}
