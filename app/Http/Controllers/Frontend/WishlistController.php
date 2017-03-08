<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\WishlistRepository;

class WishlistController extends Controller
{
    protected $wishlistRepo;

    public function __construct(WishlistRepository $wishlistRepo)
    {
        $this->wishlistRepo = $wishlistRepo;
    }

    public function getProducts()
    {
        $favorites = $this->wishlistRepo->getProducts();
        return view('frontend.wishlist.index', compact('favorites'));
    }

    public function postAddProduct(Request $request)
    {
        if ($request->ajax()){
            if($this->wishlistRepo->existsProduct($request->get('name'))){
                $message = 'The product already exist in the list.';
                $type = 'warning';
            } else {
                $this->wishlistRepo->create($request->all());
                $message = 'Product added to the wishlist correctly.';
                $type = 'success';
            }
            return response()->json(['type' => $type, 'message' => $message]);
        }
    }

    public function postDeleteProduct(Request $request)
    {
        if ($request->ajax()) {
            $product = $this->wishlistRepo->getProduct($request->get('id'));
            if (!is_null($product)){
                $this->wishlistRepo->delete($product);
                $message = 'Product deleted from your list.';
                $type = 'success';
                $id = $product->id;
                $result = true;
            } else {
                $message = 'The product can not be deleted, reload the page.';
                $type = 'error';
                $id = '';
                $result = false;
            }
            return response()->json([
                'result' => $result,
                'type' => $type,
                'message' => $message,
                'id' => $id,
            ]);
        }
    }
}
