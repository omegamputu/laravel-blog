@extends('layouts.admin')

@section('title', $post->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if($post->image == false)
                    <h1>{{ $post->title }}</h1>

                    <p class="lead">{{ $post->body }}</p>

                    <div class="tags">
                        @foreach($post->tags as $tag)
                            <span class="btn btn-primary">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    @else
                    <img src="{{ asset('uploads/posts/' . $post->image) }}" class="card-img" alt="Image for this post">
                    <h1>{{ $post->title }}</h1>

                    <p class="lead">{{ $post->body }}</p>

                    <div class="tags">
                        @foreach($post->tags as $tag)
                            <span class="btn btn-primary">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                <dl class="d-flex">
                    <label>Url</label>
                    <p class="ml-1"><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a> </p>
                </dl>
                <dl class="d-flex">
                    <label>Category: </label>
                    <p class="ml-1">{{ $post->category->name }}</p>
                </dl>
                <dl class="d-flex">
                    <dt>Create at:</dt>
                    <dd class="ml-1"> {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="d-flex">
                    <dt>Last updated:</dt>
                    <dd class="ml-1">{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-block btn-primary']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-block btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        {!! Html::linkRoute('posts.index', '<< See all posts', [], ['class' => 'btn btn-block btn-primary']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection