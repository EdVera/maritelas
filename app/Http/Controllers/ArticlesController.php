<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\ArticleImage;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $aux = 0;

      $article = new Article($request->all());

      if ($request->hasFile('cover')) {
        $name = 'maritelas_'. $aux . time() . '.' . $request->cover->getClientOriginalExtension();
        $path = public_path() . '/img/articles/';
        $request->cover->move($path, $name);
        $article->image = $name;
      }

      $article->save();

      if ($request->hasFile('images')) {
        foreach ($request->images as $file) {
          //$file = $request->file('image');
          $aux++;
          $name = 'maritelas_'. $aux . time() . '.' . $file->getClientOriginalExtension();
          $path = public_path() . '/img/articles/';
          $file->move($path, $name);

          $img = new ArticleImage();
          $img->name = $name;
          $img->article_id=$article->id;
          $img->save();
        }
      }

      return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $article = Article::find($id);
      return view('admin.articles.edit')->with("article",$article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $aux = 0;

      $article = Article::find($id);
      $article->title = $request->title;
      $article->description = $request->description;
      $article->text = $request->text;
      $article->video = $request->video;

      if ($request->hasFile('cover')) {
        $name = 'maritelas_'. $aux . time() . '.' . $request->cover->getClientOriginalExtension();
        $path = public_path() . '/img/articles/';
        $request->cover->move($path, $name);
        $article->image = $name;
      }

      $article->save();

      if ($request->hasFile('images')) {
        foreach ($request->images as $file) {
          //$file = $request->file('image');
          $aux++;
          $name = 'maritelas_'. $aux . time() . '.' . $file->getClientOriginalExtension();
          $path = public_path() . '/img/articles/';
          $file->move($path, $name);

          $img = new ArticleImage();
          $img->name = $name;
          $img->article_id=$article->id;
          $img->save();
        }
      }

      return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article =Article::find($id);
        $article->delete();

        return redirect()->route('articles.index');

    }
}
