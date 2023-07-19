<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use Carbon\Carbon;
class FilterController extends Controller
{
    public function index(Request $request){

        if (auth()->user()->role != "user") {
            abort(403, 'Unauthorized Action! This page is for users only');
         }
        
        $pets=Pet::all()->where('status','available');
        $query= Pet::query()->where('status','available');

        if(isset($request->breed) && ($request->breed != null)) {
            $query->where ('breed',$request->breed);
        }

        
        if(isset($request->pet_type) && ($request->pet_type != null)) {
            $query->where ('pet_type',$request->pet_type);
        }

         
        if(isset($request->pet_gender) && ($request->pet_gender != null)) {
            $query->where ('pet_gender',$request->pet_gender);
        }

         
        if(isset($request->pet_type1) && ($request->pet_type1 != null)) {
            $query->where ('pet_type',$request->pet_type1);
        }

         
        if(isset($request->pet_gender1) && ($request->pet_gender1 != null)) {
            $query->where ('pet_gender',$request->pet_gender1);
        }
            //Filter for foreign key relation
        // if(isset($request->category) && ($request->category != null)) {
        //     $query->whereHas ('category', function($q) use ($request){
        //         $q->whereIn('id',$request->category);
        //     });
        // }

        //Filter for max and min
        // if(isset($request->min) && ($request->min != null)) {
        //     $query->where ('price', '>=',$request->min);
        // }

        // if(isset($request->max) && ($request->max != null)) {
        //     $query->where ('price', '>=',$request->max);
        // }



        $pets= $query->get(); 
        
        return view ('allpetsforadoption',compact('pets'));
    }

    public function chart(){
$data=User::select('id','created_at')->get()->groupBy(function($data){
return Carbon::parse($data->created_at)->format('M');

});

$months=[];
$monthCount=[];

foreach($data as $month => $values){
$months[]=$month;
$monthCount[]=count($values);
}
return view('maps.chart',['data' => $data,'months'=>$months,'monthCount'=>$monthCount]);
    }
}
