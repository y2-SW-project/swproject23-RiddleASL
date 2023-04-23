<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        if(Auth::check()){
            if(Auth::user()->isAdmin){
                return view('admin.signs.create', ['word'=>$request->word_id]);
            } else {
                abort('403');
            }
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $video = $request->input('video');
        $embed = substr($video, strpos($video, '=')+1, strlen($video));

        Sign::create([
            'video' => $embed,
            'definition' => $request->input('definition'),
            'pronunciation' => $request->input('pronunciation'),
            'extra' => $request->input('extra'),
        ]);

        $sign_id = Sign::orderBy('id', 'desc')->first()->id;
        $word_id = $request->word_id;

        DB::insert('insert into word_sign values (?, ?, ?)', [null, $word_id,$sign_id]);

        return to_route('words.show', $word_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sign $sign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sign $sign)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin){
                return view('admin.signs.edit', ['sign' => $sign]);
            } else {
                abort('403');
            }
        }


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sign $sign)
    {
        $video = $request->input('video');
        $embed = substr($video, strpos($video, '=')+1, strlen($video));

        $sign->update([
            'video' => $embed,
            'definition' => $request->input('definition'),
            'pronunciation' => $request->input('pronunciation'),
            'extra' => $request->input('extra'),
        ]);

        return to_route('words.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sign $sign)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin){
                $sign->delete();
                return redirect()->back();
            } else {
                abort('403');
            }
        }

    }
}
