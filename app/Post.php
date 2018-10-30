<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function tags()
    {
      return $this->belongsToMany(Tag::class);
    }

    public function scopeFilter($query, $filters)
    {
      if($month=request($filters[0])){
        $query->whereMonth('created_at', Carbon::parse($month));
      }
      if ($year=request($filters[1])) {
        $query->whereYear('created_at',$year);
      }
    }

    public static function archives()
    {
      return static::selectRaw("year(created_at) year, monthname(created_at) month, count(*) published")
        ->groupBy('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get();
    }
}
