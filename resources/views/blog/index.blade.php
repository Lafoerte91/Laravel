@extends('layouts.base')

@section('page.title', 'Наш блог')

@section('content')
    <section>
        <x-container>
            <x-title>
                {{__('Список постов')}}
            </x-title>
            @if(@empty($posts))
                Нет ни одного поста
                @else
                    @foreach ($posts as $post)
                        <div class="mb-4">
                            <h5><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}{{$loop->iteration}}</a></h5>
                            <p>{{!! $post->content !!}}</p>
                        </div>
                    @endforeach
            @endif
        </x-container>
    </section>
@endsection
