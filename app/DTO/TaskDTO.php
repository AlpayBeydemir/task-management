<?php

namespace App\DTO;

class TaskDTO
{
    public string $title;
    public string $description;
    public string $priority;
    public string $status;
    public string $due_date;
    public int $user_id;

    public function __construct(string $title, ?string $description, string $priority, string $status, ?string $due_date, int $user_id)
    {
        $this->title = $title;
        $this->description = $description;
        $this->priority = $priority;
        $this->status = $status;
        $this->due_date = $due_date;
        $this->user_id = $user_id;
    }
}
