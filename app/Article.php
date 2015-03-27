<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

    public $timestamps = true;

    protected $fillable = ['title', 'body', 'published_at', 'user_id'];

    protected $dates = ['published_at'];

//    public function setPublishedAtAttribute($date)
//    {
//        $this->attributes['published_at'] = Carbon::now();
//    }

    public function getPublishedAtAttribute($date)
    {
        return new Carbon($date);
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function tags()
    {
        return $this->belongsToMany("App\Tag")->withTimestamps();
    }

    /**
     * Get tag id list of this articles tags
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }

}
