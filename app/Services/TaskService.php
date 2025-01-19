<?php

namespace App\Services;

use App\Interfaces\TaskInterface;
use App\DTO\TaskDTO;
class TaskService
{
    private TaskInterface $taskRepository;

    public function __construct(TaskInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAllTask()
    {
        return $this->taskRepository->getAllTasks();
    }

    public function getTaskById(int $id)
    {
        return $this->taskRepository->getTaskById($id);
    }

    public function createTask(TaskDTO $taskDTO)
    {
        return $this->taskRepository->createTask($taskDTO);
    }

    public function updateTask(int $id, TaskDTO $taskDTO): bool
    {
        return $this->taskRepository->updateTask($id, $taskDTO);
    }

    public function deleteTask(int $id): bool
    {
        return $this->taskRepository->deleteTask($id);
    }
}
