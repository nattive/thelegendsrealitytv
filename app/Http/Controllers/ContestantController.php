<?php

namespace App\Http\Controllers;

use App\Contestant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContestantController extends Controller
{
    public function index($id)
    {
        $contestant = Contestant::findOrFail($id);
        return view('Profile')->with('contestant', $contestant);
    }
}
