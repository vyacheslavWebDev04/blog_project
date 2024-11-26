<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class MainController extends Controller
{
    public function __invoke()
    {
        $dataCounts = [];
        $dataCounts['usersCount'] = User::all()->count();
        $dataCounts['postsCount'] = Post::all()->count();
        $dataCounts['categoriesCount'] = Category::all()->count();
        $dataCounts['tagsCount'] = Tag::all()->count();

        return view('admin.main.index', compact('dataCounts'));
    }
}
