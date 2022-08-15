<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index() {
            return view('tutorials.index', [
            "tutorials" => Tutorial::latest()->paginate(10),
        ]);
    }
}
