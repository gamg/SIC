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

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getExpensiveProducts()
    {
        if($this->scrape('https://www.appliancesdelivered.ie/search?sort=price_desc'))
            return view('frontend.home')->with('data', $this->data); // en otra vista frontend.products

        Session::flash('message', [
            'alert' => 'danger',
            'text' => $this->message
        ]);

        return view('frontend.home'); // en otra vista frontend.products
    }

    public function getCheapestProducts()
    {
        if($this->scrape('https://www.appliancesdelivered.ie/search'))
            return view('frontend.home')->with('data', $this->data); // en otra vista frontend.products

        Session::flash('message', [
            'alert' => 'danger',
            'text' => $this->message
        ]);

        return view('frontend.home'); // en otra vista frontend.products
    }
}
