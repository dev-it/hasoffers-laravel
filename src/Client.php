<?php
namespace DevIT\Hasoffers\Laravel;

class Client {

    protected $hasoffers;

    protected $client;

    public function __construct()
    {
        $this->hasoffers = new \DevIT\Hasoffers\Client(config('hasoffers.key'), config('hasoffers.network_id'));
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
