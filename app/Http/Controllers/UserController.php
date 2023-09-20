<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\User;
class UserController extends Controller
{
    /*public function register(Request $request)
    {
        // สร้าง User ใหม่
        $user = new User();
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');

        // คำนวณค่า id ตามลำดับ
        $latestUser = User::orderBy('id', 'desc')->first();
        $nextId = $latestUser ? 'C' . str_pad((int)substr($latestUser->id, 1) + 1, 3, '0', STR_PAD_LEFT) : 'C001';

        // กำหนดค่า id
        $user->id = $nextId;

        // บันทึก User
        $user->save();

        // ส่งกลับการลงทะเบียนสำเร็จหรือทำสิ่งที่คุณต้องการ
        return view('/dashboard');
    } */
}

