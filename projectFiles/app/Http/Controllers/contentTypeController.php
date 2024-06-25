<?php

namespace App\Http\Controllers;

use App\Models\contentTypes;
use Illuminate\Http\Request;

class contentTypeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function store(Request $request){
        $data = $request->validate([
            'type'=>['required']
        ]);

        $contentType = contentTypes::create($data);
    }
    
}
 