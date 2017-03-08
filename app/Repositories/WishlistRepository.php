<?php

namespace App\Repositories;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistRepository extends BaseRepository
{
    public function getModel()
    {
        return new Wishlist();
    }

    public function getProducts()
    {
        return Auth::user()->wishlistProducts()->get();
    }

    public function getProduct($value)
    {
        return Auth::user()->wishlistProducts()->where('id', $value)->first();
    }

    public function existsProduct($value)
    {
        return Auth::user()->wishlistProducts()->where('name', $value)->exists();
    }
}