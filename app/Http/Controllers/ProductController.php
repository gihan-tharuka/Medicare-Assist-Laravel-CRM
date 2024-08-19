<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->orderBy('id', 'ASC')->paginate(10);

        return view('admin.product.index', ['product' => $product]);



    }

    // function to display all the products as cards in the products page
    public function showProducts()
    {
        $products = Product::all();
        return view('admin.product.pharmacy', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.form', [

            'product' => (new Product()),
            'categories' => ProductCategory::all(),


        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:products,name',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'product_category_id' => 'required',

        ]);


        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/products/', $filename);

            $validated['image'] = $filename;

        }

        Product::create($validated);

        return redirect()->route('product.index')->with('success', 'Product successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.form', [
            'product' => $product,
            'categories' => ProductCategory::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
    // Validate the request data, excluding the image initially
    $validated = $request->validate([
        'name' => 'required',
        'slug' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
        'price' => 'required',
        'product_category_id' => 'required',
    ]);


    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/products'), $filename); // Use public_path for correct directory
        $validated['image'] = $filename; // Store the relative path

    } else {
        // If no new image is uploaded, retain the old image
        $validated['image'] = $product->image;
    }

    $product->update($validated);

    return redirect()->route('product.index')->with('success', 'Product successfully updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index') ->with('success', 'Product successfully deleted!');
    }
}
