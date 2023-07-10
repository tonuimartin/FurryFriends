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

    //store pet information
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

    public function show()
    {
        $pets = Pet::filter(request(['search']))->where('source_id', auth()->id())->get();
        
        return view('source.allpets')
        ->with('pets', $pets);
    }

    public function showdogs()
    {
        $pets = Pet::filter(request(['search']))->where('source_id', auth()->id())->where('pet_type','dog')->get();
        
        return view('source.allpets')
        ->with('pets', $pets);
    }

    public function showcats()
    {
        $pets = Pet::filter(request(['search']))->where('source_id', auth()->id())->where('pet_type','cat')->get();
        
        return view('source.allpets')
        ->with('pets', $pets);
    }

       //show edit form
       public function edit(Pet $pet)
       {
           return view('source.pet_edit', ['pets' => $pet]);
       }
       // update property data
       public function update(Request $request, Pet $pet)
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
           
   
           $data['user_id'] = auth()->id();
   
           $pet->update($data);
   
           return redirect('/displaypets')->with('message', 'Property updated successfully');
       }
       //delete property
       public function delete($pet_id)
       {
           $pet = Pet::where('pet_id', $pet_id)->first();
           $pet->delete();
           return redirect('/source_dashboard')->with('message', 'Pet deleted successfully');
       }
}

