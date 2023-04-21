<?php

namespace App\Http\Controllers\Admin;

use stdClass;
use App\Models\User;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::all();
        $signsAll = DB::table('signs')->get();
        $rndNum = null;
        $sign = null;

        if(!$signsAll->isEmpty()){
            $rndNum = rand(0,count($signsAll)-1);
            $sign = $signsAll[$rndNum];
        }

        return view('admin.words.index', ['words' => $words, 'sign' => $sign]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.words.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $show = 0;
        if(!empty($request->input('show'))){
            $show = 1;
        }

        $request->validate([
            'word'=>['required'],
            'info' => ['nullable']
        ]);

        Word::create([
            'word' => $request->input('word'),
            'info' => $request->input('info'),
            'show' => $show
        ]);

        $word_id = Word::orderBy('id', 'desc')->first()->id;
        DB::insert('insert into word_user values (?, ?, ?)', [null, $word_id, $id]);

        return to_route('words.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {


        if($word-> show == 1){
            $return = DB::table('word_sign')->where('word_id',$word->id)->get();
            $get = [];
    
            $user_id = DB::table('word_user')->where('word_id', $word->id)->pluck('user_id');
            $user = DB::table('users')->where('id', $user_id[0])->get();
    
            foreach ($return as $item) {
                array_push($get, (DB::table('signs')->where('id',$item->sign_id)->get())[0]);
            }
    
            $signs = array_values($get);
            return view('admin.words.show', ['return' => $return, 'signs'=>$signs, 'word' => $word, 'user'=>$user[0]]);
        } else {
            abort('403');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin){
                return view('admin.words.edit', ['word'=>$word]);
            } else {
                abort('403');
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin){
                $show = 1;
                if(!empty($request->input('show'))){
                    $show = 1;
                }

                $request->validate([
                    'word'=>'required',
                    'info'=>'nullable',
                ]);
        
                $word->update([
                    'word' => $request->input('word'),
                    'info' => $request->input('info'),
                    'show' => $show
                ]);
        
                
                return to_route('words.index');
            } else {
                abort('403');
            }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return to_route('words.index');
    }
}
