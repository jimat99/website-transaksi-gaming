<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table      = 'role';
    protected $primaryKey = 'id_role';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function admin()
    {
        return $this->hasMany(Admin::class, 'id_role', 'id_role');
    }

    public function player()
    {
        return $this->hasMany(Player::class, 'id_role', 'id_role');
    }
}
