<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='shop_user';
    public $timestamps=true;
    protected $primaryKey='u_id';
}
