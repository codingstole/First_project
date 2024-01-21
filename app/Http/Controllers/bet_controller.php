<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\bet_model;

class bet_controller extends Controller
{
          
    public function form()

    {




        $data = DB::select('select * from bet_models');
        return view('welcome',compact('data'));
    }  
    
    
    public function postregistration(Request $request)
    {
       $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'coin' => $request->get('coin'),
            'price' => $request->get('price'),
            'time' => $request->get('time'),
           
        ];
        
        bet_model::insert($data);
        return back();
    }
   


   function records(){


       $records = DB::table('bet_models')->get();
   
   
           $records   =   bet_model::all();
           return view('admin',compact('records'));
    
 
}

function delete_record($id){
    bet_model::destroy($id);
    return back();
}
}