<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Http\Requests\Admin\Tag\UpdateTagRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\Category;
use App\Models\User;


class UpdateUserController extends Controller
{
    public function __invoke(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();

        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
