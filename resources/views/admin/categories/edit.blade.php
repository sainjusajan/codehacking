@extends('layouts.admin')


@section('content')

    <h1>Edit Categories</h1>

    <div class="col-sm-6">

        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Update Category', ['class'=>'btn btn-info col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy',$category->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete category', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

        {!! Form::close() !!}



    </div>
    <div class="col-sm-6">

        @if($categories)
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td><a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name }}</a></td>
                        <td>{{ $category->created_at? $category->created_at->diffForHumans(): 'No Date' }}</td>

                    </tr>

                @endforeach

                </tbody>
            </table>
        @endif
    </div>

@stop
