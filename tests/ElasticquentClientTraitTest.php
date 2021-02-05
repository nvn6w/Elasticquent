<?php

class ElasticquentClientTraitTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        $this->model = new TestModel;
    }

    public function testClient()
    {
        $this->assertInstanceOf('ElasticSearch\Client', $this->model->getElasticSearchClient());
    }
}
