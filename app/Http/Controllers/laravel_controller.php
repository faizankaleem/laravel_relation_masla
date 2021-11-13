<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

use App\Models\employee;
class laravel_controller extends Controller
{
    //

    function main_view()
    {
        return view('home');
    }

    function one_to_one()
    {
//        this is how we get the parent table which is employee and child table which is company;
        $data = employee::with('company')->find(2);
        return view('show_one_to_one')->with(compact('data'));



//          this is how we get only child table data which is company;


//        $data = employee::find(2)->company;
//        echo $data;


    }

    function one_to_many()
    {
//          Not Working
        $data =employee::with('email')->find(4);
        if(is_null($data))
        {
            echo "Object is not found : "."<br>";

        }
        else
        {
            return view('show_one_to_many')->with(compact('data'));

        }



//        $data = employee::find(2)->email;
//        return view('show_one_to_many')->with(compact('data'));
    }

    function many_to_many()
    {
        $data =student::with('course')->get();
        return view('show_many_to_many',['arr'=>$data]);
    }
}
