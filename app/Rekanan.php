<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rekanans';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'rekanan_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode', 'nama', 'alamat', 'telp', 'npwp'];

    
}
