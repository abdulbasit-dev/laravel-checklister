<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePageRequest;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->validated());
        return redirect()->route('admin.pages.edit', $page)->with(['alert-type' => 'info', 'message' => 'Page Successfully Updated']);
    }
}
