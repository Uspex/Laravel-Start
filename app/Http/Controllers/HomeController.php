<?php

namespace App\Http\Controllers;

use App\Services\MetaServices;

class HomeController extends Controller
{

    /**
     * @var MetaServices
     */
    private $meta;

    public function __construct()
    {
        $this->meta = app(MetaServices::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $meta = $this->meta->getMeta('homepage');

        return view('homepage', compact('meta'));
    }
}
