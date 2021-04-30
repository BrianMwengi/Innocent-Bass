<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class ProductsController extends Controller
{
    public function index() {

     $products = Product::orderBy('id', 'DESC');
     return view('admin.products.index', compact('products')); 

    }

    public function show($id) {

    $products = Product::all();
    return view('admin.products.index', compact('products'));

    }

    public function create()
    { 
        $products = Product::orderBy('name', 'ASC')->pluck('name', 'id','video');
        return view('admin.products.create', compact('products'));
    }

    public function store(Request $request)
    {   
        $this->validate($request, [
            "thumbnail" => 'required',
            "name" => 'required',
            "price" => 'required|unique:products',
            "video" => 'required',
        ],

        [
            'thumbnail.required' => 'Enter thumbnail url',
            'name.required' => 'Enter product name',
            'price.required' => 'Enter product price',
            'video.required' => 'Enter video format',
            'title.unique' => 'Title already exist',
        ]       
    );
            
            $product = new  Product();
            $product->user_id = Auth::id();
            $product->thumbnail = $request->thumbnail;
            $product->name = $request->name;
            $product->price = $request->price;

        // Upload Video
        if($request->hasFile('video')){
            $video_tmp = $request->file('video');
            $video_name = $video_tmp->getClientOriginalName();
            $video_path = 'videos/';
            $video_tmp->move($video_path,$video_name);
            $product->video = $video_name;
        }
            $product->save();
       
        Session::flash('message', 'Product created successfully');

        return redirect()->route('products.index');
    }
    
    public function edit(Product $product)
    {
        $products = Product::orderBy('name', 'ASC')->pluck('name', 'id');
      
        return view('admin.products.edit', compact('product'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            "thumbnail" => 'required',
            "name" => 'required', 
            "price" => 'required|unique:products', 
           
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'name.required' => 'Enter product name',
                'price.required' => 'Enter product price',
               
            ]
        );

        $product->user_id = Auth::id();
        $product->thumbnail = $request->thumbnail;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        Session::flash('message', 'Product updated successfully');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        Session::flash('delete-message', 'Product deleted successfully');
        return redirect()->route('products.index');
    }
  }

