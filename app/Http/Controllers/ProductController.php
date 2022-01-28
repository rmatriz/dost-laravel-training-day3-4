<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) 
    {

        $msg = $request->session()->pull('session_msg', '');

        return view('product.index', [
            'products' => Product::get(),
            'msg' => $msg
        ]);
    }

    public function vueproductapp() 
    {
        return view('product.vueproductsapp');

    }

    public function show($id)
    {
        $categories = Product::find($id)->category()->get();

        return view('product.show', [
            'product' => Product::findOrFail($id),
            'categories' => $categories,
        ]);
    }


    public function showCategory()
    {
        $products = Product::with('category')->get();

        return view('product.showCategory', [
            'products' => $products
        ]);

    }

    public function create(Request $request)
    {
        $msg = $request->session()->pull('session_msg', '');

        $categories = Category::get();
   
        // dd($categories);

        return view('product.create', [
            'msg' => $msg,
            'categories' => $categories

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'name' => 'required|string',
            'description' => 'required|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $product = new Product();
        $product->category_id = $data['category_id'];
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->save();

        $request->session()->put('session_msg', 'Record Saved.');
        return redirect(route('products.index'));
        
    }

     public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::get();
        $msg = $request->session()->pull('session_msg', '');

        return view('product.edit', [
            'product' => $product,
            'categories' => $categories,
            'msg' => $msg
        ]);
    }

    public function update(Request $request, $id) 
    {
        $data = $request->validate([
            'category_id' => 'required',
            'name' => 'required|string',
            'description' => 'required|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
        ]);

        $product = Product::findOrFail($id);

        $product->category_id = $data['category_id'];
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->save();

        $request->session()->put('session_msg', 'Record Updated.');
        return redirect(route('products.index'));
    }

    public function delete(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        $request->session()->put('session_msg', 'Item Deleted.');
        return redirect(route('products.index'));
    }
}
 