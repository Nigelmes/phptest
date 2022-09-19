<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avtor extends Model
{
    protected $fillable = ['uuid', 'tittle'];
    use HasFactory;
}
