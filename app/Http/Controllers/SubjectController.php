<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Subject;
use DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subj = Subject::get()->all();
       return view('subjects.index',compact('subj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lvls = Level::get();
        return view('subjects.create',compact('lvls'));

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

        try {

            $data = $request->validate([
                "level_id" => 'required',
                "subject" => 'required',
            ]);
            // dd($data);
            $data = new Subject;
            $data->level_id = $request->input('level_id');
            $data->subject = $request->input('subject');
            $data->save();

            return redirect()->route('subjects.index')
                ->with('success','subjects created successfully');
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
        $subj = Subject::find($id);
        $lvls = Level::get();
        return view('subjects.edit',compact('subj','lvls'));
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
        // dd($request);
        try {

            $data = $request->validate([
                "level_id" => 'required',
                "subject" => 'required',
            ]);
            // dd($data);
            $data = Subject::find($id);
            $data->level_id = $request->input('level_id');
            $data->subject = $request->input('subject');
            $data->save();

            return redirect()->route('subjects.index')
                ->with('success','subjects Updated successfully');
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error','Please select The Input Field');
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
            DB::table('subjects')->where('id',$id)->delete();
            {
                return redirect()->route('subjects.index')
                ->with('success','Row Deleted Successfully');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error',$exception->getMessage());
        }
    }
}
