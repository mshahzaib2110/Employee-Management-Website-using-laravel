<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaves extends Model
{
    protected $table='leaves';
    protected $primaryKey='l_id';
    use HasFactory;
}
