<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    /**
     * Hiển thị chi tiết tin tức.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Tìm tin tức theo ID
        $tinTuc = TinTuc::findOrFail($id);
        // Trả về view với dữ liệu tin tức
        return view('client\tin_chi_tiet', compact('tinTuc'));
    }
}
