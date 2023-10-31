<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    
    public function show(){
        $students = '';

        // Retrieving all data from the table
        // $students = DB::table('Student')->get();
        // dd($students);
        // $students = DB::table('Student')->find(3);
        // $students = DB::table('Student')->first();
        // $students = DB::table('Student')->where('name','mayur')->first();
        // $students = DB::table('Student')->where('name','mayur')->value('city');
        // $students = DB::table('Student')->count();
        // dd($students);


        // using select method
        // $students = DB::table('Student')->select('name')->get();
        // dd($students);

        // where clouse
        // $students = DB::table('Student')->where('id', '>', 3)->get();
        // dd($students);

        //insert single data in to db
        // DB::table('Student')->insert([
        //     'name' => 'ram',
        //     'city' => 'aayodhya'
        // ]);

        // insert multiple data
        // DB::table('Student')->insert([
        // //     ['name' => 'mitul',
        // //     'city' => 'aanad'],
        //     ['name' => 'jack',
        //     'city' => 'ahmedabad']
        // ]);

        // update method    
        // DB::table('Student')->where('id',6)->update([
        //     'name' =>'rahul',
        //     'city' => 'surat'
        // ]);

        // delete method
        // DB::table('Student')->where('id',8)->delete();

        // truncate method (delete all the data from the table)
        // DB::table('Student')->truncate();

        // padinatation

        $students = DB::table('Student')->paginate(3);
        return view('student', ['students'=>$students]);
    }
}
