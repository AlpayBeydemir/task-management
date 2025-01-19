<?php

namespace App\Http\Controllers;

use App\DTO\TaskDTO;
use App\Http\Requests\TaskRequest;
use App\Services\TaskService;
use Illuminate\View\View;

class TaskController extends Controller
{
    private TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $tasks = $this->taskService->getAllTask();
        return view('tasks.index', compact('tasks'));
    }

    public function show(int $id)
    {
        $task = $this->taskService->getTaskById($id);
        return view('tasks.show', compact('task'));
    }

    public function create(): View
    {
        return view('tasks.create');
    }

    public function store(TaskRequest $request)
    {
        $taskDto = new TaskDTO(
            $request->title,
            $request->description ?? NULL,
            $request->priority,
            $request->status,
            $request->due_date ?? NULL,
            1
        );
        $this->taskService->createTask($taskDto);

        return to_route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function update(TaskRequest $request, int $id)
    {
        $taskDto = new TaskDTO(
            $request->title,
            $request->description ?? NULL,
            $request->priority,
            $request->status,
            $request->due_date ?? NULL,
            1
        );
        $this->taskService->updateTask($id, $taskDto);

        return to_route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(int $id)
    {
        $this->taskService->deleteTask($id);
        return to_route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}

