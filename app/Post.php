<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 可填資料名稱: title, content
    protected $fillable=['title', 'content'];
}
