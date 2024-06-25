<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    protected $Celular;
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['marca', 'modelo', 'cor', 'memoriaRAM', 'sistema'];
}
