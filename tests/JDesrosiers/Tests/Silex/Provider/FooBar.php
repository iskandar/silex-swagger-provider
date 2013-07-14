<?php

namespace JDesrosiers\Tests\Silex\Provider;

use Swagger\Annotations as SWG;

/**
 * @SWG\Resource(
 *     apiVersion="0.1",
 *     swaggerVersion="1.1",
 *     resourcePath="/foo/bar",
 *     basePath="http://localhost:8000"
 * )
 */
class Foo
{
    /**
     * @SWG\Api(
     *     path="/foo/bar",
     *     @SWG\Operations(
     *         @SWG\Operation(httpMethod="GET", responseClass="FooBarModel")
     *     )
     * )
     */
    public function fooBar()
    {

    }
}
