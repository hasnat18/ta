<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classified;
use DB;


class classifiedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::get()->all();
        return view('classifieds.index',compact('classifieds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('classifieds.create');
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
            $this->validate($request, [
                'title' => 'required',
                'contact' => 'required',
                'bname' => 'nullable',
                'cnic' => 'required',
                'web' => 'nullable',
                'category' => 'required',
                'description' => 'nullable',
                'start_date' => 'nullable',
                'end_date' => 'nullable',
                'status' => 'nullable',
            ]);
            $c = new Classified;
            $c->title = $request->title;
            $c->contact = $request->contact;
            $c->bname = $request->bname;
            $c->cnic = $request->cnic;
            $c->web = $request->web;
            $c->category = $request->category;
            $c->description = $request->description;
            $c->start_date = $request->start_date;
            $c->end_date = $request->end_date;
            $c->status = 'ACTIVE';
    
            if($request->image != null)
            {
                $imageName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('upload_image'), $imageName);
                $c->image = $imageName;
            }
            if($c->save())
            {
                return redirect()->route('classifieds.index')
                ->with('success','Classified Created successfully');
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
        $data = Classified::find($id);
        return view('classifieds.edit',compact('data'));
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
            $this->validate($request, [
                'title' => 'required',
                'contact' => 'required',
                'bname' => 'nullable',
                'cnic' => 'required',
                'web' => 'nullable',
                'category' => 'required',
                'description' => 'nullable',
                'start_date' => 'nullable',
                'end_date' => 'nullable',
                'status' => 'nullable',
            ]);
            $c = Classified::find($id);
            $c->title = $request->title;
            $c->contact = $request->contact;
            $c->bname = $request->bname;
            $c->cnic = $request->cnic;
            $c->web = $request->web;
            $c->category = $request->category;
            $c->description = $request->description;
            $c->start_date = $request->start_date;
            $c->end_date = $request->end_date;
            $c->status = 'ACTIVE';
    
            if($request->image != null)
            {
                $imageName = time().'.'.$request->image->extension();  
                $request->image->move(public_path('upload_image'), $imageName);
                $c->image = $imageName;
            }
            if($c->save())
            {
                return redirect()->route('classifieds.index')
                ->with('success','Classified Updated successfully');
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
            DB::table('classifieds')->where('id',$id)->delete();
            {
                return redirect()->route('classifieds.index')
                ->with('success','Row Deleted Successfully');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()
                ->with('error',$exception->getMessage());
        }

    }
}
