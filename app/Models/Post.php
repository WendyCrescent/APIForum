<?php

namespace App\Models;

use App\Traits\Orderable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use Orderable;

  protected $fillable = ['body'];

  public function topic()
  {
    return $this->belongsTo(Topic::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function likes()
  {
    return $this->morphMany(Like::Class, 'likeable');
  }
}
