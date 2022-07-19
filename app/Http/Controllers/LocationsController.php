<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Location;
use DB;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $loc = Location::get()->all();
        return view('locations.index',compact('loc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = city::get()->all();
        return view('locations.create',compact('city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        try {
            $this->validate($request,[
                'city_id',
                'location'
               ]);

               $loc = new Location;
               $loc->city_id = $request->input('city_id');
               $loc->location = $request->input('location');
               $loc->save();
            //    return view('locations.index');

            return redirect()->back()
                ->with('success','Location Created successfully');
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error',$exception->getMessage());
        }

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
        $loc = Location::find($id);
        $city = City::get()->all();
        // dd($city);

        // dd($loc);
        return view('locations.edit',compact('loc','city'));
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

           try {
            $this->validate($request,[
                'city_id',
                'location'
               ]);

               $loc = Location::find($id);
               $loc->city_id = $request->input('city_id');
               $loc->location = $request->input('location');
               $loc->save();
            //    return view('locations.index');

            return redirect()->route('locations.index')
                ->with('success','Location updated successfully');
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error','Please Select the City');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            DB::table('locations')->where('id',$id)->delete();
            {
                return redirect()->route('locations.index')
                ->with('success','Row Deleted Successfully');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error',$exception->getMessage());
        }
    }

}
