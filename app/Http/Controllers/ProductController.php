<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Metal;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of all products with pagination.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Filter by price
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        // Filter by color
        if ($request->filled('color_id')) {
            $query->where('color_id', $request->color_id);
        }

        // Metal filter
        if ($request->filled('metal_id')) {
            $query->where('metal_id', $request->metal_id);
        }

        $products = $query->paginate(12);

        // Price counts for UI
        $counts = [
            'under_25'   => Product::where('price', '<', 25)->count(),
            '25_to_50'   => Product::whereBetween('price', [25, 50])->count(),
            '50_to_100'  => Product::whereBetween('price', [50, 100])->count(),
            '100_to_200' => Product::whereBetween('price', [100, 200])->count(),
            'above_200'  => Product::where('price', '>', 200)->count(),
        ];

        // Fetch colors for filter list
        $colors = Color::all();

        // Count products by color for UI
        $colorCounts = Product::select('color_id')
            ->selectRaw('count(*) as count')
            ->groupBy('color_id')
            ->pluck('count', 'color_id')
            ->toArray();

        // Metals & counts (optional)
        $metals = Metal::all();
        $metalCounts = Product::select('metal_id')
            ->selectRaw('count(*) as count')
            ->groupBy('metal_id')
            ->pluck('count', 'metal_id')
            ->toArray();
        $categories = Category::all();
        $metals = Metal::all();

        return view('products.index', compact('categories', 'metals', 'products', 'counts', 'colors', 'colorCounts','metalCounts'));
    }


    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::all(); // Fetch all categories for dropdown
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        // ✅ Validate input data
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'price'       => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|max:2048', // Optional image
        ]);

        // ✅ Store uploaded image in `storage/app/public/products`
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // ✅ Save the product
        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display a single product.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $categories = Category::all(); // For category dropdown
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'price'       => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|max:2048',
        ]);

        // ✅ Replace image if a new one is uploaded
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted successfully.');
    }
}
