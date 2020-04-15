<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'post_date',
        'post_content',
        'post_title',
        'post_media',
        'post_status',
        'post_name',
        'post_type',
        'post_category'
    ];
    public function author()
    {
        return $this->belongsTo('App\User','user_id');
    } 
}