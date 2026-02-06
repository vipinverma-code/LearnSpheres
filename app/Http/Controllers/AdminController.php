<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Dummy data (later DB se fetch kar sakte ho)
        $earnings = [
            'labels' => ['Jan','Feb','Mar','Apr','May','Jun'],
            'data'   => [1200,1500,1800,1400,2000,2500],
        ];

        return view('Admin.admin', compact('earnings'));
    }
}


