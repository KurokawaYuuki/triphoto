<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return view('admin.post.create');
    }

    public function create()
    {
        return redirect('admin/post/create');
    }

    public function index(Request $request)
    {
        return view('admin.news.index');
    }

    public function edit()
    {
        return view('admin.post.edit');
    }

    public function update()
    {
        return redirect('admin/post/edit');
    }
}
