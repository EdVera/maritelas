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
      $courses = Course::orderBy('position')->get();
      $products = Product::orderBy('name','ASC')->get();
      $covers = Simage::orderBy('position')->get();
      $articles = Article::all();

      // dd($cover);
      return view('site.welcome')
        ->with('courses',$courses)
        ->with('products',$products)
        ->with('covers',$covers)
        ->with('articles',$articles);
    }

    
    public function blog()
    {
      $articles = Article::all();

      // dd($cover);
      return view('site.blog')
        ->with('articles',$articles);
    }

   
    public function article($slug)
    {
      $article = Article::where('slug','=', $slug)->firstOrFail();
      $article->images;
      return view('site.article')->with('article',$article);
    }

    
    public function correoTest()
    {
        return view('site.emails.contact');
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
