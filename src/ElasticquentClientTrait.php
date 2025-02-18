<?php

namespace Elasticquent;

use Elastic\Elasticsearch\Client;
use Elastic\Elasticsearch\ClientBuilder;
use Elastic\Elasticsearch\Exception\ConfigException;

trait ElasticquentClientTrait
{
    use ElasticquentConfigTrait;

    /**
     * Get ElasticSearch Client
     *
     * @return Client
     * @throws ConfigException
     */
    public function getElasticSearchClient(): Client
    {
        $config = $this->getElasticConfig();

        // elasticsearch v2.0 using builder
        if (class_exists('\Elastic\Elasticsearch\ClientBuilder')) {
            return ClientBuilder::fromConfig($config);
        }

        // elasticsearch v1
        return new Client($config);
    }

}
