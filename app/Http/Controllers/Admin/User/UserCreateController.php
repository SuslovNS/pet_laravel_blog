<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserCreateController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRoles();
        return view('admin.user.create', compact('roles'));
    }
}
