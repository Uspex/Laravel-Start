<?php

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('client.dashboard');
    }
}
