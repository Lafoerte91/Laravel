<h1>Список задач</h1>
<li>
    @foreach($tasks as $task)
        <li class="highlight">{{ $task->name }}</li>
        @if(!$task->completed)
            <a href="/tasks/{{$task->id}}/complete">Выполнить</a>
        @endif
            <form action="/tasks/{{$task->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Удалить</button>
            </form>
        </li>
    @endforeach
</ul>

<form action="/tasks" method="get">
    @csrf
    <input type="text" name="search" placeholder="Поиск по имени задачи">
    <button type="submit">Поиск</button>
</form>

<form action="/tasks" method="post">
    @csrf
    <input type="text" name="name" placeholder="Новая задача">
    <button type="submit">Добавить</button>
</form>

