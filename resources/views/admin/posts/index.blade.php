@extends('layouts.admin')

@section('title', 'Posts')

@section('content')

   <div class="card">
       <div class="card-header">
           <div class="card-title">Posts</div>
       </div>
       <div class="card-body">
           <div class="row">
               <div class="col-md-12">
                   {!! Form::open(['route' => 'search', 'method' => 'POST']) !!}
                       @csrf
                       <div class="form-group">
                           {{ Form::search('q', null, ['class' => 'form-control', 'placeholder' => 'Search posts']) }}
                       </div>
                   {!! Form::close() !!}
               </div>
           </div>
           <table class="table table-responsive">
               <thead>
               <th>#</th>
               <th>Title</th>
               <th>Body</th>
               <th>Published</th>
               <th>Created</th>
               <th></th>
               </thead>
               <tbody>
               @foreach($posts as $post)
                   <tr>
                       <td>{{ $post->id }}</td>
                       <td>{{ substr($post->title, 0, 30) }} {{ strlen($post->title) > 30 ? '...' : '' }}</td>
                       <td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? '...' : '' }}</td>
                       <td>{{ $post->online }}</td>
                       <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                       <td>
                           <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View</a>
                           <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
   </div>

    @endsection

