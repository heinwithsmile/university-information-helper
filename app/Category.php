<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected  $table = 'categories';
    protected $fillable = [
        'categoryName'
    ];

    public function questions()
    {
        return $this->hasMany('App\Query');
    }
}
