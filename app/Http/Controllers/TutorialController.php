<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index() {

        $category = Category::all();

    	return view('tutorial.index', [
            "categories" => $category,
            "tutorials" => Tutorial::latest()->paginate(10),
        ]);
    }
}
