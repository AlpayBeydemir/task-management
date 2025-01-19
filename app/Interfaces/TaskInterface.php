<?php

namespace App\Interfaces;

use App\DTO\TaskDTO;

interface TaskInterface
{
    public function getAllTasks();
    public function getTaskById(int $id);
    public function createTask(TaskDTO $data);
    public function updateTask(int $id, TaskDTO $data): bool;
    public function deleteTask(int $id): bool;
}
