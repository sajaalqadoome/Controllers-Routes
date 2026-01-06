<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
public function dashboard()
{
//1-compact
    $title='admin Dashboard';
    $userCount=120;

    return view('dashboard',compact('title','userCount'));

//2-with
     // $title='admin Dashboard';
    //$userCount=120;

    //return view('admin.dashbord')
    //->with('title',$title)->with('userCount',$userCount);

//3-Key->view
   // $title = 'Admin Dashboard';
    //$usersCount = 120;

    //return view('admin.dashboard', [
      //  'title' => $title,
        //'usersCount' => $usersCount,
    //]);


}
public function reports()
{


}



}
