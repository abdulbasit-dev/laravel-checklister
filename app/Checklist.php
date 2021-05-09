<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checklist extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'checklist_group_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'checklist_id', 'id');
    }
}
