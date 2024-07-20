<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;

    protected $table = 'loai_tins';

    protected $fillable = [
        'ten_loai_tin',
    ];

    public function tinTucs()
    {
        return $this->hasMany(TinTuc::class, 'loai_tin_id');
    }
}
