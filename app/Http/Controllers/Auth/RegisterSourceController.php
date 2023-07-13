<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sourceapplicant;
use App\Models\Source;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class RegisterSourceController extends Controller
{
    public function create()
    {
        
         return view('source.sourceregistration');
    }

    public function show()
    {
        // if (auth()->user()->role != "owner") {
        //     abort(403, 'Unauthorized Action! This page is for property owners only');
        // }

        $sourceapplicants= Sourceapplicant::all();
         return view('admin.basictable',compact('sourceapplicants'));
    }
    
    public function deny($sourceapplicant){

        $del = Sourceapplicant::where('id', $sourceapplicant)->first();
        $del->delete();
        return redirect('/adminsourceapplicants')->with('message', 'Applicant deleted successfully');

    }
        
    public function stores(Request $request)
    {
        $data = $request->validate([            
        'source_name' => 'required',
        'location' => 'required',
        'source_type' => 'required',
        'source_description' => 'required',
        'email' => 'required',
        'password' => 'required',
        
        

        ]);

        if ($request->hasFile('source_image')) {
        $data['source_image'] = $request->file('source_image')->store('Source', 'public');
        }

        if ($request->hasFile('source_certification')) {
            $data['source_certification'] = $request->file('source_certification')->store('Source', 'public');
            }
        

      

        Sourceapplicant::create($data);

        return redirect('/')->with('message', 'Application submitted successfully');
    }//store pet information
        public function store($sourceapplicant)
        {
            $data= Sourceapplicant::where('id', $sourceapplicant)->first();
            
            $user = User::create([
                'password' =>$data->password,
                'email'=> $data->email,
                'name' => $data->source_name,
                'role' => 'source',
            ]);
            

            $load= User::where('name', $data->source_name)->first();
            

            $source = Source::create([
                'source_id' => $load->id,
                'source_name' => $data->source_name,
                'location'=> $data->location,
                'source_type' => $data->source_type,
                'source_description' =>$data->source_description,
                'source_certification' => $data->source_certification,
                'source_image' => $data->source_image,
                // 'email' => $sourceapplicant->id,
                // 'password' => $sourceapplicant->id,
                
                //'phonenumber'=> $Socialuser->phonenumber,
               
            ]);

            $del = Sourceapplicant::where('id', $sourceapplicant)->first();
            $del->delete();
            
            $user->sendEmailVerificationNotification();
            Auth::login($user);    
        
    
        
    return redirect('/adminsourceapplicants')->with('message', 'Applicant accepted successfully');
    
        }
    
}
