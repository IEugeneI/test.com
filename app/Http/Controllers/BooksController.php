<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Book;
use App\Author;
class BooksController extends Controller
{
    //

    public function __construct()
{
    $this->middleware('auth');
}
    public function show(){
    	$author=Author::all();
    	foreach ($author as $key ) {
		$k[$key->id]="$key->name $key->second_name  $key->last_name";
		}
    	return view('adminpanell.addedbook',["author"=>$k]);
    }

    public function added(Request $request){
    	if ($request->isMethod('post')) {
	    $book = new Book;
                $book->name = $request->input('name');
                $book->publish_year = $request->input('year');
                $book->genre = $request->input('genre');       
                $book->author_id = $request->input('author');  
                $book->save();
                $status="Книга добавленна , все хорошо :)";
  		$author=Author::all();
    		foreach ($author as $key ) {
				$k[$key->id]="$key->name $key->second_name  $key->last_name";
				}
    		return view('adminpanell/addedbook',["author"=>$k,"status"=>$status]);
   

		}
    }


    public function update(Request $request){
    	$authors=Author::all();
    	if ($request->isMethod('post')) {
    		$books = Book::find($request->input('id'));
    		$books->name=$request->input('name');
    		$books->publish_year=$request->input('year');
    		$books->genre=$request->input('genre');
    		foreach ($authors as $key) {
    			$authorfio="$key->name $key->second_name $key->last_name";
    			if($authorfio==$request->input('author')){
    				$books->author_id=$key->id;
    			}
    		}
    		$books->save();
    		$allbooks=Book::all();
    		return view('adminpanell.updatebook',["books"=>$allbooks,"authors"=>$authors]);
    	}
    	$books=Book::all();
    	return view('adminpanell.updatebook',["books"=>$books,"authors"=>$authors]);
    }

    public function delete(Request $request){
    	$authors=Author::all();
    	if ($request->isMethod('post')) {
    		$book = Book::find($request->input('id'));
    		$book->delete();
    		$books=Book::all();
    	
    	return view('adminpanell.deletebook',["books"=>$books,"authors"=>$authors]);
    	}


    	$books=Book::all();
    	
    	return view('adminpanell.deletebook',["books"=>$books,"authors"=>$authors]);
    
    }
}
