<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{

    public function index(Request $request) 
    {
        $msg = $request->session()->pull('session_msg', '');

        return view('category.index', [
            'categories' => Category::get(),
            'msg' => $msg
        ]);
    }

    public function show($id)
    {
        $products = Category::find($id)->products()->get();

        return view('category.show', [
            'category' => Category::findOrFail($id),
            'products' => $products,
        ]);
    }


    public function showProducts()
    {
        $categories = Category::with('products')->get();
        
        return view('category.showProducts', [
            'categories' => $categories
        ]);

    }

    public function create(Request $request)
    {
        $msg = $request->session()->pull('session_msg', '');

        return view('category.create', [
            'msg' => $msg
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $data['name'];
        $category->save();

        $request->session()->put('session_msg', 'Record Saved.');
        return redirect(route('categories.index'));
        
    }

    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $msg = $request->session()->pull('session_msg', '');

        return view('category.edit', [
            'category' => $category,
             'msg' => $msg
        ]);
    }

    public function update(Request $request, $id) 
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $category = Category::findOrFail($id);

        $category->name = $data['name'];
        $category->save();

        $request->session()->put('session_msg', 'Record Updated.');
        return redirect(route('categories.index'));
    }

    public function delete(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        $request->session()->put('session_msg', 'Item Deleted.');
        return redirect(route('categories.index'));
    }

}
