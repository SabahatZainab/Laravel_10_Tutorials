<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function add_data()
    {
        $author = new Author();
        $author->username = "author2";
        $author->password = "123456";
        $author->save();

        $post1 = Post::create([
            'title' => 'title1',
            'category' => 'category1',
            'author_id' => 3
        ]);

        $post2 = Post::create([
            'title' => 'title2',
            'category' => 'category2',
            'author_id' => 5
        ]);

        $post3 = Post::create([
            'title' => 'title3',
            'category' => 'category3',
            'author_id' => 7
        ]);
        // $data = [
        //     [
        //         'title' => 'title1',
        //         'category' => 'category1',
        //         'author_id' => 3
        //     ],
        //     [
        //         'title' => 'title2',
        //         'category' => 'category2',
        //         'author_id' => 2
        //     ],
        //     [
        //         'title' => 'title3',
        //         'category' => 'category3',
        //         'author_id' => 1
        //     ]
        // ];

        // Post::insert($data);
    }
    public function show_posts()
    {
        // $posts = Author::find(7)->posts; //author se related jo bhe posts hai wo find kar rahi hai
        // $author = Post::find(11)->author; //post jis author ne ki hai wo find kar rahi hai


        $author = Author::find(4);
        var_dump($author->username);
        var_dump($author->password);
        $posts = $author->posts;
        foreach($posts as $post)
        {
           var_dump($post->title);
        }
        // return $posts;
    }

}
