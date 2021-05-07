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
                                            type="text" value="{{ $checklist->name }}"
                                            placeholder="{{ __('Checklist  name') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn btn-primary" type="submit">
                                {{ __('Update') }}</button>
                        </div>
                    </form>
                </div>
                <form
                    action="{{ route('admin.checklist_groups.checklists.destroy',[$checklistGroup,$checklist]) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn btn-danger" onclick="return confirm('Are you sure?')"
                        type="submit">
                        {{ __('Delete This Checklist') }}</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection