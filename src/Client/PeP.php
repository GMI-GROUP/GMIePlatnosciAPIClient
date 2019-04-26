<?php

namespace Gmigroup\Clients\PeP\Client;

use Gmigroup\Clients\PeP\Response\PePResponse;

class PeP extends AbstractPeP
{
    public function cardSaleByToken(array $params = []): PePResponse
    {
        return $this->request(__FUNCTION__,  $params);
    }

    public function cardAuthorizationByToken(array $params = []): PePResponse
    {
        return $this->request(__FUNCTION__,  $params);
    }

    public function resaleByAuthorization(array $params = []): PePResponse
    {
        return $this->request(__FUNCTION__,  $params);
    }
}
