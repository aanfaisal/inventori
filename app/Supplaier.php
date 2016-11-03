<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplaier extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'supplaiers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'supp_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode', 'nama', 'alamat', 'telp', 'npwp', 'fax'];

    
}
