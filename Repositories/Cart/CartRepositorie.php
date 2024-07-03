<?php
namespace App\Repositorie\Cart;

use App\Models\Cart;
use App\Models\Product;

// interface CartRepositoryInterface
// {
//     public function all();
//     public function create(array $data);
//     public function find($id);
//     public function update($id, array $data);
//     public function delete($id);
// }

interface CartRepositorie
{
    public function get();
    public function add(Product $product , $quantity = 1);
    public function update($id , $quantity);
    public function delete($id);
    public function flush();
    public function total();
}
