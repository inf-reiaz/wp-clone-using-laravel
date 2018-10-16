<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use GrahamCampbell\Markdown\Facades\Markdown;

class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // relation with posts tabel using model
    public function posts()
    {
        return $this->hasMany(Post::class,'author_id');
    }
    // relation with posts tabel using model
    
    // model bunding                 
    public function getRouteKeyName()
    {
    	return 'slug';
    }
    // model bunding
    
    // user gravatar
    public function gravatar()
    {
        $email = $this->email;
        $default = "https://img.clipartfest.com/46c77c0cbbe4eb9b3ac105566e26fb63_author-websites-clipart-author_200-160.gif";
        $size = 40;
        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
    }
    // user gravatar    
    
    // convert bio text markdowen
    public function getBioHtmlAttribute($value)
    {
        return $this->bio ? Markdown::convertToHtml(e($this->bio)) : NULL;
    }
    // convert bio text markdowen
    
}
