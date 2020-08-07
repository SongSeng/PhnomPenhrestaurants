<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Restaurant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Images;
use Image;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexhome()
    {
        $restaurants = DB::select('select * from restaurants');
        return view('home',['restaurants'=>$restaurants]);
    }
    public function index()
    {
        $restaurants = DB::select('select * from restaurants');
        return view('admin/restaurant_list',['restaurants'=>$restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'restaurant_name' => 'required', 'string',
            'restaurant_type' => 'required', 'string',
            'restaurant_location' => 'required',
            'restaurant_rating' =>'required', 'int',
            'restaurant_decription' =>'required'
        ]);  
        Restaurant::create([
            
            'restaurant_name'           =>  $request->get('restaurant_name'),
            'restaurant_type'           =>  $request->get('restaurant_type'),
            'restaurant_location'       =>  $request->get('restaurant_location'),
            'restaurant_rating'         =>  $request->get('restaurant_rating'),
            'restaurant_decription'     =>  $request->get('restaurant_decription'),
            ]);
            return redirect('/admin/restaurantList');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('admin.edit', compact('restaurant', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'restaurant_name' => ['required', 'string'],
            'restaurant_type' => ['required', 'string'],
            'restaurant_location' => ['required'],
            'restaurant_rating' =>['required'],
            'restaurant_decription' =>['required']
        ]);
            $restaurant = Restaurant::find($id);
            $restaurant->restaurant_name =  $request->get('restaurant_name');
            $restaurant->restaurant_type  =  $request->get('restaurant_type');
            $restaurant->restaurant_location =  $request->get('restaurant_location');
            $restaurant->restaurant_rating =  $request->get('restaurant_rating');
            $restaurant->restaurant_decription  =  $request->get('restaurant_decription');
            $restaurant->save();
            return redirect('/admin/restaurantList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        if ( $restaurant != null) {
        $restaurant->delete();
        }
        return redirect('/admin/restaurantList')->with('success', 'Data Deleted');
    }
}
