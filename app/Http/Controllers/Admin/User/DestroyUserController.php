<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Http\Requests\Admin\Tag\UpdateTagRequest;
use App\Models\Category;
use App\Models\User;


class DestroyUserController extends Controller
{
    public function __invoke(User $user)
    {

        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
