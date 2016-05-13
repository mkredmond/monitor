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
        'name', 'uri', 'server_id', 'port', 'protocol',
    ];

    public function server()
    {
        return $this->belongsTo(App\Server::class);
    }
}
