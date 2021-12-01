<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       $user = User::create([
            'name' => 'Punisher',
            'email' => 'punisher@punishment.com',
           'password' => 'kjadkfbdfkj'
        ]);


       $category = Category::create([
            'name' => 'Penalty',
            'slug' => 'penalty'
        ]);


      Post::factory(5)->create([
          'user_id' => $user->id,
          'category_id' => $category->id
      ]);
    }
}
