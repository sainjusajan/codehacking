@extends('layouts.admin')


@section('content')

<h1>Posts</h1>

    <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Owner</th>
            <th>Category ID</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td><a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->user->name }}</a></td>
                <td>{{ $post->category? $post->category->name :'uncategorized' }}</td>
                <td><img src="{{ $post->photo? asset('uploads/posts/'.$post->photo->file): 'http://placehold.it/100x100' }}" alt="" height="70"></td>
                <td>{{ $post->title }}</td>
                <td>{{ str_limit($post->body, 30) }}</td>
                <td>{{ $post->created_at->diffForHumans() }}</td>
                <td>{{ $post->updated_at->diffForHumans() }}</td>
              </tr>
            @endforeach
        @endif

       </tbody>
     </table>

@stop