<?php

namespace App\Http\Controllers\Backend;
use App\Models\House;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function list(){
        $houses=house::all();
        return view('backend.pages.house-info.house', compact('houses'));

    }



    public function create(Request $request)
    {
        // dd('fhbdhbv');
        // dd($request->all());
        //insert into house table
        House::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$request->image,
            'address'=>$request->address,

        ]);
        return redirect()->back();


    }
    
    public function dashboard()
    {
        return view('backend.pages.dashboard.home');
    }

}
