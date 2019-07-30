<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Recent posts</h6>
    @forelse($posts as $post)
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </strong>
                {{ substr($post->body, 0, 200) }} {{ strlen($post->body) > 200 ? '...' : '' }}
            </p>
        </div>
            @empty
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            No post yet
        </p>
        @endforelse
    <small class="d-block text-right mt-3">
        <a href="#">All posts</a>
    </small>
</div>

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Comments</h6>
    @forelse($comments as $comment)
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">{{ $comment->name }}</strong>
                    <a href="{{ route('comments.show', $comment->id) }}">View</a>
                </div>
                <span class="d-block">{{ $comment->comment }}</span>
            </div>
        </div>
    @empty
        <div class="d-flex justify-content-between align-items-center w-100">
            <strong class="text-gray-dark">No comment yet</strong>
        </div>
        @endforelse
    <small class="d-block text-right mt-3">
        <a href="#">All comments</a>
    </small>
</div>

<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">My contacts</h6>
    @forelse($contacts as $contact)
        <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">{{ $contact->email }}</strong>
                    <a href="{{ route('contacts.show', $contact->id) }}">View</a>
                </div>
                <span class="d-block">{{ $contact->contenu }}</span>
            </div>
        </div>
        @empty
        <div class="d-flex justify-content-between align-items-center w-100">
            <strong class="text-gray-dark">No comment yet</strong>
        </div>
    @endforelse
    <small class="d-block text-right mt-3">
        <a href="#">All contacts</a>
    </small>
</div>