# # CustomsDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_no** | **string** | Invoice number | [optional]
**export_type** | **string** | This contains the category of goods contained in parcel. |
**export_description** | **string** | Mandatory if exporttype is &#39;OTHER&#39; | [optional]
**shipping_conditions** | **string** | Aka &#39;Terms of Trade&#39; aka &#39;Frankatur&#39;. The attribute is exclusively used for the product Europaket (V54EPAK). DDU is deprecated (use DAP instead). | [optional]
**permit_no** | **string** | Permit number. Very rarely needed. Mostly relevant for higher value goods. An example use case would be an item made from crocodile leather which requires dedicated license / permit identified by that number. | [optional]
**attestation_no** | **string** | Attest or certification identified by this number. Very rarely needed. An example use case would be a medical shipment referring to an attestation that a certain amount of medicine may be imported within e.g. the current quarter of the year. | [optional]
**has_electronic_export_notification** | **bool** | flag confirming whether electronic record for export was made | [optional]
**mrn** | **string** |  | [optional]
**postal_charges** | [**\OpenAPI\Client\Model\Value**](Value.md) | Postal charges that have been charged to the recipient. The information must match the information on the invoice. Postal charges are added to the customs value which is the basis for the calculation of import duties. Since 1.1.2021 this information is mandatory according to requirements of the Universal Postal Union. The currency of the postal charges is used throughout the customs declaration form. The currency details of the individual goods items are overwritten by the currency details of the postal charges. |
**office_of_origin** | **string** | Optional. Will appear on CN23. | [optional]
**shipper_customs_ref** | **string** | Optional. The customs reference is used by customs authorities to identify economics operators an/or other persons involved. With the given reference, granted authorizations and/or relevant processes in customs clearance an/or taxation can be taken into account. Aka Zoll-Nummer or EORI-Number but dependent on destination. | [optional]
**consignee_customs_ref** | **string** | Optional. The customs reference is used by customs authorities to identify economics operators an/or other persons involved. With the given reference, granted authorizations and/or relevant processes in customs clearance an/or taxation can be taken into account. Aka Zoll-Nummer or EORI-Number but dependent on destination. | [optional]
**items** | [**\OpenAPI\Client\Model\Commodity[]**](Commodity.md) | Commodity types in that package |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
