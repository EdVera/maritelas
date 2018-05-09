<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name','ASC')->get();
        return view('admin.products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $imgname = 'maritelas' . time() . '.' . $file->getClientOriginalExtension();
          $path = public_path() . '/img/products/';
          $file->move($path, $imgname);
          $wp = "Me%20gustaría%20saber%20más%20acerca%20de%20sus%20".$request->name;
          $product = new Product;
          $product->name = $request->name;
          $product->description = $request->description;
          $product->whatsapp = "https://api.whatsapp.com/send?phone=524423773581&text=".$wp;
          $product->image = $imgname;
          $product->save();
        }

        return redirect()->route('products.index');
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
      $product = Product::find($id);
      return view('admin.products.edit')->with('product',$product);
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
      $product = Product::find($id);
      $wp = "Me%20gustaría%20saber%20más%20acerca%20de%20sus%20".$request->name;
      $product->name = $request->name;
      $product->description = $request->description;
      $product->whatsapp = "https://api.whatsapp.com/send?phone=524423773581&text=".$wp;
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imgname = 'maritelas' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/img/products/';
        $file->move($path, $imgname);
        $product->image = $imgname;
      }
      $product->save();
      return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
