<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table      = 'item';
    protected $primaryKey = 'id_item';
    protected $guarded    = [''];
    public $timestamps    = false;

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_item', 'id_item');
    }
}
