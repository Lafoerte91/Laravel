<?php
namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor </strong> sit amet consectetur adipisicing elit. Eius, cupiditate.'
        ];
        $posts = array_fill(0, 10, $post);

        return  view('blog.index',  compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor </strong> sit amet consectetur adipisicing elit. Eius, cupiditate.'
        ];

        return  view('blog.show', ['post' => $post]);
    }

    public function like($post)
    {
        return "Поставить лайк";
    }
}


