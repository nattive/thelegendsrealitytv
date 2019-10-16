<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $allContestants = Contestant::all();
       return view('admin\list')->with('allContestants', $allContestants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contestant = new Contestant();
        $contestant->name = $request -> name;
        $contestant->gender = $request -> Gender[0];
        $contestant->Occupation = $request -> Occupation;
        $contestant->Hobbies = $request -> Hobbies;
        $contestant->DOB = $request -> DOB;
        $contestant->Nationality = $request -> Nationality;
        $contestant->location = $request -> location;
        $contestant->About = $request -> About;
        $contestant-> votes = 0;
        $image = $request -> photo;
        $imagePath = $image->store('contestant', 'public');
        Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $contestant -> image = $imagePath;
        $contestant -> save();

        //dd($contestant);

        return view('admin.home');
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
    public function update(Request $request)
    {
        $contestant = Contestant::findOrFail($request->id);
        return view('admin.edit')->with('contestant', $contestant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       dd($id);
    }
}
