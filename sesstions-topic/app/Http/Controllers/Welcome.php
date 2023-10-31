<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function index(Request $request){

        // dd($request);

        // storing data
        $request->session()->put('name','pranav');
        $request->session()->put('city','ahmedabad');

        // retrieving data
        $name = $request->session()->get('name');
        $city = $request->session()->get('city');

        // dd($name);
        // dd($city);

        // retrieving all data
        $data = $request->session()->all();
        // dd($data);

        // check id exists

        // if($request->session()->has('name')){
        //     dd('yes');
        // }
        // else{
        //     dd('no');
        // }

        // check that if item is present or not
        
        // if($request->session()->exists('name')){
        //     dd('yes');
        // }
        // else{
        //     dd('no');
        // }

        // if($request->session()->missing('name')){
        //     dd('yes');
        // }
        // else{
        //     dd('no');
        // }

        // delete the items in the sessions
        // echo($request->session()->get('name'));
        // $request->session()->forget('name');
        // echo($request->session()->get('name'));

        // delete all items
        // $request->session()->flush();


        // Global Session helper

        session(['name'=>'pranav']);

        // $name = session('name');
        // dd($name);

        $data = session()->all();
        // dd($data);

        // delete all items
        // session()->flush();
        // return view('welcome');

        // Flash Data  
        $request->session()->flash('status','login success');  

        return redirect('profile');
    }
}
