<?php

namespace Gmigroup\Clients\PeP\Mapping;

class Mapping
{
    private const cardSale                      = 'cards/sale';
    private const cardSaleByToken               = 'cards/saleByToken';
    private const cardAuthorization             = 'cards/authorization';
    private const cardAuthorizationByToken      = 'cards/authorizationByToken';
    private const checkCard                     = 'cards/check';
    private const checkCardByToken              = 'cards/checkByToken';
    private const checkCard3DSecure             = '3DSecure/checkCard';
    private const checkCard3DSecureByToken      = '3DSecure/checkCardByToken';
    private const saleBy3DSecureAuthorization   = '3DSecure/authSale';
    private const captureAuthorization          = 'authorizations/capture';
    private const getAuthorizationInfo          = 'authorizations/info';
    private const closeAuthorization            = 'authorizations/close';
    private const refund                        = 'refunds';
    private const getSaleInfo                   = 'sales/info';
    private const checkSaleStatus               = 'sales/status';
    private const resaleBySale                  = 'resales/sale';
    private const resaleByAuthorization         = 'resales/authorization';
    private const paypalAuthorization           = 'paypal/authorization';
    private const paypalSale                    = 'paypal/sale';
    private const paypalStopRecurring           = 'paypal/stopRecurring';
    private const directDebitSale               = 'directdebits/sale';
    private const sofortSale                    = 'sofort/sale';
    private const idealSale                     = 'ideal/sale';
    private const idealBankCodes                = 'ideal/bankcodes';
    private const bankTransferSale              = 'banktransfers/sale';
    private const applePaySale                  = 'applepay/sale';
    private const applePayAuthorization         = 'applepay/authorization';

    private const requestCardSale                      = 'post';
    private const requestCardSaleByToken               = 'post';
    private const requestCardAuthorization             = 'post';
    private const requestCardAuthorizationByToken      = 'post';
    private const requestCheckCard                     = 'get';
    private const requestCheckCardByToken              = 'get';
    private const requestCheckCard3DSecure             = 'get';
    private const requestCheckCard3DSecureByToken      = 'get';
    private const requestSaleBy3DSecureAuthorization   = 'post';
    private const requestCaptureAuthorization          = 'post';
    private const requestGetAuthorizationInfo          = 'get';
    private const requestCloseAuthorization            = 'post';
    private const requestRefund                        = 'post';
    private const requestGetSaleInfo                   = 'get';
    private const requestCheckSaleStatus               = 'get';
    private const requestResaleBySale                  = 'post';
    private const requestResaleByAuthorization         = 'post';
    private const requestPaypalAuthorization           = 'post';
    private const requestPaypalSale                    = 'post';
    private const requestPaypalStopRecurring           = 'post';
    private const requestDirectDebitSale               = 'post';
    private const requestSofortSale                    = 'post';
    private const requestIdealSale                     = 'post';
    private const requestIdealBankCodes                = 'get';
    private const requestBankTransferSale              = 'post';
    private const requestApplePaySale                  = 'post';
    private const requestApplePayAuthorization         = 'post';

    public const SUPPORTED_METHODS = [
        'cardSale'                      => self::cardSale,
        'cardSaleByToken'               => self::cardSaleByToken,
        'cardAuthorization'             => self::cardAuthorization,
        'cardAuthorizationByToken'      => self::cardAuthorizationByToken,
        'cardCheck'                     => self::checkCard,
        'cardCheckByToken'              => self::checkCardByToken,
        'checkCard3DSecure'             => self::checkCard3DSecure,
        'checkCard3DSecureByToken'      => self::checkCard3DSecureByToken,
        'saleBy3DSecureAuthorization'   => self::saleBy3DSecureAuthorization,
        'captureAuthorization'          => self::captureAuthorization,
        'getAuthorizationInfo'          => self::getAuthorizationInfo,
        'closeAuthorization'            => self::closeAuthorization,
        'refund'                        => self::refund,
        'getSaleInfo'                   => self::getSaleInfo,
        'getSaleStatus'                 => self::checkSaleStatus,
        'resaleBySale'                  => self::resaleBySale,
        'resaleByAuthorization'         => self::resaleByAuthorization,
        'paypalAuthorization'           => self::paypalAuthorization,
        'paypalSale'                    => self::paypalSale,
        'paypalStopRecurring'           => self::paypalStopRecurring,
        'directDebitSale'               => self::directDebitSale,
        'sofortSale'                    => self::sofortSale,
        'idealSale'                     => self::idealSale,
        'idealBankCodes'                => self::idealBankCodes,
        'bankTransferSale'              => self::bankTransferSale,
        'applePaySale'                  => self::applePaySale,
        'applePayAuthorization'         => self::applePayAuthorization
    ];

    public const SUPPORTED_REQUEST_METHODS_FOR_METHODS = [
        'cardSale'                      => self::requestCardSale,
        'cardSaleByToken'               => self::requestCardSaleByToken,
        'cardAuthorization'             => self::requestCardAuthorization,
        'cardAuthorizationByToken'      => self::requestCardAuthorizationByToken,
        'cardCheck'                     => self::requestCheckCard,
        'cardCheckByToken'              => self::requestCheckCardByToken,
        'checkCard3DSecure'             => self::requestCheckCard3DSecure,
        'checkCard3DSecureByToken'      => self::requestCheckCard3DSecureByToken,
        'saleBy3DSecureAuthorization'   => self::requestSaleBy3DSecureAuthorization,
        'captureAuthorization'          => self::requestCaptureAuthorization,
        'getAuthorizationInfo'          => self::requestGetAuthorizationInfo,
        'closeAuthorization'            => self::requestCloseAuthorization,
        'refund'                        => self::requestRefund,
        'getSaleInfo'                   => self::requestGetSaleInfo,
        'getSaleStatus'                 => self::requestCheckSaleStatus,
        'resaleBySale'                  => self::requestResaleBySale,
        'resaleByAuthorization'         => self::requestResaleByAuthorization,
        'paypalAuthorization'           => self::requestPaypalAuthorization,
        'paypalSale'                    => self::requestPaypalSale,
        'paypalStopRecurring'           => self::requestPaypalStopRecurring,
        'directDebitSale'               => self::requestDirectDebitSale,
        'sofortSale'                    => self::requestSofortSale,
        'idealSale'                     => self::requestIdealSale,
        'idealBankCodes'                => self::requestIdealBankCodes,
        'bankTransferSale'              => self::requestBankTransferSale,
        'applePaySale'                  => self::requestApplePaySale,
        'applePayAuthorization'         => self::requestApplePayAuthorization
    ];
}
