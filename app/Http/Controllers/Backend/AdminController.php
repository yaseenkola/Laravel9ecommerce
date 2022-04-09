<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin.index');
    }
}
