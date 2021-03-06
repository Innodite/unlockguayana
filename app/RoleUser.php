<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'role_user';

  protected $fillable = [
    'user_id',
    'role_id'
  ];

  /**
   * Get the role that owns the comment.
   */
  public function role()
  {
    return $this->belongsTo('App\Role');
  }

  /**
   * Get the role that owns the comment.
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }

  
}