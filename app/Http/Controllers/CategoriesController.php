<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        /* esto es equivalente a select * from 'categories;' */
        $categories = Category::all();

        return 'Hola desde el controlador de las categorías';
        /* return view('welcome'); */
        return view ('welcome', ['categories' => $categories]);
    }
}
