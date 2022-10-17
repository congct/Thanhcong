<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('hello-world');
    }
    // Mảng kết hợp
    public function getData(){
        $data['user']=['Cong','Dung','Minh'];
        return view('Home',$data);
    }
    public function postForm(Request $request){
        echo $request -> username;
        echo '<br>';
        echo $request ->passsword;
    }
}

