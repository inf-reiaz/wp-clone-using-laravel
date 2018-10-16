<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{
    protected $table = "posts";
    
    protected $fillable = [
        'id',
        'author_id',
        'category_id',
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'view_count',
        'published_at',
        'created_at',
        'updated_at'
    ];
    
    protected $dates = ['published_at'];
    
    // relation with users table
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
    // relation with users table
    
    // making a relation with categories table

    public function category()
    {
    	return $this->belongsTo(Category::class);	
    }
    
    // making a relation with categories table


    // accessor for return the image path 
    public function getImageUrlAttribute($value)
    {
    	$imageUrl ="";
    	if(! is_null($this->image))
    	{
    		$imagePath = public_path() . "/frontend/img/" . $this->image;
    		if(file_exists($imagePath))
    		{
    			$imageUrl = asset("/public/frontend/img/" . $this->image);
    		}
    	}
    	return $imageUrl;
    }
    // accessor for return the image path 
    
        
    // create image thumbnil
    public function getImageThumbUrlAttribute($value)
    {
    	$imageUrl ="";
    	if(! is_null($this->image))
    	{
    	    $ext = substr(strrchr($this->image, '.'),1);
    	    
    	    $thumbnail = str_replace(".{.$ext}","_thumb.{.$ext}",$this->image);
    		$imagePath = public_path() . "/frontend/img/" . $thumbnail;
    		if(file_exists($imagePath))
    		{
    			$imageUrl = asset("/public/frontend/img/" . $thumbnail);
    		}
    	}
    	return $imageUrl;
    }
    // create image thumbnil

    
    //  latest post disply first 
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('published_at', 'desc');
    }
    //  latest post disply first     
    
    // return the date date 
    public function getDateAttribute($value)
    {
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }
    // return the date 
    
    // return only published date are lass then current time
    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }
    // return only published date are lass then current time
    
    // return markdowen converted html view
    public function getBodyHtmlAttribute($value)
    {
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL;
    }

    public function getExcerptHtmlAttribute($value)
    {
        return $this->excerpt ? Markdown::convertToHtml(e($this->excerpt)) : NULL;
    }
    // return markdowen converted html view
    
    
    // populer post scop
    public function scopePopular($query)
    {
        return $query->orderBy('view_count','desc');
    }
    // populer post scop
    
    
    // date formating  
    public function dateFormatted($showTimes = false)
    {
    	$formate = "d/m/y";
    	if($showTimes) {
    		$formate = $formate."H:i:s";
    	}
		return $this->created_at->format($formate);	
    }
    // date formating 
    
    // post publaction status 
    
    
    public function publicationLabel()
    {
        if ( ! $this->published_at) {
            return '<span class="label label-warning">Draft</span>';
        }
        elseif ($this->published_at && $this->published_at->isFuture()) {
            return '<span class="label label-info">Schedule</span>';
        }
        else {
            return '<span class="label label-success">Published</span>';
        }
    }
    // post publaction status 
    
    // published_at may be null if admin think 
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value ?: NULL;
    }
    
}
