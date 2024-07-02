<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::paginate();
        return view('dash.products.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Product::all();
        $categories = Category::all();
        return view('dash.products.add',compact('data','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'name_ar' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id'=>'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request_data = $request->except('image');

        if ($request->file('image')) {
            $imgName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(215, 272, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(public_path('uploads/proudct/' . $imgName));

            $request_data['image'] = $imgName;
        }

        Product::create($request_data);

        // Redirect to a route (e.g., the products index) with a success message
        return redirect()->route('dashboard.proudcts.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        $categories = Category::all();
        return view('dash.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'name_ar' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->file('image')) {
            $imgName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads/products'), $imgName);
            $data['image'] = $imgName;

            // Delete the old image if exists
            if ($product->image) {
                unlink(public_path('uploads/products/' . $product->image));
            }
        }

        $product->update($data);

        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
