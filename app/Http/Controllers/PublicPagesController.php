<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

use App\Category;

class PublicPagesController extends Controller
{
    
    protected $limit = 10;
    
    public function getIndex()
    {
        
        $posts = Post::with('author')
                ->latestFirst()
                ->published()
                ->simplePaginate($this->limit);
        return view('frontend.pages.index',compact('posts'));
    }
    
    public function getSingle(Post $post)
    {
        // // counting post populer process 1
        // $viewCount = $post->view_count + 1;
        // $post->update(['view_count' => $viewCount ]);
        // // counting post populer  process 1
        
        $post->increment('view_count');
        
        return view('frontend.pages.single',compact('post'));
    }
    
    
    public function getCategory(Category $category)
    {
        $categoryName = $category->name;
        $posts = $category->posts()
                          ->with('author')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);
        return view('frontend.pages.index',compact('posts','categoryName'));
    }
    
    public function getAuthor(User $author)
    {
        $authorName = $author->name;
        $posts = $author->posts()
                          ->with('category')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);
        return view('frontend.pages.index',compact('posts','authorName'));
    }
    
    
}
