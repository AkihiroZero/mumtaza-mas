<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emas extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'kadar_emas_id', 'level_emas_id', 'image', 'weight', 'description'];

    protected $casts = ['status' => 'boolean'];
}
