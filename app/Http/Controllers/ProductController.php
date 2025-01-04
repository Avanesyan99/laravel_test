<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function create() {
        // $product = Product::create(
        //     [
        //         'name' => 'BMW',
        //         'image' => 'someimg.jpg',
        //         'description' => 'charasteristics of the product',
        //         'price' => 22333
        //     ]
        //     );
        
        return view('product.create');
    }

    public function store() {
        $data = request()->validate([
            'name' => 'string',
            'image' => 'string',
            'description' => 'string',
            'price' => 'integer'
        ]);

        Product::create($data);
        return redirect()->route('product.index');
    }

    public function show(Product $product) {

        return view('product.show', compact('product'));
    }

    public function edit(Product $product) {

        return view('product.edit', compact('product'));
    }

    public function update(Product $product) {
        $data = request()->validate(
            [
            'name' => 'string',
            'image' => 'string',
            'description' => 'string',
            'price' => 'integer'
            ]
        );

        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('product.index');
    }
}

