<?php

namespace App\DTO;

class TaskFilesDTO
{
    public int $task_id;
    public string $file_path;
    public string $file_type;
    public string $original_name;

    public function __construct(int $task_id, string $file_path, string $file_type, string $original_name)
    {
        $this->task_id = $task_id;
        $this->file_path = $file_path;
        $this->file_type = $file_type;
        $this->original_name = $original_name;
    }
}
