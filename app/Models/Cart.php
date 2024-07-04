<?php

namespace App\Models;

use App\Observers\CartObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Observers\CartObserver;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::observe(CartObserver::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'not added yet'
        ]);
    }

    public function product()
    {
        return $this->belongsTo(Product::class)->withDefault([
            'name' => 'not added yet'
        ]);
    }
}
