<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class ApiController extends Controller
{
    public function movies()
    {
        $movies = Movie::with("genre", "tags")->get();
        return response()->json([
            "success" => true,
            "movies" => $movies
        ]);
    }
}