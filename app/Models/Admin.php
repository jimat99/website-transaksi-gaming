<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    protected $table      = 'admin';
    protected $primaryKey = 'id_admin';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
