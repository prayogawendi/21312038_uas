<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    use HasFactory;
    protected $table = 'biodata';

    protected $fillable = ['npm', 'nama', 'alamat'];
}
