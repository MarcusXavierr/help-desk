<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Call;

class CallController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $calls = Call::all(['user_name','user_id','title','category','description','created_at','id'])->sortBy('created_at');
        
        return view('call.index',compact('calls'));
    }

    public function create()
    {
        return view('call.create');
    }

    public function store(Request $request)
    {   
        $input = $request->all();
        $user_id = $input['user_id'];//Get the user id
        $username = DB::table('users')->where('id',"$user_id")->get('name');//Get the user name
        $input['user_name'] = $username[0]->name;//Save the user name
        Call::create($input);
        return redirect('/call');
        
    }

    public function destroy($id)
    {
        $call = Call::find($id);
        $call->delete();
        return redirect('/');
    }
}
