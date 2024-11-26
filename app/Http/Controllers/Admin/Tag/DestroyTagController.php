<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Http\Requests\Admin\Tag\UpdateTagRequest;
use App\Models\Category;
use App\Models\Tag;


class DestroyTagController extends Controller
{
    public function __invoke(Tag $tag)
    {

        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
