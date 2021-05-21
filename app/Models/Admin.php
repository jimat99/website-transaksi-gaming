<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    protected $table      = 'admin';
    protected $primaryKey = 'id_admin';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function tipe_user()
    {
        return $this->belongsTo(TipeUser::class, 'id_tipe_user', 'id_tipe_user');
    }
}
