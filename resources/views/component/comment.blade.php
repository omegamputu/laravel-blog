<!-- comment -->
<div class="media" id="comment-{{ $comment->id }}">
    <div class="media-left">
        <img class="media-object" src="{{ asset('img/avatar.png') }}" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h4>{{ htmlspecialchars($comment->user->name) }}</h4>
            <span class="time">{{ date('d/m/Y h:i:s', strtotime($comment->created_at)) }}</span>
            <a href="#" class="reply" data-id="{{ $comment->id }}">Reply</a>
        </div>
        <p>{{ htmlspecialchars(nl2br($comment->comment)) }}</p>

    </div>
</div>
<!-- /comment -->