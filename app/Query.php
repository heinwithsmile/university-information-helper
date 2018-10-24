<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{

    protected $fillable = [
        'questions',
        'category_id',
        'keyword1',
        'keyword2',
        'answers',
        'answer_file',
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }

}
