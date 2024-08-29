# kruegge82\DHL\ManifestsApi

All URIs are relative to https://api-eu.dhl.com/parcel/de/shipping/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getManifests()**](ManifestsApi.md#getManifests) | **GET** /manifests | Retrieve daily manifest document |
| [**manifestsPost()**](ManifestsApi.md#manifestsPost) | **POST** /manifests | Mark shipments as being ready for shipping |


## `getManifests()`

```php
getManifests($billing_number, $date, $include_docs, $accept_language): \kruegge82\DHL\Model\SingleManifestResponse
```

Retrieve daily manifest document

Return the manifest document for the specific date (abbreviated ISO8601 format YYYY-MM-DD). If no date is provided, the manifest for today will be returned. The manifest PDF document will list the shipments for your EKP, separated by billing numbers. Potentially, the document is large and response time will reflect this. <br />Additionally, the response contains a mapping of billing numbers to sheet numbers of the manifest and a mapping of shipment numbers to sheet numbers.<br />The call can be repeated as often as needed. Should a date be provided which is too old or lies within the future, HTTP 400 is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = kruegge82\DHL\Configuration::getDefaultConfiguration()->setApiKey('dhl-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\DHL\Configuration::getDefaultConfiguration()->setApiKeyPrefix('dhl-api-key', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = kruegge82\DHL\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new kruegge82\DHL\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['http_errors'=>false]),
    $config
);
$billing_number = 'billing_number_example'; // string | Customer billingNumber number.
$date = 'date_example'; // string
$include_docs = 'include'; // string | Legacy name **labelResponseType**. Shipping labels and further shipment documents can be:  * __include__: included as base64 encoded data in the response (default)  * __URL__: provided as URL reference.  Default is include the base64 encoded labels.
$accept_language = de-DE; // string | Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english.

try {
    $result = $apiInstance->getManifests($billing_number, $date, $include_docs, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->getManifests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billing_number** | **string**| Customer billingNumber number. | [optional] |
| **date** | **string**|  | [optional] |
| **include_docs** | **string**| Legacy name **labelResponseType**. Shipping labels and further shipment documents can be:  * __include__: included as base64 encoded data in the response (default)  * __URL__: provided as URL reference.  Default is include the base64 encoded labels. | [optional] [default to &#39;include&#39;] |
| **accept_language** | **string**| Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english. | [optional] |

### Return type

[**\kruegge82\DHL\Model\SingleManifestResponse**](../Model/SingleManifestResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manifestsPost()`

```php
manifestsPost($shipment_manifesting_request, $accept_language, $all): \kruegge82\DHL\Model\MultipleManifestResponse
```

Mark shipments as being ready for shipping

Shipments are normally ''closed out'' at a fixed time of the day (such as 6 pm, configured by EKP/account) for the date provided as shipDate in the create call.  <br />This call allows forcing the closeout for sets of shipments earlier. This will also override the original shipDate. Afterwards, the shipment cannot be changed and the shipment labels cannot be queried anymore (however they may remain cached for limited duration).  Once a shipment has been closed, then calling closeout for the same shipment will result in a warning. The same warning will also be returned if the automatic closeout happened prior to the call. It is however possible to add new shipments, they will be manifested as well and be part of the day's manifest.  <br />Note on billing: The manifesting step has billing implications. Some products (Warenpost, Parcel International partially) are billed based on the shipment data available to DHL at the end of the day. All other products (including DHL Paket Standard) are billed based on production data. For more details, please contact your account representative.   #### Request It's changing the status of the shipment, so parameters are provided in the body or as query parameter.  * ''profile'' attribute (request body parameter) - defines the user group profile. A user group is permitted to specific billing numbers. Shipments are only closed out if they belong to a billing number that the user group profile is entitled to use. This attribute is mandatory. Please use the standard user group profile ''STANDARD_GRUPPENPROFIL'' if no dedicated user group profile is available.  * ''billingNumber'' attribute (query parameter) - defines the billing number for which shipments shall be closed out. If a billing number is set, then only the shipments of that billing number are closed out. In that case no list of specific shipment numbers needs to be passed.  * ''shipmentNumbers'' attribute (request body parameter) - lists the specific shipping numbers of the shipments that shall be closed out.  If all shipments shall be closed, the query parameter ''all'' needs to be set to ''true''. In that case neither a billing number nor a list of shipment numbers need to be passed in the request.   #### Response  * Closing status for each shipment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = kruegge82\DHL\Configuration::getDefaultConfiguration()->setApiKey('dhl-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\DHL\Configuration::getDefaultConfiguration()->setApiKeyPrefix('dhl-api-key', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = kruegge82\DHL\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new kruegge82\DHL\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['http_errors'=>false]),
    $config
);
$shipment_manifesting_request = new \kruegge82\DHL\Model\ShipmentManifestingRequest(); // \kruegge82\DHL\Model\ShipmentManifestingRequest | Manifest request taking multiple input elements
$accept_language = de-DE; // string | Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english.
$all = false; // bool | Specify if all applicable shipments shall be marked as being ready for shipping.

try {
    $result = $apiInstance->manifestsPost($shipment_manifesting_request, $accept_language, $all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->manifestsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_manifesting_request** | [**\kruegge82\DHL\Model\ShipmentManifestingRequest**](../Model/ShipmentManifestingRequest.md)| Manifest request taking multiple input elements | |
| **accept_language** | **string**| Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english. | [optional] |
| **all** | **bool**| Specify if all applicable shipments shall be marked as being ready for shipping. | [optional] [default to false] |

### Return type

[**\kruegge82\DHL\Model\MultipleManifestResponse**](../Model/MultipleManifestResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
