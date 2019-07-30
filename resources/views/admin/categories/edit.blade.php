@extends('layouts.admin')

@section('title', 'Edit category')

@section('content')
    <div class="section">
        <div class="container">
            {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('category', 'Category') }}
                    {{ Form::text('category', null, ['class' => 'form-control']) }}

                    {{ Form::submit('Save changes', ['class' => 'btn btn-block btn-success']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection