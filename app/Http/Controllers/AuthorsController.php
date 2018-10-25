<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use URL;
class AuthorsController extends Controller
{
    //
    public function __construct(){

    	$this->middleware('auth');
	}

	public function show(){
		return view('adminpanell.addauthor');
	}

	public function added(Request $request){
		if ($request->isMethod('post')) {
			 $author = new Author;
			 $author->name=$request->input('name');
			 $author->second_name=$request->input('second_name');
			 $author->last_name=$request->input('last_name');
			 $author->date_birth=$request->input('date');
			 $author->save();
			 $status="Автор добавлен , все хорошо :)";
			 return view('adminpanell.addauthor',["status"=>$status]);
		}
	}

	public function update(Request $request){
		if ($request->isMethod('post')) {
			$authors = Author::find($request->input('id'));
			$authors->name=$request->input('name');
			$authors->second_name=$request->input('second_name');
			$authors->last_name=$request->input('last_name');
			$authors->date_birth=$request->input('datebirth');
			$authors->save();
			$url=URL::to('/');
			return redirect($url.'/admin/updateauthor');
		}
		$authors=Author::all();
		return view('adminpanell.updateauthor',["authors"=>$authors]);
	}

	public function showupdateform($id){
		$authors=Author::find($id);
		return view('adminpanell.updateauthorform',["authors"=>$authors]);
	}

	public function deleteform(){
		$authors=Author::all();
		return view('adminpanell.deleteauthor',["authors"=>$authors]);
	}

	public function delete($id,Request $request){
		if ($request->isMethod('get')) {
			$authors=Author::find($id);
			$authors->delete();
			$url=URL::to('/');
			return redirect($url.'/admin/deleteauthor');

		}
		
	}
}
