<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): View{
        return view('category.index', [
            'categories' => Category::paginate(20)
        ]);
    }

    public function show(int $id): RedirectResponse | View{
        $category = Category::findOrFail($id);

        return view('category.show', [
            'category' => $category
        ]);
    }
}
