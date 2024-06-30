<?php

namespace App\Http\Controllers;

use App\Http\Resources\BazarResource;
use App\Models\Bazar;

class HomeController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Home', [
            'bazars' => BazarResource::collection(Bazar::latest()->get())
        ]);
    }
}
