<?php

namespace Gmigroup\Clients\PeP\Mapping;

class Mapping
{
    private const cardSale = 'cards/sale';
    private const cardSaleByToken = 'cards/saleByToken';
    private const cardAuthorization = 'cards/authorization';
    private const cardAuthorizationByToken = 'cards/authorizationByToken';
    private const paypalAuthorization = 'paypal/authorization';
    private const captureAuthorization = 'authorizations/capture';
    private const closeAuthorization = 'authorizations/close';
    private const refund = 'refunds';
    private const getSaleInfo = 'sales/info';
    private const checkSaleStatus = 'sales/status';
    private const getAuthorizationInfo = 'authorizations/info';
    private const directDebitSale = 'directdebits/sale';
    private const sofortSale = 'sofort/sale';
    private const idealSale = 'ideal/sale';
    private const idealBankCodes = 'ideal/bankcodes';
    private const bankTransferSale = 'banktransfers/sale';
    private const paypalSale = 'paypal/sale';

    public const SUPPORTED_METHODS = [
        'cardSale' => self::cardSale,
        'cardSaleByToken' => self::cardSaleByToken,
        'cardAuthorization' => self::cardAuthorization,
        'cardAuthorizationByToken' => self::cardAuthorizationByToken,
        'paypalAuthorization' => self::paypalAuthorization,
        'captureAuthorization' => self::captureAuthorization,
        'closeAuthorization' => self::closeAuthorization,
        'refund' => self::refund,
        'getSaleInfo' => self::getSaleInfo,
        'getSaleStatus' => self::checkSaleStatus,
        'getAuthorizationInfo' => self::getAuthorizationInfo,
        'directDebitSale' => self::directDebitSale,
        'sofortSale' => self::sofortSale,
        'idealSale' => self::idealSale,
        'idealBankCodes' => self::idealBankCodes,
        'bankTransferSale' => self::bankTransferSale,
        'paypalSale' => self::paypalSale,
    ];
}