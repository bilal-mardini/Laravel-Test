<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use Notifiable, HasFactory, HasApiTokens;

  protected $fillable = [
    'name',
    'email',
    'password',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];
  public function teams()
  {
    return $this->belongsToMany(Team::class, 'team_user')
    ->withTimestamps();
  }
  public function ownedTeams()
  {
    return $this->hasMany(Team::class, 'owner_id');
  }
}
