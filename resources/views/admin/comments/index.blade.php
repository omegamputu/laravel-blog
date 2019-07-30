@extends('layouts.admin')

@section('title', 'Comments')

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Comments</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Comment</th>
                            <th>Post</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <th>{{ $comment->id }}</th>
                                <th>{{ $comment->name }}</th>
                                <th>{{ substr($comment->comment, 0, 50) }} {{ strlen($comment->comment) > '50' ? '...' : ''}}</th>
                                <th>{{ $comment->post_id }}</th>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-sm btn-primary rounded">View</a>
                                        {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection