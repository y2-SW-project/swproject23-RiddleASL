<?php

namespace App\Http\Controllers\User;

use App\Models\Word;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::all();

        return view('user.words.index', ['words' => $words]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        $return = DB::table('word_sign')->where('word_id',$word->id)->get();
        $get = [];

        foreach ($return as $item) {
            array_push($get, (DB::table('signs')->where('id',$item->sign_id)->get())[0]);
        }

        $signs = array_values($get);
        return view('user.words.show', ['return' => $return, 'signs'=>$signs, 'word' => $word]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {

    }
}
