<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;


class ArticleController extends Controller
{
    public function index()
    {
        $articles=Article::all();

        return view("index",["articles"=>$articles]);
    }

    public function create()
    {

        return view("create");
    }

    public function store(Request $request)
    {

        $request->validate([

            'title'=>'required|min:3',
            'body'=>'required|min:3|max:255',
            //'user_id' => 'required'

        ]);


        Article::create(
            $request->all()
        );

    }

    public function show($id)
    {
        $articles=Article::find($id);
        return view("show",["articles"=>$articles]);
    }

    public function edit($id)
    {
        $articles=Article::find($id);
        return view("edit",compact('articles'));
    }

    public function update(Request $request, $id)
    {
        $id = $request->id;

        $this->validate($request, [

            'title' => 'required',
        ],[

            'title.required' =>'enter title',
        ]);

        $sections = Article::find($id);
        $sections->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'body' => $request->body,
        ]);

        session()->flash('edit','   updated');
        return redirect('/article');
    }

    public function destroy($id)
    {
        Article::destroy($id);
    }
}
