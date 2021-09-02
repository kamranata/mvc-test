<?php

namespace App\Controllers;

use App\Models\Task;

class TaskController
{
    public function index()
    {
        $page      = $_GET['page'] ?? 1;
        $sortBy    = $_GET['sortBy'] ?? 'id';
        $direction = $_GET['direction'] ?? 'asc';

        $tasks = Task::orderBy($sortBy, $direction)
            ->paginate(3, $columns = ['*'], $pageName = 'page', $page);

        require_once APP_ROOT . '/views/index.php';
    }
}
