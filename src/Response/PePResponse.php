<?php

namespace Gmigroup\Clients\PeP\Response;

class PePResponse
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @var array
     */
    protected $data;

    public function __construct(int $code, array $data)
    {
        $this->code = $code;
        $this->data = $data;
    }

    public function getStatus(): string
    {
        return $this->code;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
