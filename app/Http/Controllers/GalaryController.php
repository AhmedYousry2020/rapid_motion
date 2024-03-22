<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalaryController extends Controller
{
    public function index()
    {
     return view('galary');
    }

    public function store(Request $request)
    {
        $imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);
    	return response()->json(['uploaded' => '/upload/'.$imageName]);
    }

}
