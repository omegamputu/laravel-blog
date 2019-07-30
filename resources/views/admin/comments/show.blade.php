@extends('layouts.admin')

@section('title')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section-heading">Posted by : {{ $comment->email }} <br>
                    On : <a href="{{ route('blog.single', $comment->post->slug) }}" class="btn-link">{{ $comment->post->title }}</a>
                </h2>

                <p class="lead">{{ $comment->comment }}</p>

                <div class="btn-group">
                    Published at : <button class="btn btn-sm btn-primary">{{ date('M j, Y h:ia', strtotime($comment->created_at)) }}</button>

                    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection