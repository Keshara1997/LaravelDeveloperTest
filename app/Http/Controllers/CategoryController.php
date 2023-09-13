<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->get();
        return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:categories,name'
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);    
            
        return redirect()->route('category.index')->with('success', 'Category added successfully');}

        public function show(string $id)
        {
            $category = Category::findOrFail($id);
            return view('category.show', compact('category'));
        }

        public function edit(string $id)
        {
            $category = Category::findOrFail($id);
            return view('category.edit', compact('category'));
        }
        
        public function update(Request $request, string $id)
        {
            $this->validate($request, [
                'name' => 'required|unique:categories,name,' . $id
            ]);
    
            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->name
            ]);
    
            return redirect()->route('category')->with('success', 'Category updated successfully');
        }


        public function destroy(string $id)
        {
            $category = Category::findOrFail($id);
            $category->delete();
    
            return redirect()->route('category')->with('success', 'Category deleted successfully');
        }


        
}