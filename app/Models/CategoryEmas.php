<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryEmas extends Model
{
    use Uuid, HasFactory;

    protected $fillable = ['name', 'status', 'image', 'description'];

    protected $casts = ['status' => 'boolean'];

    public function items()
    {
        return $this->hasMany(Emas::class);
    }
}
