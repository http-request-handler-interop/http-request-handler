<?php

namespace Interop\Http\RequestHandler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Defines a contract for functions which accept a server request argument and return a response.
 */
interface ActionInterface
{
    /**
     * Process a server request and return the produced response.
     *
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function __invoke(ServerRequestInterface $request);
}
