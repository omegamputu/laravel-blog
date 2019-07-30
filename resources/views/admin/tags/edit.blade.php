@extends('layouts.admin')

@section('content')
    <div class="container">
        {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
        <div class="row">
            {{ Form::label('tag', 'Tag') }}
            {{ Form::text('tag', null, ['class' => 'form-control']) }}

            {{ Form::submit('Save changes', ['class' => 'btn btn-block btn-success']) }}

            {!! Form::close() !!}

        </div>
    </div>
@endsection