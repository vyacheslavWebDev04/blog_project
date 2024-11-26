<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostUserLike;
use App\Models\Tag;
use App\Models\User;

class PersonalMainController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;
        $comments = auth()->user()->comments;
        return view('personal.main.index', compact('posts', 'comments'));
    }
}
