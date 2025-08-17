<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Http\Resources\Task\TaskResource;
use App\Models\Task\Task;
use App\Service\Task\TaskService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TaskController extends Controller
{
	public function __construct(private TaskService $service)
	{
	}

	/**
	 * Display a listing of the resource.
	 */
	public function index(): ResourceCollection
	{
		return TaskResource::collection($this->service->indexTask());
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreTaskRequest $request): TaskResource
	{
		return new TaskResource($this->service->createTask($request->validated()));
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Task $task): TaskResource
	{
		return new TaskResource($this->service->showTask($task));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateTaskRequest $request, Task $task): TaskResource
	{
		return new TaskResource($this->service->updateTask($request->validated(), $task));
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Task $task): TaskResource
	{
		return new TaskResource($this->service->destroyTask($task));
	}
}
