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
        return $this->hasMany(App\Application::class);
    }

    public function addNote(Note $note, $userId)
    {
        $note->user_id = $userId;

        return $this->notes()->save($note);
    }
}
