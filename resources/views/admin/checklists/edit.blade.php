@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form
                        action="{{ route('admin.checklist_groups.checklists.update',[$checklistGroup,$checklist]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Checklist') }}
                            {{ $checklist->name }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
                                        <input class="form-control" id="name" name="name"
                                            type="text" value="{{ $checklist->name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">
                                {{ __('Update Checklist') }}</button>
                        </div>
                    </form>
                </div>
                <form
                    action="{{ route('admin.checklist_groups.checklists.destroy',[$checklistGroup,$checklist]) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"
                        type="submit">
                        {{ __('Delete This Checklist') }}</button>
                </form>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">{{ __('Task List') }}</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <tbody>
                                @foreach ($checklist->tasks as $task)

                                <tr>
                                    <td>{{ $task->name }}</td>

                                    <td>
                                        <a
                                            href="{{ route('admin.checklists.tasks.edit',[$checklist,$task]) }}">
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                        </a>
                                        <form style="display:inline-block"
                                            action="{{ route('admin.checklists.tasks.destroy',[$checklist,$task]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')"
                                                type="submit">
                                                {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->storetask->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->storetask->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('admin.checklists.tasks.store',$checklist) }}"
                        method="POST">
                        @csrf
                        <div class="card-header">{{ __('New Task') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Task Name') }}</label>
                                        <input class="form-control" id="name" name="name"
                                            type="text" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="description">{{ __('Task Description') }}</label>
                                        <textarea class="form-control" id="description"
                                            name="description"
                                            rows="5">{{ old('value') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">
                                {{ __('Save Task') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
