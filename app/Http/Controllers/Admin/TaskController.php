<?php

namespace App\Http\Controllers\Admin;

use App\Checklist;
use App\ChecklistGroup;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(StoreTaskRequest $request, Checklist $checklist)
    {
        $checklist->tasks()->create($request->validated());
        return redirect()->route('admin.checklist_groups.checklists.edit',  [$checklist->checklist_group_id, $checklist]);
    }

    public function edit(Checklist $checklist, Task $task)
    {
        return view('admin.tasks.edit', compact('checklist', 'task'));
    }

    public function update(StoreTaskRequest $request, Checklist $checklist, Task $task)
    {
        $task->update($request->validated());
        return redirect()->route('admin.checklist_groups.checklists.edit',  [$checklist->checklist_group_id, $checklist]);
    }

    public function destroy(Checklist $checklist, Task $task)
    {
        $task->delete();
        return redirect()->route('admin.checklist_groups.checklists.edit',  [$checklist->checklist_group_id, $checklist]);
    }
}
