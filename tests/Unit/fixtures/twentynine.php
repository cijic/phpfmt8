<?php

class Server
{
    protected ?ServerRequestInterface $request;

    public function __construct(protected Merchant $merchant, ?ServerRequestInterface $request)
    {
        $this->request = $request ?? RequestUtil::createDefaultServerRequest();

        $a = $a ? $a : $b;
    }
}