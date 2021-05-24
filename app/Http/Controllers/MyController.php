<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class MyController extends Controller
{
    public function route($text)
    {
        echo $text;
    }

    public function controller($text)
    {
        //dd($text);
        return dump($text);
    }

    public function view()
    {
        $item = Products::all();
        return view('myview', [
            'item' => $item,
        ]);
    }
}
