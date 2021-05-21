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

    public function tipe_user()
    {
        return $this->belongsTo(TipeUser::class, 'id_tipe_user', 'id_tipe_user');
    }
}
