# kruegge82\DHL\ShipmentsAndLabelsApi

All URIs are relative to https://api-eu.dhl.com/parcel/de/shipping/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrders()**](ShipmentsAndLabelsApi.md#createOrders) | **POST** /orders | Create one or more shipments and their documents. (This is the primary call of the API.) |
| [**getLabel()**](ShipmentsAndLabelsApi.md#getLabel) | **GET** /labels | Download PDF document |
| [**getOrder()**](ShipmentsAndLabelsApi.md#getOrder) | **GET** /orders | Retrieve shipment documents - labels and customs documents |
| [**ordersAccountDelete()**](ShipmentsAndLabelsApi.md#ordersAccountDelete) | **DELETE** /orders | Delete one or more shipments |


## `createOrders()`

```php
createOrders($shipment_order_request, $accept_language, $validate, $must_encode, $include_docs, $doc_format, $print_format, $retoure_print_format, $combine): \kruegge82\DHL\Model\LabelDataResponse
```

Create one or more shipments and their documents. (This is the primary call of the API.)

This request is used to create one or more shipments and return corresponding shipment tracking numbers, labels, and documentation. Up to 30 shipments can be created in a single call.  #### Request  The selected products and corresponding billing numbers, as well as the desired services and package details are required to create a shipment. Each shipment can have a dedicated shipper address. The example request body contains sample values for most services.  #### Response  The request will return shipment tracking numbers and the applicable labels for each shipment. If multiple shipments have been included, an HTTP 207 response (multistatus) is returned and holds detailed status for each shipment. Other standard HTTP response codes (401, 500, 400, 200, 429) are possible, too. Labels can be either provided as part of the response (base64 encoded for PDF, text for ZPL) or via URL link for view and download. Note that the format settings per query parameters apply to the shipping label. It may also apply to other labels included, depending on the configuration of your account. Label paper for return shipments can be specified separately since a different printer may be used here. If requesting labels to be provided as URL for separate download, the URLs can be shared. #### Validation   It is recommended to validate the request first prior to shipment creation by setting the `validate` query parameter to `true`. Especially, during development and test, it is recommended to perform this validation. This functionality supports both  * JSON schema validation (against this API description). During development and test, it is recommended to do this validation. JSON schema is available for local validation  * Dry run against the DHL backend  If this succeeds, actual shipment creation will also succeed.

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


$apiInstance = new kruegge82\DHL\Api\ShipmentsAndLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['http_errors'=>false]),
    $config
);
$shipment_order_request = new \kruegge82\DHL\Model\ShipmentOrderRequest(); // \kruegge82\DHL\Model\ShipmentOrderRequest | Shipment order request.
$accept_language = de-DE; // string | Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english.
$validate = false; // bool | If provided and set to `true`, the input document will be:   * validated against JSON schema (/orders/ endpoint) at the API layer. In case of errors, HTTP 400 and details will be returned.   * validated against the DHL backend.   In that case, no state changes are happening, no data is stored, shipments neither deleted nor created, no labels being returned. The call will return a status (200, 400) for each shipment element.
$must_encode = false; // bool | Legacy name **printOnlyIfCodable**. If set to *true*, labels will only be created if an address is encodable. This is only relevant for German consignee addresses. If set to false or left out, addresses, that are not encodable will be printed even though you receive a warning.
$include_docs = 'include'; // string | Legacy name **labelResponseType**. Shipping labels and further shipment documents can be:  * __include__: included as base64 encoded data in the response (default)  * __URL__: provided as URL reference.
$doc_format = 'PDF'; // string | **Defines** the **printable** document format to be used for label and manifest documents.
$print_format = 'print_format_example'; // string | **Defines** the print medium for the shipping label. The different option vary from standard paper sizes DIN A4 and DIN A5 to specific label print formats.  Specific laser print formats using DIN A5 blanks are: * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank: * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats: * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default.
$retoure_print_format = 'retoure_print_format_example'; // string | **Defines** the print medium for the return shipping label. This parameter is only usable, if you do not use **combined printing**. The different option vary from standard paper sizes DIN A4 and DIN A5 to specific label print formats.   Specific laser print formats using DIN A5 blanks are: * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank: * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats: * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default.
$combine = true; // bool | If set, label and return label for one shipment will be printed as single PDF document with possibly multiple pages. Else, those two labels come as separate documents. The option does not affect customs documents and COD labels.

try {
    $result = $apiInstance->createOrders($shipment_order_request, $accept_language, $validate, $must_encode, $include_docs, $doc_format, $print_format, $retoure_print_format, $combine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsAndLabelsApi->createOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_order_request** | [**\kruegge82\DHL\Model\ShipmentOrderRequest**](../Model/ShipmentOrderRequest.md)| Shipment order request. | |
| **accept_language** | **string**| Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english. | [optional] |
| **validate** | **bool**| If provided and set to &#x60;true&#x60;, the input document will be:   * validated against JSON schema (/orders/ endpoint) at the API layer. In case of errors, HTTP 400 and details will be returned.   * validated against the DHL backend.   In that case, no state changes are happening, no data is stored, shipments neither deleted nor created, no labels being returned. The call will return a status (200, 400) for each shipment element. | [optional] [default to false] |
| **must_encode** | **bool**| Legacy name **printOnlyIfCodable**. If set to *true*, labels will only be created if an address is encodable. This is only relevant for German consignee addresses. If set to false or left out, addresses, that are not encodable will be printed even though you receive a warning. | [optional] [default to false] |
| **include_docs** | **string**| Legacy name **labelResponseType**. Shipping labels and further shipment documents can be:  * __include__: included as base64 encoded data in the response (default)  * __URL__: provided as URL reference. | [optional] [default to &#39;include&#39;] |
| **doc_format** | **string**| **Defines** the **printable** document format to be used for label and manifest documents. | [optional] [default to &#39;PDF&#39;] |
| **print_format** | **string**| **Defines** the print medium for the shipping label. The different option vary from standard paper sizes DIN A4 and DIN A5 to specific label print formats.  Specific laser print formats using DIN A5 blanks are: * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank: * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats: * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default. | [optional] |
| **retoure_print_format** | **string**| **Defines** the print medium for the return shipping label. This parameter is only usable, if you do not use **combined printing**. The different option vary from standard paper sizes DIN A4 and DIN A5 to specific label print formats.   Specific laser print formats using DIN A5 blanks are: * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank: * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats: * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default. | [optional] |
| **combine** | **bool**| If set, label and return label for one shipment will be printed as single PDF document with possibly multiple pages. Else, those two labels come as separate documents. The option does not affect customs documents and COD labels. | [optional] [default to true] |

### Return type

[**\kruegge82\DHL\Model\LabelDataResponse**](../Model/LabelDataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLabel()`

```php
getLabel($token): \kruegge82\DHL\Model\LabelDataResponse
```

Download PDF document

Public download URL for shipment labels and documents. The URL is provided in the response of the POST /orders or GET /orders resources. The document is identified via the token query parameter. There is no additional authorization, the resource URL can be shared. Please protect the URL as needed. The call returns a PDF label.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new kruegge82\DHL\Api\ShipmentsAndLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['http_errors'=>false])
);
$token = 'token_example'; // string | Identifies PDF document and requested print settings for download.

try {
    $result = $apiInstance->getLabel($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsAndLabelsApi->getLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Identifies PDF document and requested print settings for download. | |

### Return type

[**\kruegge82\DHL\Model\LabelDataResponse**](../Model/LabelDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($shipment, $accept_language, $doc_format, $print_format, $retoure_print_format, $include_docs, $combine): \kruegge82\DHL\Model\LabelDataResponse
```

Retrieve shipment documents - labels and customs documents

Returns documents for existing shipment(s). The call accepts multiple shipment numbers and will provide sets of documents for those. The **format (PDF,ZPL)** and **method of delivery (URL, encoded, data)** can be selected for **all** shipments and labels in that call. You cannot chose one format and delivery method for one label and different for another label within the same call. You can also specify if you want regular labels, return labels, cod labels, or customsDoc. Any combination is possible.  The call returns for each shipment number the status indicator and the selected labels and documents. If a label type (for example a cod label) does not exist for a shipment, it will not be returned. This is not an error. If you were sending multiple shipments, you will get an HTTP 207 response (multistatus) with detailed status for each shipment. Other standard HTTP response codes (200, 400, 401, 429, 500) are possible as well. Labels can be either provided as part of the response (base64 encoded for PDF, text for ZPL) or via URL link for view and download (PDF). Note that the format settings per query parameters apply to the shipping label. Retoure label paper type can be specified separately since a different printer may be used here. If requesting labels to be returned as URL for separate download, the URLs provided can be shared.

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


$apiInstance = new kruegge82\DHL\Api\ShipmentsAndLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['http_errors'=>false]),
    $config
);
$shipment = array('shipment_example'); // string[] | This parameter identifies shipments. The parameter can be used multiple times in one request to get the labels and/or documents for up to 30 shipments maximum. Only documents and label for shipments that are not yet closed can be retrieved.
$accept_language = de-DE; // string | Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english.
$doc_format = 'PDF'; // string | **Defines** the **printable** document format to be used for label and manifest documents.
$print_format = 'print_format_example'; // string | **Defines** the print medium for the shipping label. The different option vary from standard papersizes DIN A4 and DIN A5 to specific label print formats.   Specific laser print formats using DIN A5 blanks are:  * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank:  * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats:  * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default.
$retoure_print_format = 'retoure_print_format_example'; // string | **Defines** the print medium for the return shipping label. This parameter is only usable, if you do not use **combined printing**. The different option vary from standard papersizes DIN A4 and DIN A5 to specific label print formats.   Specific laser print formats using DIN A5 blanks are:  * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank:  * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats:  * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default.
$include_docs = 'include'; // string | Legacy name **labelResponseType**. Shipping labels and further shipment documents can be:  * __include__: included as base64 encoded data in the response (default)  * __URL__: provided as URL reference.  Default is include the base64 encoded labels.
$combine = true; // bool | If set, label and return label for one shipment will be printed as single PDF document with possibly multiple pages. Else, those two labels come as separate documents. The option does not affect customs documents and COD labels.

try {
    $result = $apiInstance->getOrder($shipment, $accept_language, $doc_format, $print_format, $retoure_print_format, $include_docs, $combine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsAndLabelsApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment** | [**string[]**](../Model/string.md)| This parameter identifies shipments. The parameter can be used multiple times in one request to get the labels and/or documents for up to 30 shipments maximum. Only documents and label for shipments that are not yet closed can be retrieved. | |
| **accept_language** | **string**| Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english. | [optional] |
| **doc_format** | **string**| **Defines** the **printable** document format to be used for label and manifest documents. | [optional] [default to &#39;PDF&#39;] |
| **print_format** | **string**| **Defines** the print medium for the shipping label. The different option vary from standard papersizes DIN A4 and DIN A5 to specific label print formats.   Specific laser print formats using DIN A5 blanks are:  * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank:  * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats:  * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default. | [optional] |
| **retoure_print_format** | **string**| **Defines** the print medium for the return shipping label. This parameter is only usable, if you do not use **combined printing**. The different option vary from standard papersizes DIN A4 and DIN A5 to specific label print formats.   Specific laser print formats using DIN A5 blanks are:  * 910-300-600(-oz) (105 x 205mm) * 910-300-300(-oz) (105 x 148mm)  Specific laser print formats **not** using a DIN A5 blank:  * 910-300-610 (105 x 208mm) * 100x70mm  Specific thermal print formats:  * 910-300-600 (103 x 199mm) * 910-300-400 (103 x 150mm) * 100x70mm  Please use the different formats as follows. If you do not set the parameter the settings of DHL costumer portal account will be used as default. | [optional] |
| **include_docs** | **string**| Legacy name **labelResponseType**. Shipping labels and further shipment documents can be:  * __include__: included as base64 encoded data in the response (default)  * __URL__: provided as URL reference.  Default is include the base64 encoded labels. | [optional] [default to &#39;include&#39;] |
| **combine** | **bool**| If set, label and return label for one shipment will be printed as single PDF document with possibly multiple pages. Else, those two labels come as separate documents. The option does not affect customs documents and COD labels. | [optional] [default to true] |

### Return type

[**\kruegge82\DHL\Model\LabelDataResponse**](../Model/LabelDataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersAccountDelete()`

```php
ordersAccountDelete($profile, $shipment, $accept_language): \kruegge82\DHL\Model\LabelDataResponse
```

Delete one or more shipments

Delete one or more shipments created earlier. Deletion of shipments is only possible prior to them being manifested (closed out, 'Tagesabschluss'). The call will return HTTP 200 (single shipment) or 207 on success, with individual status elements for each shipment. Individual status elements are HTTP 200, 400. 400 will be returned when shipment does not exist (or was already deleted).

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


$apiInstance = new kruegge82\DHL\Api\ShipmentsAndLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['http_errors'=>false]),
    $config
);
$profile = STANDARD_GRUPPENPROFIL; // string | Defines the user group profile. A user group is permitted to specific billing numbers. Shipments are only canceled if they belong to a billing number that the user group profile is entitled to use. This attribute is mandatory. Please use the standard user group profile 'STANDARD_GRUPPENPROFIL' if no dedicated user group profile is available.
$shipment = 123456789; // string | Shipment number that shall be canceled. If multiple shipments shall be canceled, the parameter must be added multiple times. Up to 30 shipments can be canceled at once.
$accept_language = de-DE; // string | Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english.

try {
    $result = $apiInstance->ordersAccountDelete($profile, $shipment, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsAndLabelsApi->ordersAccountDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile** | **string**| Defines the user group profile. A user group is permitted to specific billing numbers. Shipments are only canceled if they belong to a billing number that the user group profile is entitled to use. This attribute is mandatory. Please use the standard user group profile &#39;STANDARD_GRUPPENPROFIL&#39; if no dedicated user group profile is available. | |
| **shipment** | **string**| Shipment number that shall be canceled. If multiple shipments shall be canceled, the parameter must be added multiple times. Up to 30 shipments can be canceled at once. | |
| **accept_language** | **string**| Control the APIs response language via locale abbreviation. English (en-US) and german (de-DE) are supported. If not specified, the default is english. | [optional] |

### Return type

[**\kruegge82\DHL\Model\LabelDataResponse**](../Model/LabelDataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
