<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = User::create([
            'name' => 'Butters Luo',
            'email' => '8061@qq.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Kyle',
            'email' => '806223@qq.com',
            'password' => Hash::make('password')
        ]);

        $category1 = Category::create([
            'name' => 'News'
        ]);
        $category2 = Category::create([
            'name' => 'Updates'
        ]);
        $category3 = Category::create([
            'name' => 'Marketing'
        ]);
        $category4 = Category::create([
            'name' => 'Partnership'
        ]);

        $tag1 = Tag::create([
            'name' => 'job'
        ]);

        $tag2 = Tag::create([
            'name' => 'customers'
        ]);

        $tag3 = Tag::create([
            'name' => 'record'
        ]);

        $tag4 = Tag::create([
            'name' => 'offer'
        ]);

        $tag5 = Tag::create([
            'name' => 'version'
        ]);

        $post1 = Post::create([
            'title'=>'We relocated our office to a new designed garage',
            'description' => 'XXXXXXXXX',
            'content'=>'MMMMM',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg',
            'user_id'=> $author1->id
        ]);

        $post2 = Post::create([
            'title'=>'Congratulate and thank to Maryam for joining our team',
            'description' => 'XXXXXXXXX',
            'content'=>'MMMMM',
            'category_id' => $category2->id,
            'image' => 'posts/6.jpg',
            'user_id'=> $author1->id
        ]);
        $post3 = Post::create([
            'title'=>'Top 5 brilliant content marketing strategies',
            'description' => 'XXXXXXXXX',
            'content'=>'MMMMM',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg',
            'user_id'=> $author1->id
        ]);
        $post4 = Post::create([
            'title'=>'Best practices for minimalist design with example',
            'description' => 'XXXXXXXXX',
            'content'=>'MMMMM',
            'category_id' => $category4->id,
            'image' => 'posts/4.jpg',
            'user_id'=> $author2->id
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);
        $post4->tags()->attach([$tag4->id, $tag5->id]);

    }
}
