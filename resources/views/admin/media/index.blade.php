@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Created</th>
            {{--<th>Email</th>--}}
          </tr>
        </thead>
        <tbody>

        @foreach($photos as $photo)
          <tr>
            <td>{{ $photo->id }}</td>
            <td><img src="{{ asset('/uploads/users/'.$photo->file )}}" alt="" height="50"></td>
            <td>{{ $photo->created_at? $photo->created_at->diffForHumans(): 'no date'}}</td>
              <td>
                  {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}

                      <div class="form-group">
                          {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
                      </div>

                  {!! Form::close() !!}


              </td>

          </tr>
        @endforeach


       </tbody>
     </table>


@stop
