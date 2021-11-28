<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{   use SoftDeletes;
    protected $fillable = [
        'title',
        'body',
    ];//保存できるキーの中に入ってるものを指定
    
    public function getPaginateByLimit(int $limit_count = 10){
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
