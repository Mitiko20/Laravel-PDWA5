<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    protected $Objeto;
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['linha', 'data', 'booleano', 'decimal', 'inteiro'];
}
