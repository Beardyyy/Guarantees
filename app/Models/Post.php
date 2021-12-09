<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    use HasFactory;

    protected $with = ['category', 'author'];

    protected $fillable = ['slug', 'title', 'excerpt', 'body'];


    public function scopeFilter($query)
    {
        if (request('search')) {
            $query
                ->where('title', 'like', '%' . request('search',) . '%')
                ->orWhere('body', 'like', '%' . request('search',) . '%');
        }
    }



    public function getRouteKeyName()
    {
        return 'slug';
    }




    public function category()
    {
        return $this->belongsTo(Category::class);
    }





    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
