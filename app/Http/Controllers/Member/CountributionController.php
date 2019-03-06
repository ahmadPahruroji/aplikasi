<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Member;
use App\Payment;
use App\Status;
use App\Countribution;

class CountributionController extends Controller
{
    /**
     * Display a listging of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["countributions"] = Countribution::with('member','payment','status')->get();
        return view('adminmember/countribution.index', $data);

        //         $data["countributions"] = Countribution::with('member','payment','status')->where('user_id',Auth::user()->id)->get();
        //  $name["user"] = User::with('biodata')->find(Auth::user()->id);
        // // dd($data);
        // return view('admincoordinator/countribution.index', $data, $name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
