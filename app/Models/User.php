<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'username',
        'email', 'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function avatar()
    {
      return 'https://gravatar.com/avatar/' . md5($this->email) . '?s=128&d=mm';
    }

    public function ownsTopic(Topic $topic)
    {
        return $this->id === $topic->user->id;
    }

    public function ownsPost(Post $post)
    {
        return $this->id === $post->user->id;
    }
}
