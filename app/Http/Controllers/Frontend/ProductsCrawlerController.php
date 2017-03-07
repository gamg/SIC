<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use App\OthersTraits\Scraper;
use Illuminate\Support\Facades\Session;

class ProductsCrawlerController extends Controller
{
    use Scraper;

    protected $productType = 'expensive_products';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getExpensiveProducts()
    {
        return $this->crawlPage('https://www.appliancesdelivered.ie/search?sort=price_desc');
    }

    public function getCheapestProducts()
    {
        $this->productType = 'cheapest_products';
        return $this->crawlPage('https://www.appliancesdelivered.ie/search');
    }

    private function crawlPage($url)
    {
        if($this->scrape($url))
            return view('frontend.home')->with('data', $this->data); // en otra vista frontend.products

        Session::flash('message', [
            'alert' => 'danger',
            'text' => $this->message
        ]);

        return view('frontend.home'); // en otra vista frontend.products
    }
}
