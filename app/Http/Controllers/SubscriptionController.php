<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscription;

class SubscriptionController extends Controller
{
    public function showForm()
    {
        
        return view('showForm'); 
    }


    public function create(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        Subscription::create($request->all());     
        
        $request->session()->flash('message', 'Iscrizione completata correttamente');
        return redirect()->route('tournaments');
    }

   
}
