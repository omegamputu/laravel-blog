@extends('layouts.admin')

@section('title', $category->name)

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h1>{{ $category->name }} Category <small>{{ $category->posts()->count() }} Posts</small></h1>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>categories</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($category->posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td><button class="btn btn-dark">{{ $category->name }}</button></td>
                                <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-block btn-primary">Edit</a>
                    {{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection