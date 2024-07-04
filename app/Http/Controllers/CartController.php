<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Repositories\Cart\CartRepository;
use App\Repositories\Cart\CartRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CartRepositoryInterface $cart )
    {
        $items = $cart->get();
        return view('front.all_cart',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        ////
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CartRepositoryInterface $cart)
    {

        //   // Example of adding a product to the cart
        //   $productId = $request->input('product_id');
        //   $quantity = $request->input('quantity', 1);

        //   // Assuming you have a Product model and can fetch the product
        //   $product = Product::findOrFail($productId);

        //   $this->cartRepository->add($product, $quantity);

        //   return redirect()->route('cart.index');
        $request->validate([
            'product_id' => 'required|int|exists:products,id',
            'quantity' => 'nullable|int|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $cart->add($product, $request->quantity ?? 1);

        return redirect()->route('cart.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(cart $cart)
    {
        // //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cart $cart)
    {
        ////
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartRepositoryInterface $cart)
    {

         // Example of updating quantity of a cart item
        //  $quantity = $request->input('quantity');

        //  $this->cartRepository->update($cart->id, $quantity);

        //  return redirect()->route('cart.index');

         $request->validate([
            'product_id' => ['required|int|exists:products,id'],
            'quantity' => ['nullable|int|min:1'],
        ]);
        $product = Product::findOrFail($request->product_id);
        $cart->update($product,$request->quantity);
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id , CartRepositoryInterface $cart)
    {
        $cart->delete($id);
    }
}
