<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Call;

class CallController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('call.index');
    }

    public function create()
    {
        return view('call.create');
    }

    public function store(Request $request)
    {   
        $input = $request->all();
        return Call::create($input);
        
    }
}
