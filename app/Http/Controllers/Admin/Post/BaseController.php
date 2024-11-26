<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Service\PostServices;

class BaseController extends Controller
{
    public PostServices $service;
    public function __construct(PostServices  $service)
    {
        $this->service = $service;
    }
}
