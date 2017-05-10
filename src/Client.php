<?php
namespace DevIT\Hasoffers\Laravel;

class Client {

    protected $hasoffers;

    protected $client;

    public function __construct($key, $networkId)
    {
        $this->hasoffers = new \DevIT\Hasoffers\Client();
    }

    public function offers($parameters = [])
    {
        $this->client = $this->hasoffers->api('Brand\Offer');

        $resp = $this->client->findAll($parameters);

        return collect($resp->response->data);
    }

    public function affiliates($parameters = [])
    {
        $client = $this->hasoffers->api('Brand\Affiliate');
        
        $resp = $client->findAll($parameters);

        return collect($resp->response->data);
    }
}
