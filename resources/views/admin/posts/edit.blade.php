@extends('layouts.admin')

@section('title', 'Edit post')

@section('scripts')
    @parent
    <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
            plugins: 'code'
        });

        $('.select-multiple').select2();

    </script>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <h1>Edit post</h1>
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit post</div>
                        </div>
                        <div class="card-body">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', null, ['class' => 'form-control']) }}

                            {{ Form::label('subtitle', 'Subtitle') }}
                            {{ Form::text('subtitle', null, ['class' => 'form-control']) }}

                            {{ Form::label('slug', 'Slug') }}
                            {{ Form::text('slug', null, ['class' => 'form-control']) }}

                            {{ Form::label('category_id', 'Category') }}
                            {{ Form::select('category_id', $cats, null, ['class' => 'form-control']) }}

                            {{ Form::label('tags', 'Tags') }}
                            {{ Form::select('tags[]', $tags2, null, ['class' => 'form-control select-multiple', 'multiple' => 'multiple']) }}

                            <div class="custom-file">
                                {{ Form::label('featured_image', 'Update featured image', ['class' => 'custom-file-label']) }}
                                {{ Form::file('featured_image', ['class' => 'custom-file-input']) }}
                            </div>

                            {{ Form::label('body', 'Post body') }}
                            {{ Form::textarea('body', null, ['class' => 'form-control']) }}

                            <label for="online">
                                {{ Form::checkbox('online', 1, $post->online) }}
                                En ligne ?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="well">
                                <dl class="d-flex">
                                    <dt>Created at:</dt>
                                    <dd class="ml-1"> {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                                </dl>
                                <dl class="d-flex">
                                    <dt>Last updated:</dt>
                                    <dd class="ml-1">{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-sm btn-danger']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::submit('Save changes', ['class' => 'btn btn-sm btn-success']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection


@section('scripts')
    @parent
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $('.select2-selection--multiple').select2();
    </script>

@endsection


