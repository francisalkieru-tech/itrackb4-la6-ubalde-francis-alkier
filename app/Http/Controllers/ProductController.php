<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->query('category', '');
        $stock = $request->query('stock', '');

        $products = $this->products();

        if($category){
            $products = array_filter($products, function($product) use($category) {
                return $product['category'] === $category;
            });
        }

        if($stock){
            $products = array_filter($products, function ($product) use($stock){
                return $stock === 'low' ? $product['stock'] < 10 : $product['stock'] >= 10;
            });
        }

        return view('products.index', [
            'products' => $products,
            'category' => $category,
            'stock'    => $stock,
        ]);
    }
    
    //return view('products.index', ['products' => $this->products()]);

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = $this->products();
        if(!isset($products[$id])){
            abort(404);
        }
        return view('products.show', ['product' => $products[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function products()
    {
        return [
            1 => ['id'=> 1,'name' => 'Argentina 150g', 'price' => 36, 'stock' => 40, 'category' => 'Canned Goods'],
            2 => ['id'=> 2,'name' => 'Megasardines', 'price' => 20, 'stock' => 5, 'category' => 'Canned Goods'],
            3 => ['id'=> 3,'name' => 'Pancit Canton', 'price' => 18, 'stock' => 35, 'category' => 'Instant Noodles'],
            4 => ['id'=> 4,'name' => '1.5 coke', 'price' => 75, 'stock' => 8, 'category' => 'Beverages'],
            5 => ['id'=> 5,'name' => 'Red Horse 500ml', 'price' => 52, 'stock' => 10, 'category' => 'Alcoholic Beverages'],
            6 => ['id'=> 6,'name' => 'Piattos Cheese 85g', 'price' => 18, 'stock' => 8, 'category' => 'Snacks'],
        ];
    }

}
