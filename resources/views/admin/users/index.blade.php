@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{ session('deleted_user') }}</p>

        @endif

    <h1>Users</h1>
   <table class="table table-bordered table-responsive">
       <thead>
         <tr>
           <th>ID</th>
           <th>Photo</th>
           <th>Name</th>
           <th>Email</th>
           <th>Role</th>
           <th>Active</th>
           <th>Created</th>
           <th>Updated</th>
         </tr>
       </thead>
       <tbody>

       @if($users)

           @foreach($users as $user)
                 <tr>
                   <td>{{ $user->id }}</td>
                   <td>
                     @if($user->photo)
                           <img src="{{ asset($user->photo->file)}}" alt="" height="50">

                     @else
                       no user photo
                       @endif

                   </td>
                   <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
                   <td>{{ $user->email }}</td>
                   <td>{{ $user->role->name }}</td>
                   <td>{{ $user->is_active ==1? 'Active': 'Not Active' }}</td>
                   <td>{{ $user->created_at->diffForHumans() }}</td>
                   <td>{{ $user->updated_at->diffForHumans() }}</td>
                 </tr>
           @endforeach
       @endif

      </tbody>
    </table>
@endsection