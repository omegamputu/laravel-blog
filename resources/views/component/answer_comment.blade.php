<!-- comment -->
<div class="media">
    <div class="media-left">
        <img class="media-object" src="{{ asset('img/avatar.png') }}" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h4>{{ $answer->user->name }}</h4>
            <span class="time">{{ date('d/m/Y h:i:s', strtotime($answer->created_at)) }}</span>
            <a href="#" class="reply">Reply</a>
        </div>
        <p>{{ $answer->comment }}</p>

    </div>
</div>
<!-- /comment -->