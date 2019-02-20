<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $data['complaints'] = Complaint::with('user','statuscomplaint')->get()->sortByDesc('created_at');
        return view('complaint.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data["users"] = User::get();
         $data["status_complaints"] = StatusComplaint::get();
        return view('complaint.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $complaint = new Complaint();
        $complaint->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('complaint');
            $complaint->image = $path;    
        }
        $complaint->save();

        return redirect('complaints');
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
        $data['complaints'] = Complaint::find($id);
        $data["status_complaints"] = StatusComplaint::get();
       return view('complaint.edit',$data);
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
        $complaint = Complaint::find($id);
        $complaint->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('complaint');
            $file = Storage::delete($complaint->image);
            $complaint->image = $path;    
        }
        $complaint->update();
             // dd($productimage);
        return redirect('complaints');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Complaint::find($id)->delete();
        return response()->json($data);
    }
}
