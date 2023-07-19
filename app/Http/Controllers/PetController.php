<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use App\Models\Source;
use App\Models\PetInformation;
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
    public function addpetinformation(Request $request)
    {
        $data = $request->validate([            
        'title' => 'required',
        'info_description' => 'required',
        ]);

        if ($request->hasFile('pet_information_image')) {
        $data['pet_information_image'] = $request->file('pet_information_image')->store('Petinformation', 'public');
        }       

        Petinformation::create($data);

        return redirect('/petinformationform')->with('message', 'Pet Information added successfully');
    }

    public function petinformationform(){
        return view('admin.addpetinformation');
    }

    public function store(Request $request)
    {
        $data = $request->validate([            
        'pet_name' => 'required',
        'age' => 'required',
        'pet_gender' => 'required',
        'breed' => 'required',
        'pet_type' => 'required',
        'description' => 'required',
        'price' => 'required',
        'status'=>'required',
        

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
        $pets = Pet::filter(request(['search']))->where('source_id', auth()->id())->where('status','available')->get();
        
        return view('source.allpets')
        ->with('pets', $pets);
    }

    public function viewpetinformation()
    {
        // if (auth()->user()->role != "owner") {
        //     abort(403, 'Unauthorized Action! This page is for property owners only');
        // }

        $petinformations= Petinformation::all();
         return view('admin.viewpetinformation',compact('petinformations'));
    }

    public function petinformation()
    {
        if (auth()->user()->role != "user") {
           abort(403, 'Unauthorized Action! This page is for users only');
        }

        $petinformations= Petinformation::all();
         return view('allpetinfo',compact('petinformations'));
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
       public function petedit(Pet $pet)
       {
           return view('source.pet_edit', ['pet' => $pet]);
       }
       
       public function petupdate(Request $request, Pet $pet)
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
   
           return redirect('/displaypets')->with('message', 'Pet updated successfully');
       }
       //delete property
       public function delete($pet_id)
       {
           $pet = Pet::where('pet_id', $pet_id)->first();
           $pet->delete();
           return redirect('/source_dashboard')->with('message', 'Pet deleted successfully');
       }

       public function addtocart($pet_id){
        $pet=Pet::findOrFail($pet_id);

        $cart = session()->get('cart', []);
 
        if(isset($cart[$pet_id])) {
            $cart[$pet_id]['quantity'];
        }  else {
            $cart[$pet_id] = [
                "pet_name" => $pet->pet_name,
                "pet_image" => $pet->pet_image,
                "price" => $pet->price,
                "source_id" => $pet->source_id,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Pet added to cart successfully!');
    }

    public function cart()
    {
        return view('cart');
    }

    public function updatecart(Request $request)
    {
        if($request->pet_id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->pet_id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('message', 'Cart successfully updated!');
        }
    }
 
    public function removecart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('message', 'Pet successfully removed!');
        }
    }

    public function maps(Request $request)
       {
       
        $source_id = $request->query('source_id');
        $pet_name = $request->query('pet_name');
        $pet_id = $request->query('pet_id');
        $location= Source::where('source_id', $source_id)->value('location');
        $total = $request->query('total');
        
    
           return view('maps.map', compact('location','total','source_id','pet_id'));
           
       }
       
}

