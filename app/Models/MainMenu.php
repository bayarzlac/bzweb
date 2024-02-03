<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainMenu extends Model
{
    use SoftDeletes;

    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'num', 
        'title', 
        'description', 
        'url', 
        'parent_id'
    ];

    public function children()
    {
        return $this->hasMany(MainMenu::class, 'parent_id')->with('children');
    }
}