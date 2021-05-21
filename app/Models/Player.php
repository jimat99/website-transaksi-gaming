<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;

class Player extends Authenticable
{
    protected $table      = 'player';
    protected $primaryKey = 'id_player';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_player', 'id_player');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
