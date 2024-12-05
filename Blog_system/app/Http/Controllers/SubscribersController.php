<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
            'email' => 'required|email|unique:subscribers'
        ]);

        Subscribers::create($data);

        return back()->with('status', 'Subscribed successfully');
//        dd($data);
    }
}
