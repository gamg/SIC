<?php

namespace App\OthersTraits;

trait Scraper
{
    protected $client, $crawler, $message;
    protected $data = null;

    protected function scrape($url)
    {
        if(cache()->has($this->productType)){
            $this->data = cache()->get($this->productType);
            return true;
        }

        if($this->verifyHost($url)){
            if($this->getResponseStatus() == 200){
                if ($this->productsCount()) {
                    $this->data = $this->filterProducts($this->crawler);
                    $this->storeCache();
                    return true;
                } else {
                    $this->message = 'No products exist.';
                }
            } else {
                $this->message = 'An error has occurred in the connection. Try again later.';
            }
        } else {
            $this->message = 'Error connecting to server: '.$url;
        }

        return false;
    }

    protected function filterProducts($crawler)
    {
        $data = [];
        for ($i = 0; $i < 10; $i++){
            $product = $crawler->filter('.search-results-product')->eq($i);
            $data[] = [
                'name' => trim($product->filter('.product-description h4 a')->text()),
                'product_url' => $product->filter('.product-description h4 a')->attr('href'),
                'price' => $product->filter('h3.section-title')->text(),
                'image_url' => $product->filter('.img-responsive')->attr('src')
            ];
        }
        return $data;
    }

    protected function verifyHost($url)
    {
        try{
            $this->crawler = $this->client->request('GET', $url);
            return true;
        } catch (\Exception $e){
            return false;
        }
    }

    protected function getResponseStatus()
    {
        return $this->client->getResponse()->getStatus();
    }

    protected function productsCount()
    {
        return $this->crawler->filter('.search-results-product')->count();
    }

    protected function storeCache()
    {
        cache()->put($this->productType, $this->data, 30);
    }
}