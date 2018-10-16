@extends('frontend.layout.app')

@section('title')
    Single Blog
@endsection

@section('content')

    <div class="col-md-8">
        <article class="post-item post-detail">
            <div class="post-item-image">
                <a href="{{ route('single',$post->slug) }}">
                    <img src="{{ $post->image_url }}" alt="">
                </a>
            </div>

            <div class="post-item-body">
                <div class="padding-10">
                    <h1>{{ $post->title }}</h1>

                    <div class="post-meta no-border">
                        <ul class="post-meta-group">
                            <li><i class="fa fa-user"></i><a href=""> {{ $post->author->name }}</a></li>
                            <li><i class="fa fa-clock-o"></i><time>{{ $post->date }}</time></li>
                            <li><i class="fa fa-tags"></i><a href="{{ route('category',$post->category->slug) }}">{{ $post->category->name }}</a></li>
                            <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                        </ul>
                    </div>
                    <p>{!! $post->body_html !!}</p>
                </div>
            </div>
        </article>

        <article class="post-author padding-10">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img alt="{{ $post->author->name }}" width="100px" height="100px" src="{{ $post->author->gravatar() }}" class="media-object">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="{{ route('author',$post->author->slug) }}">{{ $post->author->name }}</a></h4>
                <div class="post-author-count">
                  <a href="#">
                      <i class="fa fa-clone"></i>
                        <?php $postCount = $post->author->posts->count() ?>
                        {{ $postCount  }} {{ str_plural('post',$postCount ) }}
                  </a>
                </div>
                <p>
                    {!! $post->author->bio_html !!}
                </p>
              </div>
            </div>
        </article>

        @include('frontend.partials._comments')
    </div>
            
@endsection
