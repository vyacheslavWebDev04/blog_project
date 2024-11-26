<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdatePostRequest;
use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Http\Requests\Admin\Tag\UpdateTagRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;


class UpdatePostController extends BaseController
{
    public function __invoke(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->service->update($post, $data);
        return view('admin.post.show', compact('post'));
    }
}
