<?php

namespace App\Repositories;

use App\DTO\TaskDTO;
use App\Interfaces\TaskInterface;
use App\Models\Task;
class TaskRepository implements TaskInterface
{
    public function getAllTasks()
    {
        return Task::all();
    }

    public function getTaskById(int $id)
    {
        return Task::find($id);
    }

    public function createTask(TaskDTO $data)
    {
        return Task::create($data);
    }

    public function updateTask(int $id, TaskDTO $data): bool
    {
        $task = Task::find($id);
        return $task ? $task->update($data) : false;
    }

    public function deleteTask(int $id): bool
    {
        $task = Task::find($id);
        return $task ? $task->delete() : false;
    }
}
