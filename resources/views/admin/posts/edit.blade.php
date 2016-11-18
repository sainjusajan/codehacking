@extends('layouts.admin')


@section('content')

    <h1>Edit Posts</h1>

    <div class="row">
        <div class="col-md-12">



            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=> true]) !!}

            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

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
                {!! Form::submit('Update post', ['class'=>'btn btn-info col-sm-6']) !!}
            </div>



            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id], 'files'=> true]) !!}


                <div class="form-group">
                    {!! Form::submit('Delete post', ['class'=>'btn btn-danger col-sm-6']) !!}
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