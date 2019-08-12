<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class OrderController extends Controller
{
    public function Vieworder(Request $request)
    {
        $lists = Orders::all();
        return view('admin.pages.list-order', ['lists' => $lists]);
    }
}