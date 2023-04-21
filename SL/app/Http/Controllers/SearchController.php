<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->ajax()){
            $output="";
            $words= DB::table('words')->where('word','LIKE','%'.$request->search."%")->paginate(8)->sortBy('word');
            if($words){
                foreach ($words as $key => $word) {
                    if($word->show == 1){
                        $info = '';
                        if(strlen($word->info) > 20){
                            $info = substr($word->info, 0,20).'...';
                        } else{
                            $info = $word->info;
                        }
                        $output.='<tr>'.
                        '<td> <a href='.route('words.show', $word->id).' class="text-white text-decoration-none fs-5" data-id='.$word->id.'>'.$word->word.'</a> <span class="text-bg-l fs-5"> - '.$info.'</span></td>'.
                        '</tr>';
                    }
                }
                
                return Response($output);
            }
        }
    }

    public function result(Request $request)
    {
        if($request->ajax()){
            $output="";
            $link = DB::table('words')->where('word','LIKE','%'.$request->search."%")->paginate(8)->sortBy('word');
            // if($words){
            //     foreach ($words as $key => $word) {
            //     $output.='<tr>'.
            //     '<td> <a href='.route('words.show', $word->id).' class="text-white text-decoration-none fs-5">'.$word->word.'</a> <span class="text-bg-l fs-5"> - '.$word->info.'</span></td>'.
            //     '</tr>';
            //     }
            //     return Response($output);
            // }
            return Response('<p>aasda</p>');
        }
    }
}

