<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChecklistGroup extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function checklists()
    {
        return $this->hasMany(CheckList::class, 'checklist_group_id', 'id');
    }
}
