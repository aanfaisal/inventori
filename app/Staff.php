<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'staff';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'staff_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode', 'nama', 'alamat', 'kodepos', 'telp', 'email', 'jabatan'];

    
}
