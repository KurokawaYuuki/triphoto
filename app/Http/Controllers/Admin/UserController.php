<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('admin.user.create');
    }

    public function create()
    {
        return redirect('admin/user/create');
    }

    public function index(Request $request)
    {
        return view('admin.news.index');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function update()
    {
        return redirect('admin/user/edit');
    }
}
