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
        //Ensure that there is no white space or leading '/'
        $application->uri = ltrim(trim($application->uri), '/');

        return $this->applications()->save($application);
    }
}
