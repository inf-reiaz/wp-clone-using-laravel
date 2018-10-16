@extends('frontend.layout.app')

@section('title')
    Index Page
@endsection

@section('content')

            <div class="col-md-8">                
            
                @if(! $posts->count() )
                    <div class="alert alert-warning">
                      <strong>Warning!</strong> No Data Found.
                    </div>
                @else
                
                	@if(isset($categoryName))
                        <div class="alert alert-info">
                          <strong>Category: </strong>{{ $categoryName }} 
                        </div>
                	@endif
                
                	@if(isset($authorName))
                        <div class="alert alert-info">
                          <strong>Author: </strong>{{ $authorName }} 
                        </div>
                	@endif
                	
                    @foreach($posts as $post)
                        <article class="post-item">
                            <div class="post-item-image">
                                <a href="{{ route('single',$post->slug) }}">
                                    <img src="{{ $post->image_url }}" alt="">
                                </a>
                            </div>
                            <div class="post-item-body">
                                <div class="padding-10">
                                    <h2><a href="{{ route('single',$post->slug) }}">{{ $post->title }}</a></h2>
                                    <p> {!! $post->excerpt_html !!} </p>
                                </div>
        
                                <div class="post-meta padding-10 clearfix">
                                    <div class="pull-left">
                                        <ul class="post-meta-group">
                                            <li><i class="fa fa-user"></i><a href="{{ route('author',$post->author->slug) }}">{{ $post->author->name }}</a></li>
                                            <li><i class="fa fa-clock-o"></i><time>{{ $post->date }}</time></li>
                                            <li><i class="fa fa-folder"></i><a href="{{ route('category',$post->category->slug) }}">{{ $post->category->name }}</a></li>
                                            <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('single',$post->slug) }}">Continue Reading &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
                <nav>
                    {{ $posts->links() }}
                </nav>
            </div>

@endsection
