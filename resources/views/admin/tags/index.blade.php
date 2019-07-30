@extends('layouts.admin')

@section('title', 'Tags')

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Tags</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th>{{ $tag->id }}</th>
                                <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-md-3">
                    {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                    <h2>New Tag</h2>
                    {{ Form::text('name', null, ['class' => 'form-control']) }}

                    {{ Form::submit('create new tag', ['class' => 'btn btn-block btn-primary mt-1']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection