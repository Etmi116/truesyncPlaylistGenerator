<?php

namespace App\Http\Controllers;

use App\Models\contentType;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $data = contentType::all();
        return view('home',['data'=>$data]);
    } 

    public function store(Request $request){
        $request->validate([
            'type' => 'bail|required'
        ]);

        $content = contentType::firstOrCreate(['type'=>$request->input('type')]);

        return to_route('home');
    }
}
