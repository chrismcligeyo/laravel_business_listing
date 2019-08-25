<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createlistings');
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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email' // means email must be email
        ]);


        $user = Auth::user();
        $listings = new Listing();

        $listings->name = $request->input('name');
        $listings->email = $request->input('email');
        $listings->website = $request->input('website');
        $listings->phone = $request->input('phone');
        $listings->address = $request->input('address');
        $listings->bio = $request->input('bio');
        $listings->user_id = $user->id; //listings has a userId field. Listings user_id field equated to authorizaed user id

        $listings->save();

        $request->session()->flash('success', 'Listing Added');
        return redirect('dashboard');




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

        $listings = Listing::findOrFail($id);
        return view('editlistings',compact('listings'));

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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email' // means email must be email
        ]);


        $input = $request->all();
//        $user = Auth::user();
       $listings = Listing::find($id);

//        $listings->name = $request->input('name');
//        $listings->email = $request->input('email');
//        $listings->website = $request->input('website');
//        $listings->phone = $request->input('phone');
//        $listings->address = $request->input('address');
//        $listings->bio = $request->input('bio');
//        $listings->user_id = $user->id; //listings has a userId field. Listings user_id field equated to authorizaed user id
//
//        $listings->save();

        $listings->update($input);


        $request->session()->flash('success', 'Listing Updated');
        return redirect('dashboard');

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
        $listings = Listing::findOrFail($id);

        $listings->delete();
        session()->flash('success', 'Listing Deleted');
        return redirect('dashboard');
    }
}
