<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(!auth()->user()->isAdmin){
        //     return to_route('user.words.index');
        // } else {
        //     return to_route('admin.words.index');
        // }
    
        return to_route('admin.words.index');
    }
}
