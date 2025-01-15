<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelFormController extends Controller
{
    public function showForm()
    {
        $data = []; // เพิ่มข้อมูลที่ต้องการส่งไปยัง view
        return view('LaravelForm', $data);
    }
}
