<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Product;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.stock.index', [
            'stock' => Stock::orderBy('id', 'ASC')->paginate(10),
            'products' => Product::all()
        ]);


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Retrieve products that do not have associated stock
    $products = Product::doesntHave('stock')->get();

    // Return the view with the filtered products
    return view('admin.stock.form', [
        'stock' => new Stock(),
        'products' => $products,
    ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'quantity' => 'required',
            'product_id' => 'required|unique:stocks,product_id',

        ]);

        // $validated['password'] = bcrypt('password');

        Stock::create($validated);

        return redirect()->route('stock.index')->with('success', 'Stock successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock)
    {
       return view('admin.stock.form', [
            'stock' => $stock,
           'products' => Product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {
        $validated = $request->validate([

            'quantity' => 'required',
            'product_id' => 'required|unique:stocks,product_id,' . $stock->id,

        ]);

        $stock->update($validated);

        return redirect()->route('stock.index')->with('success', 'Stock successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect()->route('stock.index') ->with('success', 'Stock successfully deleted!');
    }
}
