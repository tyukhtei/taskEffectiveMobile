<?php

namespace App\Service\Task;

use App\Repositories\TaskRepositoryEloquent;
use App\Models\Task\Task;
use Illuminate\Database\Eloquent\Collection;

final class TaskService
{
	public function __construct(private TaskRepositoryEloquent $repository)
	{
	}

	public function indexTask(): Collection
	{
		return $this->repository->all();
	}

	public function createTask(array $data): Task
	{
		return $this->repository->create($data);
	}

	public function showTask(Task $task): Task
	{
		return $task;
	}

	public function updateTask(array $data, Task $task): Task
	{
		return $this->repository->update($data, $task->id);
	}

	public function destroyTask(Task $task): Task
	{
		$this->repository->delete($task->id);
		return $task;
	}
}
