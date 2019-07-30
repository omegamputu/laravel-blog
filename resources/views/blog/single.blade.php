@extends('layouts.app')

@section('title', $post->subtitle)

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('img/post-bg.jpg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->subtitle }}</h2>
                        <span class="meta">Posted by
                <a href="#">{{ $post->user->name }}</a> in <a href="#">{{ $post->category->name }}</a>
                            on {{ date('M j, Y', strtotime($post->created_at)) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article role="article">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 mx-auto">
                    <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>

                    <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>

                    <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>

                    <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>

                    <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>

                    <h2 class="section-heading">The Final Frontier</h2>

                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                    <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                    <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>

                    <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>

                    <h2 class="section-heading">Reaching for the Stars</h2>

                    <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

                    <a href="#">
                        <img class="img-fluid" src="{{ asset('img/post-sample-image.jpg') }}" alt="">
                    </a>
                    <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

                    <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>

                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

                    <p>Placeholder text by
                        <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
                        <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.
                    </p>

                    <h2 class="section-heading">Partager sur</h2>

                    <div class="post-shares sticky-shares">
                        <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                    <section class="mt-5">
                        <div role="sectionhead">
                            <h2 class="section-heading mb-3">
                                <?php $NbrComments = count($post->comments); echo $NbrComments != '0' ? $NbrComments . ' Commentaires' : 'Commentaire' ?>
                            </h2>
                        </div>

                        <div class="post-comments">
                            @forelse($comments as $comment)
                                @include('component.comment')
                                @foreach($answers as $answer)
                                    @if($answer->parent_id == $comment->id)
                                        <div style="margin-left: 50px;">
                                            @include('component.answer_comment')
                                        </div>
                                        @endif
                                    @endforeach
                                @empty
                                Aucun commentaire n'a été publié. Soyez le premier!
                                @endforelse
                        </div>
                        @guest
                            <h2 class="mt-4 mb-3">
                                <button class="btn btn-primary">Connectez-vous</button> pour commenter.
                            </h2>
                            @else
                            @include('component.comment_form')
                        @endguest
                    </section>

                </div>
            </div>
        </div>
    </article>

    <hr>

@endsection
