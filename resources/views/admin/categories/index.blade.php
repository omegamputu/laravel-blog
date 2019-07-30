@extends('layouts.admin')

@section('title', 'Categories')

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Categories</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th>{{ $category->id }}</th>
                                <td><a href="{{ route('categories.show', $category->id) }}" class="nav-link">{{ $category->name }}</a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-md-3">
                    {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    <h2>New category</h2>
                    <div class="form-group">
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) }}
                    </div>


                    {{ Form::submit('create new category', ['class' => 'btn btn-block btn-sm btn-primary mt-1']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection