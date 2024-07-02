<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Intervention\Image\Image;
use Intervention\Image\Facades\Image;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::paginate();
        return view('dash.categories.all', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.categories.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'sub_title' => 'required|string|max:255',
        'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Prepare data for storing (exclude 'image' from the data to be saved initially)

    // // Check if an image file was uploaded
    // if ($request->hasFile('image')) {
    //     // Generate a unique file name
    //     $imgName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();

    //     // Store the file in the 'public' disk under 'categories' directory
    //     $path = $request->file('image')->storeAs('categories', $imgName, 'public');
    //     // Add the filename to the data array for saving to database
    //     $request_data['image'] = $imgName;
    // }
    $request_data = $request->except('image');


    if($request->file('image')){
        $imgName = uniqid() . $request->file('image')->getClientOriginalName();
        Image::make($request->file('image'))->resize(422, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
    })->save(public_path('uploads/category/' . $imgName));
    $request_data['image'] = $imgName;
    // dd($request_data);

    // Create the category with the validated data
    Category::create($request_data);

    // Redirect to a route (e.g., the categories index) with a success message
    return redirect()->route('dashboard.categories.index')
                     ->with('success', 'Category created successfully!');
}
}




    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // $roles = Role::all();
        return view('dash.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request_data = $request->except('image');

        if ($request->file('image')) {
            $imgName = uniqid() . $request->file('image')->getClientOriginalName();
            Image::make($request->file('image'))->resize(422, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(public_path('uploads/category/' . $imgName));
            if ($category->image) {
                unlink(public_path('uploads/category/' . $category->image));
            }
            $request_data['image'] = $imgName;
        }

        $category->update($request_data);

        return redirect()->route('dashboard.categories.index')
                         ->with('success', 'Category updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
          // حذف الصورة  إذا كانت موجودة
         if ($category->image) {
            unlink(public_path('uploads/category/' . $category->image));
            $category->delete();

        }

        $category->delete();


        return redirect()->route('dashboard.categories.index')
                         ->with('success', 'Category deleted successfully!');
    }
}
