<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\level;
use DB;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = level::all();
        return view('levels.index',compact('level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        // dd($category);
        return view('levels.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ]);
        
        $level = new level;
        
        $level->category_id = $request->input('category_id');
        $level->level = $request->input('name');
        $level->save();
        // dd($level);
        
        return redirect()->route('levels.index');
                // return view('category.edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $levels = level::find($id);
        $categories = Category::pluck('name','id');
        return view('levels.edit',compact('levels','categories'));
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
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ]);
        
        $level =  level::find($id);
        
        $level->category_id = $request->input('category_id');
        $level->level = $request->input('name');
        $level->save();
        // dd($request);

        return redirect()->route('levels.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('levels')->where('id',$id)->delete();
        return redirect()->route('levels.index');
    }
}
