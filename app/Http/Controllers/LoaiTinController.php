<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\TinTuc;
use Illuminate\Http\Request;

class LoaiTinController extends Controller
{

    public function index()
    {
        // Lấy tất cả loại tin
        $loaiTins = LoaiTin::all();

        // Khởi tạo mảng chứa dữ liệu cho từng phần
        $sections = [];

        // Lặp qua từng loại tin để lấy tin tức tương ứng
        foreach ($loaiTins as $loaiTin) {
            $sections[] = [
                'loai_tin' => $loaiTin,
                'tin_tucs' => TinTuc::where('loai_tin_id', $loaiTin->id)->get()
            ];
        }

        return view('client\index', compact('loaiTins', 'sections'));
    }
}
