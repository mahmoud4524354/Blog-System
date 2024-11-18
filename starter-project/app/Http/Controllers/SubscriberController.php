<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request){

//        ايه الفرق
//        dd($request);
//        dd($request->all());
        $data = $request->validate([
            'email'=>'required|email|unique:subscribers,email'
        ]);

        Subscriber::create($data);
        return back()->with('status', 'Subscribed successfully');
//        dd($data);
    }
}
