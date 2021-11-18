<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Bcontent;

class Samp08Controller extends Controller
{
    public function index()
    {

        //$content = Bcontent::all();
        $content = new Bcontent();
        $data = $content->orderBy('id','desc')->limit(5)->get();
        return view('samp08',['data' => $data]);
    }
}
