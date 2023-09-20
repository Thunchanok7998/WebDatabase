<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //สร้างฟังชั่นแยกการเข้าสู่ระบบเพื่อไปหน้าที่ต่างกัน
    public function index(){
        $role=Auth::user()->role;
        if($role=='1'){
            return view('admin');
        }
        if($role=='2'){
            return view('employee');
        }
       else{
            return view('dashboard');
        }

    }
}
