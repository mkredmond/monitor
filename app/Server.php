<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'hostname', 'env',
  ];

    public function applications()
    {
        return $this->hasMany(\App\Application::class);
    }

    public function addApplication(Application $application)
    {
        return $this->applications()->save($application);
    }
}
