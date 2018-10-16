<?php

namespace App\ComposerView;
use App\Post;
use App\Category;

use Illuminate\View\View;

class AutoLodeData
{
    public function compose(View $view)
    {
        $this->composeCategories($view);
        $this->composePopularPost($view);
    }
    
    private function composeCategories(View $view)
    {
        $categories = Category::with(['posts' => function($query) {
            $query->published();
        }])->orderBy('name', 'asc')->get();
        
        $view->with('categories',$categories);
    }
    
    
    private function composePopularPost(View $view)
    {
        $popularPosts = Post::published()->popular()->take(4)->get();
        return $view->with('popularPosts',$popularPosts);
    }
    
}