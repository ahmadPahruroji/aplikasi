<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Officer;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers = Officer::get();
        return response()->json($officers);
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
        $officer = new Officer();
        $officer->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('foto');
            $officer->image = $path;    
        }
        $officer->save();

        return response()->json($officer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $officer = Officer::find($id);

        return response()->json($officer);
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
        $officer = Officer::find($id);
        $officer->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('foto');
            $file = Storage::delete($officer->image);
            $officer->image = $path;    
        }
        $officer->update();
             // dd($officer);
        return response()->json($officer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officer = Officer::find($id)->delete();
        return response()->json($officer);
    }
}
