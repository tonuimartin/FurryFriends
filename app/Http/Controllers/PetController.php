<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use App\Models\Confirmation;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    public function create()
    {
        // if (auth()->user()->role != "owner") {
        //     abort(403, 'Unauthorized Action! This page is for property owners only');
        // }
         return view('source.addpet');
    }

    //store property data
    public function store(Request $request)
    {
        $data = $request->validate([            
        'pet_name' => 'required',
        'age' => 'required',
        'pet_gender' => 'required',
        'breed' => 'required',
        'pet_type' => 'required',
        'description' => 'required',
        

        ]);

        if ($request->hasFile('pet_image')) {
        $data['pet_image'] = $request->file('pet_image')->store('Pet', 'public');
        }

        $data['source_id'] = auth()->id();
        

        Pet::create($data);

        return redirect('/source_dashboard')->with('message', 'Pet added successfully');
    }
}
