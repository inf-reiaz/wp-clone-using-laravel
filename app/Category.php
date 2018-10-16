<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    
    protected $fillable = [
        'id',
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];
    
    // making a relating with posts tabel

        
    public function posts()
    {
    	return $this->hasMany(Post::class);	
    }
      
    // making a relating with posts tabel
    
    
    // model bunding                 
    public function getRouteKeyName()
    {
    	return 'slug';
    }
    // model bunding
}
