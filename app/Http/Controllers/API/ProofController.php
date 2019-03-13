<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Proof;

class ProofController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proofs = Proof::get()->sortByDesc('created_at');
        return response()->json($proofs);
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
        $proof = new Proof();
        $proof->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('proof');
            $proof->image = $path;    
        }
        $proof->save();

        return response()->json($proof);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proof = Proof::find($id);

        return response()->json($proof);
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
        $proof = Proof::find($id);
        $proof->fill($request->all());
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('proof');
            $file = Storage::delete($proof->image);
            $proof->image = $path;    
        }
        $proof->update();
             // dd($proof);
        return response()->json($proof);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proof = Proof::find($id)->delete();
        return response()->json($proof);
    }
}
