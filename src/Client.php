<?php
namespace DevIT\HasoffersLaravel;

class Client {

    protected $hasoffers;

    protected $client;

    public function __construct($key, $networkId)
    {
        $this->hasoffers = new \DevIT\Hasoffers\Client($key, $networkId);

        $this->client = $this->hasOffers->api('Brand\Offer');
    }

    function offers($parameters = [])
    {
        return $this->client->findAll();
    }
}
