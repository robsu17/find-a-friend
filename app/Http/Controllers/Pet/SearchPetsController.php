<?php

namespace App\Http\Controllers\Pet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchPetsController extends Controller
{
    public function __construct() {}

    public function index()
    {
        return view('pages.pet.search');
    }

    public function search(Request $request)
    {
        dd($request->query());
    }
}
