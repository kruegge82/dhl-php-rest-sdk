# DHL PHP REST SDK

Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/kruegge82/dhl-php-rest-sdk.git"
    }
  ],
  "require": {
    "kruegge82/dhl-php-rest-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new kruegge82\DHL\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->rootGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->rootGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-eu.dhl.com/parcel/de/shipping/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GeneralApi* | [**rootGet**](docs/Api/GeneralApi.md#rootget) | **GET** / | Return API version
*ManifestsApi* | [**getManifests**](docs/Api/ManifestsApi.md#getmanifests) | **GET** /manifests | Retrieve daily manifest document
*ManifestsApi* | [**manifestsPost**](docs/Api/ManifestsApi.md#manifestspost) | **POST** /manifests | Mark shipments as being ready for shipping
*ShipmentsAndLabelsApi* | [**createOrders**](docs/Api/ShipmentsAndLabelsApi.md#createorders) | **POST** /orders | Create one or more shipments and their documents. (This is the primary call of the API.)
*ShipmentsAndLabelsApi* | [**getLabel**](docs/Api/ShipmentsAndLabelsApi.md#getlabel) | **GET** /labels | Download PDF document
*ShipmentsAndLabelsApi* | [**getOrder**](docs/Api/ShipmentsAndLabelsApi.md#getorder) | **GET** /orders | Retrieve shipment documents - labels and customs documents
*ShipmentsAndLabelsApi* | [**ordersAccountDelete**](docs/Api/ShipmentsAndLabelsApi.md#ordersaccountdelete) | **DELETE** /orders | Delete one or more shipments

## Models

- [BankAccount](docs/Model/BankAccount.md)
- [Commodity](docs/Model/Commodity.md)
- [Consignee](docs/Model/Consignee.md)
- [ContactAddress](docs/Model/ContactAddress.md)
- [Country](docs/Model/Country.md)
- [CustomsDetails](docs/Model/CustomsDetails.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Document](docs/Model/Document.md)
- [GetManifestData](docs/Model/GetManifestData.md)
- [LabelDataResponse](docs/Model/LabelDataResponse.md)
- [Locker](docs/Model/Locker.md)
- [MultipleManifestResponse](docs/Model/MultipleManifestResponse.md)
- [POBox](docs/Model/POBox.md)
- [PostOffice](docs/Model/PostOffice.md)
- [RequestStatus](docs/Model/RequestStatus.md)
- [ResponseItem](docs/Model/ResponseItem.md)
- [ServiceInformation](docs/Model/ServiceInformation.md)
- [ServiceInformationAmp](docs/Model/ServiceInformationAmp.md)
- [ServiceInformationBackend](docs/Model/ServiceInformationBackend.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentDetails](docs/Model/ShipmentDetails.md)
- [ShipmentManifestingRequest](docs/Model/ShipmentManifestingRequest.md)
- [ShipmentOrderRequest](docs/Model/ShipmentOrderRequest.md)
- [ShipmentShipper](docs/Model/ShipmentShipper.md)
- [Shipper](docs/Model/Shipper.md)
- [ShipperReference](docs/Model/ShipperReference.md)
- [ShortResponseItem](docs/Model/ShortResponseItem.md)
- [SingleManifestResponse](docs/Model/SingleManifestResponse.md)
- [VAS](docs/Model/VAS.md)
- [VASCashOnDelivery](docs/Model/VASCashOnDelivery.md)
- [VASDhlRetoure](docs/Model/VASDhlRetoure.md)
- [VASIdentCheck](docs/Model/VASIdentCheck.md)
- [ValidationMessageItem](docs/Model/ValidationMessageItem.md)
- [Value](docs/Model/Value.md)
- [Weight](docs/Model/Weight.md)

## Authorization

Authentication schemes defined for the API:
### BasicAuth

- **Type**: HTTP basic authentication

### ApiKey

- **Type**: API key
- **API key parameter name**: dhl-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```