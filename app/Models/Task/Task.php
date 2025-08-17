<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Concerns;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property string description
 * @property string status
 */
class Task extends Model
{
	protected $fillable = [
		'title',
		'description',
		'status',
	];
}
