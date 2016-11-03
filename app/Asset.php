<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'assets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'asset_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode', 'nama', 'jumlah', 'kondisi'];

    
}
