<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return view('testform');
    }

    public function postTest(Request $request)
    {
        Order::create($request->all());

        return redirect()->route('test');
    }
}
