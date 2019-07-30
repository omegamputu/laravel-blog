{!! Form::open(['route' => 'mycontact.store', 'data-parsley-validate' => '']) !!}
<fieldset class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'input_field', 'required']) }}
</fieldset>
<fieldset class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', null, ['class' => 'input_field', 'required']) }}
    <small class="text-muted">We'll never share your email with anyone else.
    </small>
</fieldset>
<fieldset class="form-group">
    {{ Form::label('contenu', 'Message') }}
    {{ Form::textarea('contenu', null, ['class' => 'text_field', 'required', 'rows' => '3']) }}
</fieldset>
{{ Form::submit('Send message', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}