<?php

namespace App\Interfaces;

interface StorageInterface
{
    public function upload(string $path, string $file);

    public function delete(string $path);
}
