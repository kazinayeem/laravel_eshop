<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function postgroup (string $id): View
    {
        return view('user.profile');
    }
}
