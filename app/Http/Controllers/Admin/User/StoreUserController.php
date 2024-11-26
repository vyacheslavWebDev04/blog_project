<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreTagRequest;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Mail\User\PasswordMail;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class StoreUserController extends Controller
{
    public function __invoke(StoreUserRequest $request)
    {
        $data = $request->validated();
        $password = Str::random(10);
        $data['password'] = Hash::make($password);
        $user = User::firstOrCreate(['email'=>$data['email']], $data);
        Mail::to($data['email'])->send(new PasswordMail($password));
        event(new Registered($user)); // эвенет "регистрация пользователя"
        return redirect()->route('admin.user.index');

    }
}
