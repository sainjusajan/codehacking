@extends('layouts.admin')


@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

           <div class="form-group">
                {!! Form::label('name', 'name') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::submit('create Category', ['class'=>'btn btn-info']) !!}
            </div>

        {!! Form::close() !!}


    </div>
    <div class="col-sm-6">

        @if($categories)
        <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Created Date</th>
              </tr>
            </thead>
            <tbody>
            <?php $x = 0;
            ?>

            @foreach($categories as $category)
              <tr>
                <td>{{ ++$x }}</td>
                <td><a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name }}</a></td>
                <td>{{ $category->created_at? $category->created_at->diffForHumans(): 'No Date' }}</td>

              </tr>

            @endforeach

           </tbody>
         </table>
        @endif
    </div>

@stop
