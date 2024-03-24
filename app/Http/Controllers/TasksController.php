<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use function PHPUnit\Framework\assertNotFalse;

class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'completed' => 'required|boolean',
        ]);

        $task = Task::create([
            'title' => $validatedData['title'],
            'completed' => $validatedData['completed']
        ]);

        return $task;
    }


    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'completed' => 'required|boolean',
        ]);
        $task->update($validatedData);
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }

}
