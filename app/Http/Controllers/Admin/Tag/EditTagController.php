<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Models\Category;
use App\Models\Tag;


class EditTagController extends Controller
{
    public function __invoke(Tag $tag)
    {

        return view('admin.tag.edit', compact('tag'));
    }
}
