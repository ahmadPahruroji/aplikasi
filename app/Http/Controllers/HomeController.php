<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Biodata;
use App\Money;
use App\Countribution;
use App\Member;
use App\Officer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["login"] = request()->login ?? "false";
        $total["countributions"] = Countribution::sum('money');
        // $data["countributions"] = Countribution::with('money')->get();
        $data["members"] = Member::get();
        $data["officers"] = Officer::get();
        $data["users"] = User::get();
        $name['users'] = User::with('biodata')->find(Auth::user()->id);
        return view('home',$total,$data,$name);
    }
}
