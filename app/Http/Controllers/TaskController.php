<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // отображение списка задач
    public function index(Request $request) {
        $searchItem = $request->input('search');
        if($searchItem) {
            $tasks = Task::where('name', 'like', '%' . $searchItem . '%')->get();
        } else {
            $tasks = Task::all();
        }
        return view(('tasks.index'), compact('tasks'));
    }
    // создание новой задачи
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
        Task::create($validatedData);
        return redirect('/tasks');
    }
    // пометка задачи как выполненной
    public function complete(Task $task) {
        $task->update(['completed' => true]);
        return redirect('/tasks');
    }
    // удаление задачи
    public function destroy(Task $task) {
        $task->delete();
        return redirect('/tasks');
    }
}
