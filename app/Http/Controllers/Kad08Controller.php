<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bcontent;

class Kad08Controller extends Controller
{
    public function index()
    {
        //モデルクラスのオブジェクト生成
        $content = new Bcontent();
        //10件分取り出す
        $data = $content->orderBy('id','desc')->limit(10)->get();
        //bladeに渡す
        return view('kad08',['data' => $data]);
    }
}
