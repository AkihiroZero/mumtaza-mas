<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class LevelEmas extends Model
{
    use Uuid, HasFactory;

    protected $fillable = ['name', 'status', 'price', 'description'];

    protected $casts = ['status' => 'boolean'];

    public function items()
    {
        return $this->hasMany(Emas::class);
    }
}
