# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | Determines the DHL Paket product to be used.  * V01PAK: DHL PAKET; * V53WPAK: DHL PAKET International; * V54EPAK: DHL Europaket; * V62WP: Warenpost; * V66WPI: Warenpost International | [optional]
**billing_number** | **string** | 14 digit long number that identifies the contract the shipment is booked on. Please note that in rare cases the last to characters can be letters. Digit 11 and digit 12 must correspondent to the number of the product, e.g. 333333333301tt can only be used for the product V01PAK (DHL Paket). | [optional]
**ref_no** | **string** | A reference number that the user can assign for better association purposes. It appears on shipment labels. To use the reference number for tracking purposes, it should be at least 8 characters long and unique. | [optional]
**cost_center** | **string** | Textfield that appears on the shipment label. It cannot be used to search for the shipment. | [optional]
**creation_software** | **string** | Is only to be indicated by DHL partners. | [optional]
**ship_date** | **\DateTime** | Date the shipment is transferred to DHL. The shipment date can be the current date or a date up to a few days in the future. It must not be in the past. Iso format required: yyyy-mm-dd. On the shipment date the shipment will be automatically closed at your end of day closing time. | [optional]
**shipper** | [**\OpenAPI\Client\Model\ShipmentShipper**](ShipmentShipper.md) |  | [optional]
**consignee** | [**\OpenAPI\Client\Model\Consignee**](Consignee.md) |  | [optional]
**details** | [**\OpenAPI\Client\Model\ShipmentDetails**](ShipmentDetails.md) |  | [optional]
**services** | [**\OpenAPI\Client\Model\VAS**](VAS.md) |  | [optional]
**customs** | [**\OpenAPI\Client\Model\CustomsDetails**](CustomsDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
