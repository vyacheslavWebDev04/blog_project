<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Http\Requests\Admin\Tag\UpdateTagRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;


class DestroyPostController extends BaseController
{
    public function __invoke(Post $post)
    {

        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
