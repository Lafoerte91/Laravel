<nav class="navbar navbar-expand-md bg-body-tertiary">
<div class="container">
    <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
            <a class="nav-link {{active_link('home')}}" aria-current="page" href="{{route('home')}}">{{__('Главная')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{active_link('blog.index')}}" aria-current="page" href="{{route('blog.index')}}">{{__('Блог')}}</a>
        </li>
    </ul>
    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item">
            <a class="nav-link {{active_link('register.index')}}" aria-current="page" href="{{route('register.index')}}">{{__('Регистрация')}}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{active_link('login.index')}}" aria-current="page" href="{{route('login.index')}}">{{__('Вход')}}</a>
        </li>
    </ul>
    </div>
</div>
</nav>
