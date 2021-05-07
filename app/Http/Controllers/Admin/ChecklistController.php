<?php

namespace App\Http\Controllers\Admin;

use App\Checklist;
use App\ChecklistGroup;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChecklistRequest;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{

    public function create(ChecklistGroup $checklistGroup)
    {
        return view('admin.checklists.create', compact('checklistGroup'));
    }

    public function store(StoreChecklistRequest $request, ChecklistGroup $checklistGroup)
    {
        //create checklist through the relation ship hasMany
        $checklistGroup->checklists()->create($request->validated());
        return redirect()->route('home');
    }

    public function edit(ChecklistGroup $checklistGroup, Checklist $checklist)
    {
        return view('admin.checklists.edit', compact('checklistGroup', 'checklist'));
    }

    public function update(StoreChecklistRequest $request, ChecklistGroup $checklistGroup, Checklist $checklist)
    {
        $checklist->update($request->validated());
        return redirect()->route('home');
    }

    public function destroy(ChecklistGroup $checklistGroup, Checklist $checklist)
    {
        $checklist->delete();

        return redirect()->route('home');
    }
}
