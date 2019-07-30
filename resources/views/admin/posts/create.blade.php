@extends('layouts.admin')

@section('title', 'Create new post')

@section('scripts')
    @parent
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
            plugins: 'code image',
            image_caption: true

        });

    </script>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Create new post</div>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'posts.store', 'files' => true, 'data-parsley-validate' => '']) !!}

                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', null, ['class' => 'form-control', 'required']) }}

                        {{ Form::label('subtitle', 'Subtitle') }}
                        {{ Form::text('subtitle', null, ['class' => 'form-control', 'required']) }}

                        {{ Form::label('slug', 'Slug') }}
                        {{ Form::text('slug', null, ['class' => 'form-control', 'required']) }}

                        {{ Form::label('category_id', 'Category') }}
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        {{ Form::label('tags', 'Tags') }}
                        <select class="form-control" name="tags" multiple="multiple">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>

                        <div class="custom-file">
                            {{ Form::label('featured_image', 'Update featured image', ['class' => 'custom-file-label']) }}
                            {{ Form::file('featured_image', ['class' => 'custom-file-input']) }}
                        </div>

                        {{ Form::label('body', 'Post body') }}
                        {{ Form::textarea('body', null, ['class' => 'form-control', 'required']) }}

                        {{ Form::submit('Post', ['class' => 'btn btn-primary', 'style' => 'margin-top:20px;']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>

    @endsection



