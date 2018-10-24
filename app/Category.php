<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'categoryName'
    ];

    public function questions()
    {
        return $this->hasMany(Query::class);
    }
}
