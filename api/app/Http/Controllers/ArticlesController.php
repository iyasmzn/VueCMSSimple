<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $data = app('db')->table('articles')->get();
        
        return response()->json($data);
    }
}
