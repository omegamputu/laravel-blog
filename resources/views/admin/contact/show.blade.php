@extends('layouts.admin')

@section('title')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="section-heading">Send by : {{ $contact->email }} <br>
                    At : <button class="btn btn-sm btn-primary">{{ date('M j, Y h:ia', strtotime($contact->created_at)) }}</button>
                </h2>

                <p class="lead">{{ $contact->contenu }}</p>

                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Response</a>
                    {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection