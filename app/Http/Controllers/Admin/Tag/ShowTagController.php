<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class ShowTagController extends Controller
{
    public function __invoke(Tag $tag)
    {

        return view('admin.tag.show', compact('tag'));
    }
}
