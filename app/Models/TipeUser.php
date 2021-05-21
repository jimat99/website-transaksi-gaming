<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeUser extends Model
{
    protected $table      = 'tipe_user';
    protected $primaryKey = 'id_tipe_user';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function admin()
    {
        return $this->hasMany(Admin::class, 'id_tipe_user', 'id_tipe_user');
    }

    public function player()
    {
        return $this->hasMany(Player::class, 'id_tipe_user', 'id_tipe_user');
    }
}
