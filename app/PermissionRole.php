<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'permission_role';

  protected $fillable = [
    'permission_id',
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
  public function permission()
  {
    return $this->belongsTo('App\Permission');
  }

  
}