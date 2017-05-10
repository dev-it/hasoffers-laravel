<?php
namespace DevIT\Hasoffers\Laravel;

class Client {

    protected $hasoffers;

    protected $client;

    public function __construct()
    {
        $this->hasoffers = new \DevIT\Hasoffers\Client(config('hasoffers.key'), config('hasoffers.network_id'));
    }

    function offers($parameters = [])
    {
        $this->client = $this->hasoffers->api('Brand\Offer');
        return $this->client->findAll();
    }
}
