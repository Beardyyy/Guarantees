<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{


    use HasFactory;

    protected $with = ['category', 'author'];

    protected $fillable = ['slug', 'title', 'excerpt', 'body'];





    public function scopeFilter($query, array $filter)
    {


        $query->when($filter['search'] ?? false, function ($query, $search)
        {

            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });



        $query->when($filter['category'] ?? false, function ($query, $category)
        {

            $query->whereHas('category', fn($query) =>
            $query->where('slug', $category));
        });



        $query->when($filter['author'] ?? false, function ($query, $author)
        {

            $query->whereHas('author', fn($query) =>
            $query->where('id', $author));
        });

    }




    public function getRouteKeyName()
    {
        return 'slug';
    }



    public function comment()
    {
        return $this->hasMany(Comment::class);
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
