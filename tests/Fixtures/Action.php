<?php

namespace Interop\Http\RequestHandler\Fixtures;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Action implements \Interop\Http\RequestHandler\ActionInterface
{
    public function __invoke(ServerRequestInterface $request)
    {
    }
}
