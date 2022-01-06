<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class LandingController extends Controller
{
    // public function index(Request $request)
    // {
    //     return view('landing.landing');
    // }

    // public function index()
    // {
    //     $articles = Article::orderBy('id','desc')->paginate(6);
    //     return view('landing.main',compact('articles'));
    // }

    // public function show($slug)
    // {
    //     $article = Article::where('slug',$slug)->first();

    //      if($article == null)
    //      abort(404);

    //     return view('landing.nav',compact('article'));
    // }

    // public function create()
    // {
    //     return view('landing.create');
    // }

    // public function store(Request $request)
    // {

    //     $validatedData = $request->validate([
    //     'title' => 'required|min:3|max:255',
    //     'subject' => 'required|min:3',
    //     ]);

    //     // $article = new Article;
    //     // $article->title = $request->title;
    //     // $article->subject = $request->subject;
    //     // $article->save();
        
    //     Article::create([
    //         'title' => $request->title,
    //         'slug' => str::slug($request->title,'-'),
    //         'subject' => $request->subject
    //     ]);
    //     return redirect('/artikel');
    // }

    // public function edit($id)
    // {
    //     $article = Article::find($id);
    //     return view('landing.edit',compact('article'));
    // }

    // public function update(Request $request, $id)
    // {
    //     Article::find($id)->update([
    //         'title' => $request->title,
    //         'subject' => $request->subject
    //     ]);
       

    //     return redirect('/artikel');
    // }

    // public function destroy($id)
    // {
    //     Article::find($id)->delete();
    //     return redirect('/artikel');
    
    // }

}
