<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Article;
use App\Course;
use App\Simage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $courses = Course::all();
      $products = Product::orderBy('name','ASC')->get();
      $covers = Simage::all();
      $articles = Article::all();

      // dd($cover);
      return view('site.welcome')
        ->with('courses',$courses)
        ->with('products',$products)
        ->with('covers',$covers)
        ->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
      $articles = Article::all();

      // dd($cover);
      return view('site.blog')
        ->with('articles',$articles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function article($slug)
    {
      $article = Article::where('slug','=', $slug)->firstOrFail();
      $article->images;
      return view('site.article')->with('article',$article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
