<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;

class HomeAboutController extends Controller
{
    public function index()
    {
        return Inertia::render('Home/About', [
            'categories' => Category::paginate(),
            'products' => Product::paginate()
        ]);
    }
}
