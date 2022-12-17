<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //
    public function index()
    {
        // dd('tees');
        return view('dashboard.index');
    }


}
