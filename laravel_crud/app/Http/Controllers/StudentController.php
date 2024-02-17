<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function home(){
        return view('welcome');
    }
    public function index(){
        return view('index');
      
        
    }
           public function user(Request $request){
                
                $request->validate([
                    'Name' => 'required',
                    'Email' => 'required | email',
                    'Password' => 'required',
                    'Class' => 'required',
                    'Faculty' => 'required',
                ]);
                // dd($request);
                $table = new StdModel();
                $table->Name = $request['Name'];
                $table->Email = $request['Email'];
                $table->Password = $request['Password'];
                $table->Class = $request['Class'];
                $table->Faculty = $request['Faculty'];

                $table->save();
                return view('index');
            }
        



}
