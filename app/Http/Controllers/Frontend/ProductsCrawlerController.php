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
    protected  $title = 'Top 10 most expensive products';

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
        $this->title = 'Top 10 most cheapest products';
        return $this->crawlPage('https://www.appliancesdelivered.ie/search');
    }

    private function crawlPage($url)
    {
        if(!$this->scrape($url)){
            Session::flash('message', [
                'alert' => 'danger',
                'text' => $this->message
            ]);
        }

        return view('frontend.products.index')->with('data', $this->data)
            ->with('title', $this->title);
    }
}
