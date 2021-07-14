<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;

class Player extends Authenticable
{
    protected $table      = 'player';
    protected $primaryKey = 'id_player';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
