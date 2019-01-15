<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Member;
use App\Payment;
use App\Status;
use App\Countribution;

class CountributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["countributions"] = Countribution::with('member','payment','status')->get();
        return view('countribution.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["members"] = Member::get();
        $data["payments"] = Payment::get();
        $data["statuses"] = Status::get();
       return view('countribution.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countribution = new Countribution;
        $countribution->fill($request->all());
        // $biodata->user_id = Auth::user()->id;
        $countribution->save();

        return redirect()->route('countributions.index', $countribution);
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
        $data["countributions"] = Countribution::find($id);
        $data["members"] = Member::get();
        $data["payments"] = Payment::get();
        $data["statuses"] = Status::get();
       return view('countribution.edit', $data);
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
        $countribution = Countribution::find($id);
        $countribution->fill($request->all());
        $countribution->update();

        return redirect()->route('countributions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Countribution::find($id)->delete();
        return response()->json($data);
    }
}
