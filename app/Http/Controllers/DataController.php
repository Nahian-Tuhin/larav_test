<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function add(){
        return view('add');
    }
    public function add_data(Request $request){

        $request->validate([

            'name'=>'required|max:254',
            // 'email'=>'required','unique:data','email',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:data'],

            'age'=>'required|max:10',
            'experience'=>'required|max:2',
            'type'=>'required|max:254'
        ]);

        data::insert($request->except('_token') );
        return back()->with('status','Your Data Added...');
    }

    public function show(){
       $data= data::all();
        return view('show',[
            'data'=> $data
        ]);
    }
}
