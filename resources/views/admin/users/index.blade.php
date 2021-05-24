@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Users List') }}</div>
          <div class="card-body">
            <table class="table table-responsive-sm mt-4 table-bordered table-striped">
              <thead>

                <tr>
                  <th class="text-center">#</th>
                  <th>Created At</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Website</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->website }}</td>
                </tr>
                @endforeach

              </tbody>
            </table>

            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection