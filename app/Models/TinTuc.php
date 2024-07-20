<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;


    protected $table = 'tin_tucs';
    protected $fillable = [
        'tieu_de',
        'tom_tat',
        'noi_dung',
        'ngay_dang',
        'loai_tin_id',
        'nguon_tin',
        'hinh_anh',
    ];

    public function loaiTin()
    {
        return $this->belongsTo(LoaiTin::class, 'loai_tin_id');
    }
}
