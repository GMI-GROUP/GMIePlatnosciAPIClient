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

    public function getData(): array
    {
        return $this->data;
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'data' => $this->getData()
        ];
    }
}
