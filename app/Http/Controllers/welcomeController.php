<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class welcomeController extends Controller
{
    public function index()
    {
        
    //    1,using raw sql queries
//    $users =  DB::select('select * from users');
//    dd($users);
    //    2.Query Builder
    //    $users =  DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
    //    dd($users);

    //    3.Eloquent ORM
//    $student =  Students::select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
// //    dd($student);

        // foreach($student as $student)
        // {
        //  echo $student->name. "<br>";   
        // }

    //    $student = new Students();
    //    $student->name = "vignesh";
    //    $student->email = "vignesh@gmail.com";
    //    $student->save(); 

    
    }
}
