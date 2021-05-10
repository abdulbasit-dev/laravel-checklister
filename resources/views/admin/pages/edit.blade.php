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

                    <form action="{{ route('admin.pages.update',$page) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Page') }}
                            {{ $page->title }}</div>
                        <div class="card-body">
                            {{-- alert  --}}
                            @if (Session::has('message'))
                            <div class="alert alert-{{ Session::get('alert-type') }} dismissible fade show"
                                role="alert">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="title">{{ __('Page Title') }}</label>
                                        <input class="form-control" id="title" name="title"
                                            type="text" value="{{ $page->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">{{ __('Page Content') }}</label>
                                        <textarea class="form-control" id="content" name="content"
                                            rows="5">{{ $page->title }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">
                                {{ __('Update Page') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>






    </div>
</div>
@endsection

@push('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
@endpush
