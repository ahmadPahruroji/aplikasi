<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\StatusComplaint;
use App\Complaint;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = Complaint::with('user','statuscomplaint')->get()->sortByDesc('created_at');
        return response()->json($complaints);
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
        $complaint = new Complaint();
        $complaint->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('complaint');
            $complaint->image = $path;    
        }
        $complaint->save();

        return response()->json($complaint);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complaint = Complaint::find($id);

        return response()->json($complaint);
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
        $complaint = Complaint::find($id);
        $complaint->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('complaint');
            $file = Storage::delete($complaint->image);
            $complaint->image = $path;    
        }
        $complaint->update();
             // dd($complaint);
        return response()->json($complaint);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complaint = Complaint::find($id)->delete();
        return response()->json($complaint);
    }
}
