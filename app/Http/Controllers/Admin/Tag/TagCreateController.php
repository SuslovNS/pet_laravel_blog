<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagCreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.tag.create');
    }
}
