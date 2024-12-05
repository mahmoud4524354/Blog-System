<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(StoreContentRequest $request){
        $data = $request->validated();

        Contact::create($data);

        return back()->with('success', 'Thanks for contacting us!');
    }
}
