@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">• {{$date->translatedFormat('F') }} {{$date->day}} • {{$date->year}} • {{$date->format('H:i')}} • Рекомендуемые • {{$post->comments->count()}} Комментария</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto " data-aos="fade-up">
                        <p>{!! $post->content !!}</p>
                      </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="py-3">
                        <form action="{{route('post.like.store', $post->id)}}" method="POST">
                            @csrf
                            <button type="submit" class=" border-0 bg-transparent">
                                @auth()
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart"> </i>
                                    @else
                                        <i class="far fa-heart"> </i>
                                    @endif
                                @endauth
                            </button>
                        </form>
                    </section>
                    @if($relatedPosts->count() > 0)
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                        <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <a href="{{route('post.show', $relatedPost->id)}}" class="blog-post-permalink">
                                    <img src="{{asset('storage/' . $relatedPost->main_image)}}" alt="blog post" class="post-thumbnail">
                                </a>
                                <p class="post-category">{{$relatedPost->category->title}}</p>
                                <a style="text-decoration: none" href="{{route('post.show', $relatedPost->id)}}"><h5 class="post-title" >{{$relatedPost->title}}</h5></a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    @endif

                    <section class="comment-section mb-5">
                        <h2 class="section-title mb-5" data-aos="fade-out">Комментарии ({{$post->comments->count()}})</h2>
                        @foreach($post->comments as $comment)
                        <div class="direct-chat-msg mb-3">
                            <div class="clearfix">
                                <span class="username float-start">
                                    <div>
                                        {{ $comment->user->name }}
                                    </div>
                                </span>
                                <span class="text-muted float-end">
                                    {{ $comment->dateAsCarbon->diffForHumans() }}
                                </span>
                            </div> <!-- /.direct-chat-infos -->
                            <div class="direct-chat-text">
                                {{$comment->message}}
                            </div> <!-- /.direct-chat-text -->
                        </div>
                        @endforeach
                    </section>
                    @auth()
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                        <form action="{{route('post.comment.store', $post->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" id="comment" class="form-control" placeholder="Оставьте комментарий" rows="10"></textarea>
                                </div>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="form-group col-md-4" data-aos="fade-right">--}}
{{--                                    <label for="name" class="sr-only">Name</label>--}}
{{--                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name*">--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-md-4" data-aos="fade-up">--}}
{{--                                    <label for="email" class="sr-only">Email</label>--}}
{{--                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-md-4" data-aos="fade-left">--}}
{{--                                    <label for="website" class="sr-only">Website</label>--}}
{{--                                    <input type="url" name="website" id="website" class="form-control" placeholder="Website*">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Send Message" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                        @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
