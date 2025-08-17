<?php

namespace App\Service\Task;

use App\Models\Task\Task;
use Illuminate\Database\Eloquent\Collection;

final class TaskService
{
	public function indexTask(): Collection
	{
		return Task::all();
	}

	public function createTask(array $data): Task
	{
		return Task::create($data);
	}

	public function showTask(Task $task): Task
	{
		return $task;
	}

	public function updateTask(array $data, Task $task): Task
	{
		$task->update($data);
		return $task->refresh();
	}

	public function destroyTask(Task $task): Task
	{
		$task->delete();
		return $task;
	}
}
