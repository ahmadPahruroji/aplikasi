<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Member;
use App\Coordinator;

class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["coordinators"] = Coordinator::with('user','member')->get();
        return view('coordinator.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["users"] = User::get();
        $data["members"] = Member::get();
       return view('coordinator.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coordinator = new Coordinator;
        $coordinator->fill($request->all());
        // $biodata->user_id = Auth::user()->id;
        $coordinator->save();

        return redirect()->route('coordinators.index',$coordinator);
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
        $data['coordinators'] = Coordinator::find($id);
        $data['members'] = Member::get();
        
        return view('coordinator.edit', $data);
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
        $coordinator = Coordinator::find($id);
        $coordinator->fill($request->all());
        $coordinator->update();

        return redirect()->route('coordinators.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Coordinator::find($id)->delete();
        return response()->json($data);
    }
}
