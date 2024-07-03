<?php
namespace Repositories\Cart;
use App\Models\Cart;
use App\Models\Product;
use App\Repositorie\Cart\CartRepositorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CartModelRepositorie implements CartRepositorie
{
    // Retrieve all items in the cart

    protected function getCookieId(){
        $cookie_id = Cookie::get('cart_id');
    if(!$cookie_id){
        $cookie_id = Str::uuid();
        Cookie::queue('cart_id',$cookie_id,30*24*60);
    }
    return $cookie_id;
    }
    public function get()
    {
        return Cart::where('cookie_id','=',$this->getCookieId())->get();
    }

    // Add a product to the cart with a specified quantity
    public function add(Product $product, $quantity = 1)
    {
        $item = Cart::where('product_id','=', $product->id )
        ->where('cookie_id','=',$this->getCookieId())
        ->first();
        if(!$item){
            $cart = Cart::create([
                'user_id' =>Auth::id(),
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);
            $this->get()->push($cart);
            return $cart;
        }
        return $item -> increment('quantity',$quantity);
    }

    // Update the quantity of a specific item in the cart
    public function update($id, $quantity)
    {
        Cart::where('id', '=' , $id)->update([
            'quantity' => $quantity,
        ]);
    }

    // Delete an item from the cart by ID
    public function delete($id)
    {
        Cart::where('id', '=' , $id)->where('cookie_id','=',$this->getCookieId())->delete();
    }

    // Clear all items from the cart
    public function flush()
    {
        // Implement the logic to clear all items from the cart
        Cart::where('cookie_id','=',$this->getCookieId())->destroy();

    }

    // Calculate and return the total cost of items in the cart
    public function total()
    {
        // Implement the logic to calculate the total cost
        return Cart::where('cookie_id','=',$this->getCookieId())
        ->join('products' , 'products.id', '=' , 'carts.products_id')
        ->selectRaw('SUM(products.price * carts.quantity) as total')
        ->value('total');
    }
}

