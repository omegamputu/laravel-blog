@extends('layouts.admin')

@section('title', 'My contacts')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All contacts</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Created_at</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ substr($contact->contenu, 0, 50) }} {{ strlen($contact->contenu) > 50 ? '...' : '' }}</td>
                            <td>{{ date('M j, Y', strtotime($contact->created_at)) }}</td>
                            <td><a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-primary btn-sm">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection