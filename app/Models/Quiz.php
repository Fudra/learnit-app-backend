<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quizzes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'thumbnail'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_quizzes');
    }
}
