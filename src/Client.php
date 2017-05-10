<?php
namespace DevIT\Hasoffers\Laravel;

class Client {

    protected $hasoffers;

    protected $client;

    public function __construct($key, $networkId)
    {
        $this->hasoffers = new \DevIT\Hasoffers\Client($key, $networkId);

    }

    function offers($parameters = [])
    {
        $this->client = $this->hasoffers->api('Brand\Offer');
        return $this->client->findAll();
    }
}
