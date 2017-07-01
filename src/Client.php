<?php
namespace DevIT\Hasoffers\Laravel;

class Client {

    protected $hasoffers;

    protected $client;

    public function __construct($key, $networkId)
    {
        $this->hasoffers = new \DevIT\Hasoffers\Client($key, $networkId);
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

    public function findConversion($id)
    {
        $client = $this->hasoffers->api('Brand\Conversion');

        $resp = $client->findById(['transaction_id' => $id]);

        return $resp->response->data;
    }
}
