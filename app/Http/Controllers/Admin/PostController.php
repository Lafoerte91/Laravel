<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return 'Страница списка постов';
    }

    public function create()
    {
        return 'Страница создания поста';
    }

    public function store()
    {
        return 'Запрос создания поста';
    }

    public function show($post)
    {
        return "Страница просмотра поста {$post}";
    }

    public function edit($post)
    {
        return  "Страница изменения поста {$post}";
    }

    public function update()
    {
        return 'Запрос изменения поста';
    }

    public function delete()
    {
        return 'Запрос удвления поста';
    }

    public function like()
    {
        return 'Лайк +1';
    }
}
