<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Concerns;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string title
 * @property string description
 * @property string status
 */
class Task extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'title',
		'description',
		'status',
	];
}
