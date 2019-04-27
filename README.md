# gmi-client-pep

Client for PeP (Polskie ePłatności)

# Example usage:
    $guzzleClient = new Client([
        'base_uri' => PeP::API_URL,
        'auth' => [API_LOGIN, API_PASSWORD]
    ]);
    
    $pep = new PeP($guzzleClient);
    
    //Complete the parameters according to the documentation from https://paylane.pl/devzone/
    $parameters = [];
    
    $responseFromPeP = $pep->cardSaleByToken($parameters);