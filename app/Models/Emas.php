<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emas extends Model
{
    use Uuid, HasFactory;

    protected $fillable = ['name', 'status', 'kadar_emas_id', 'level_emas_id', 'category_emas_id', 'image', 'weight', 'color', 'description', 'barcode', 'bahan_keramik', 'vendor',];

    protected $casts = ['status' => 'boolean'];

    public function Level()
    {
        return $this->belongsTo(LevelEmas::class, 'level_emas_id', 'id');
    }

    public function Kadar()
    {
        return $this->belongsTo(KadarEmas::class, 'kadar_emas_id', 'id');
    }

    public function Category()
    {
        return $this->belongsTo(CategoryEmas::class, 'category_emas_id', 'id');
    }
}
