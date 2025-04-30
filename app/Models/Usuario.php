<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $guarded = ['id_usuario'];
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    public $timestamps = true;

}
