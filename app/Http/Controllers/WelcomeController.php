<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    //
     public function show(){
       $info = DB::table('books')
            ->join('author', 'books.author_id', '=', 'author.id')
            ->select('books.*', 'author.name as authorname','author.second_name','author.last_name','author.date_birth')
            ->get();
        return view('welcome',["info"=>$info]);
    }
}
