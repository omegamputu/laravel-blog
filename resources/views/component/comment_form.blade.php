{{ Form::open(['route' => ['comment.save', $post->id], 'method' => 'POST', 'data-parsley-validate' => '', 'id' => 'form-comment']) }}
<div class="row mt-3">
    <div class="col-md-12">
        <h2 class="mb-1">Poster un commentaire</h2>
        <div class="row">
            <div class="col-xl-12">
                <div class="form-group">
                    {{ Form::textarea('comment', null, ['class' => 'text_field', 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Add comment', ['class' => 'btn btn-primary', 'required']) }}
                </div>
                {{ Form::hidden('parent_id', 0, ['id' => 'parent_id']) }}
                {{ Form::hidden('action', 'comment') }}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}