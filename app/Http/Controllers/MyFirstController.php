<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function XinChao($id){
        echo "Chao tat ca cac ban" . $id;
        return redirect()->route('MyRoute');
    }

    public function GetURL(Request $request){
        return $request->url();
    }
}
