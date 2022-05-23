<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PersonalIndexController extends Controller
{
    public function __invoke()
    {
        $likeCount = auth()->user()->likedPosts()->count();
        $commentCount = auth()->user()->comments()->count();
        return view('personal.main.index', compact('likeCount', 'commentCount'));
    }
}
