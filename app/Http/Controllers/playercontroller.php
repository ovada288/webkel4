<?php

namespace App\Http\Controllers;

use App\Models\TeamProfile;
use Illuminate\Http\Request;

class playercontroller extends Controller
{
    public function index(){
        //ambil data dari database
        $TeamProfiles = TeamProfile::all();

        //kirim data ke view
        return view('player',compact('TeamProfile'));
    }
}