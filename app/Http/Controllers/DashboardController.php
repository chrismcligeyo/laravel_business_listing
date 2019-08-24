<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //pull out authorised user_id
        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        $listings = $user->listings;
        return view('dashboard',compact('listings'));
    }
}
