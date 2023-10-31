<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\UpperCase;
use App\Rules\PasswordRegex;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    //

    function showform(){
        // print_r("Get-method");
        return view('registration.userform');
    }

    // function signup(Request $request){
    function signup(RegistrationRequest $request){
        // dd($request);
        // print_r("Post-method");
        // print_r($request->all());
        // print_r($request->input());
        // print_r($request->input('name1'));
        // print_r($request->input('email'));
        // print_r($request->input('password'));

        // print_r($request->name1);

        // access old data using flash method   

        $request->flash();

        // $request->flashOnly(['name1','email']);

        // print_r($request->old('name1'));
        // print_r($request->old('email'));
        // print_r($request->old('password'));

        // redirect olddata in the olddata page
        // return redirect('olddata')->withInput();
        // return redirect('olddata')->withInput(
        //     $request->except('password')
        // );

        // single rule 
        // $validate = $request->validate([
        //     'name1' => 'required',
        //     'email'=> 'required',
        //     'password'=> 'required',
        // ]);

        // multiple rule
        // $validate = $request->validate([
        //     'name1' => 'required',
        //     'email'=> ['required', 'min:20'],
        //     'password'=> ['required', 'min:8'],
        // ]);
        
        //
        // $validate = $request->validate([
        //     'name1' => ['required', new UpperCase],
        //     'email'=> 'required | min:20',
        //     // 'password'=> 'required | min:8 | regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',
        //     'password'=> ['required', 'min:8' ,'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
        // ]);

        // $input = $request->except('_token');
        // print_r("Form validate");

        // Form Request validation
        $request->validated();
        return view('registration.userform');
        
        // return view('registration.userform', ['data'=>$input]);
    }
}
