<?php

namespace App\Http\Controllers\Coordinator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Biodata;
use App\Member;
use App\Money;
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
        $data["countributions"] = Countribution::with('user','member','money','payment','status')->get();
         $name["user"] = User::with('biodata')->find(Auth::user()->id);
        // dd($data);
        return view('admincoordinator/countribution.index', $data, $name);
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
        $data["money"] = Money::get();
        $data["payments"] = Payment::get();
        $data["statuses"] = Status::get();
       return view('admincoordinator/countribution.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $countribution = new Countribution;
        $countribution->fill($request['countribution']);
        // $biodata->user_id = Auth::user()->id;
        $countribution->save();

        return redirect()->route('countributionuser.index', $countribution);
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
        $data["users"] = User::find(Auth::user()->id);
        $data["countributions"] = Countribution::find($id);
        $data["members"] = Member::get();
        $data["payments"] = Payment::get();
        $data["statuses"] = Status::get();
       return view('admincoordinator/countribution.edit', $data);
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
        $countribution->fill($request['countribution']);
        $countribution->update();

        return redirect()->route('countributionuser.index');
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
