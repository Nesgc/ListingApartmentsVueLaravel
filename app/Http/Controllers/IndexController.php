<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return inertia(
            'Index/Index',
            [
                'message' => 'hello from laravel'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
