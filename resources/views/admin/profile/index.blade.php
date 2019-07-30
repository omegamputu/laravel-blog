@extends('layouts.admin')

@section('title', 'Profile')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">{{ $user->name }}'s profile</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('uploads/avatar/'. $user->avatar ) }}" class="profile-avatar">
                </div>
                <div class="col-md-8">
                    {!! Form::model($user, ['route' => ['profile.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::text('email', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                               <div class="custom-file">
                                   {{ Form::label('featured_image', 'Update featured image', ['class' => 'custom-file-label']) }}
                                   {{ Form::file('featured_image', ['class' => 'custom-file-input']) }}
                               </div>
                           </div>
                        </div>
                    </div>

                    {{ Form::submit('Save', ['class' => 'btn btn-primary pull-right btn-sm']) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    @endsection