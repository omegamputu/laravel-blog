@extends('layouts.admin')

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-block btn-primary">Edit</a>
                </div>
                <div class="col-md-2">
                    {{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
                    {{ Form::close() }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Tags</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($tag->posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td><button class="btn btn-dark">{{ $tag->name }}</button></td>
                                <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection