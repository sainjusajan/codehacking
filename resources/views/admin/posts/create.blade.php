@extends('layouts.admin')


@section('content')

    <h1>Create Posts</h1>

<div class="row">
    <div class="col-md-12">
        

   
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=> true]) !!}

        {{ csrf_field() }}

       <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose category'] + $categories, null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::text('body', null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('create post', ['class'=>'btn btn-info']) !!}
        </div>



    {!! Form::close() !!}
     </div>
</div>

<div class="row">
    <div class="col-md-12">
        
        @include('includes.form_error')

    </div>
</div>




@stop