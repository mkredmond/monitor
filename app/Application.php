<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'url', 'server_id', 'port',
  ];

    public function server()
    {
        return $this->belongsTo(App\Server::class);
    }
}
