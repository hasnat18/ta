<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mode;
use DB;

class ModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mode = Mode::get()->all();
        // dd($mode);
        return view('tuition-mode.index',compact('mode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tuition-mode.create');
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
            $validated = $request->validate([
                'mode' => 'required',
            ]);
            // dd($validated);  
            $mode = new Mode;
        
            $mode->mode = $request->input('mode');
            $mode->save();
            {
                return redirect()->route('modes.index')
                ->with('success','Mode Created successfully');
            }
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
        $mode = Mode::find($id);
       return view('tuition-mode.edit',compact('mode'));
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
        // dd($id);
        try {
            $validated = $request->validate([
                'mode' => 'required',
            ]);
            // dd($validated);  
            $mode = Mode::find($id);
            $mode->mode = $request->input('mode');
            $mode->save();
            {
                return redirect()->route('modes.index')
                ->with('success','Mode Updated successfully');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error',$exception->getMessage());
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
            DB::table('modes')->where('id',$id)->delete();
            {
                return redirect()->route('modes.index')
                ->with('success','Row Deleted Successfully');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error',$exception->getMessage());
        }
    }
}
