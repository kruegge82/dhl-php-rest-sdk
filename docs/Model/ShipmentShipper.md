# # ShipmentShipper

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name1** | **string** | Name1. Line 1 of name information |
**name2** | **string** | An optional, additional line of name information | [optional]
**name3** | **string** | An optional, additional line of name information | [optional]
**address_street** | **string** | Line 1 of the street address. This is just the street name. Can also include house number. |
**address_house** | **string** | Line 1 of the street address. This is just the house number. Can be added to street name instead. | [optional]
**postal_code** | **string** | Mandatory for all countries but Ireland that use a postal code system. | [optional]
**city** | **string** | city |
**country** | [**\OpenAPI\Client\Model\Country**](Country.md) |  |
**contact_name** | **string** | optional contact name. (this is not the primary name printed on label) | [optional]
**email** | **string** | Optional contact email address of the shipper | [optional]
**shipper_ref** | **string** | Reference string to the shipper data configured in GKP(GeschÃ¤ftskundenportal - Business Costumer Portal). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
