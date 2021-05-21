<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function player()
    {
        return $this->belongsTo(Player::class, 'id_player', 'id_player');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'id_item', 'id_item');
    }
}
