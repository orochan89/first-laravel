<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index($text = "デフォルト")　//パスパラメータ
    // public function index(Request $request)
    // {
    // $item = [
    // 'content' => 'パラメータを渡す',
    // 'param' => $text //パスパラメータ
    // 'param' => $request->text
    // ];
    // return view('index', $item);
    // }
    public function index()
    {
        $item = [
            'content' => '本文'
        ];
        return view('index', $item);
    } // bladeファイルを優先して読み込む
}
