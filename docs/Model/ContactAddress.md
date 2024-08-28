# # ContactAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name1** | **string** | Name1. Line 1 of name information |
**name2** | **string** | An optional, additional line of name information | [optional]
**name3** | **string** | An optional, additional line of name information | [optional]
**dispatching_information** | **string** | An optional, additional line of address. It&#39;s only usable for a few countries, e.g. Belgium. It is positioned below name3 on the label. | [optional]
**address_street** | **string** | Line 1 of the street address. This is just the street name. Can also include house number. |
**address_house** | **string** | Line 1 of the street address. This is just the house number. Can be added to street name instead. | [optional]
**additional_address_information1** | **string** | Additional information that is positioned either behind or below addressStreet on the label. If it is printed and where exactly depends on the country. | [optional]
**additional_address_information2** | **string** | Additional information that is positioned either behind or below addressStreet on the label. If it is printed and where exactly depends on the country. | [optional]
**postal_code** | **string** | Mandatory for all countries but Ireland that use a postal code system. | [optional]
**city** | **string** | city |
**state** | **string** | State, province or territory. For the USA please use the official regional ISO-Codes, e.g. US-AL. | [optional]
**country** | [**\OpenAPI\Client\Model\Country**](Country.md) |  |
**contact_name** | **string** | optional contact name. (this is not the primary name printed on label) | [optional]
**phone** | **string** | Please note that, in accordance with Art. 4 No. 11 GDPR, you must obtain the recipient&#39;s consent to forward their phone number to Deutsche Post DHL Group. For shipments within Germany, the phone number cannot be transmitted. In some countries the provision of a telephone number and/or e-mail address is mandatory for a delivery to a droppoint. If your recipient has objected to the disclosure of their telephone number and/or e-mail address, the shipment can only be delivered in these countries using the service Premium. | [optional]
**email** | **string** | Please note that, in accordance with Art. 4 No. 11 GDPR, you must obtain the recipient&#39;s consent to forward their e-mail address to Deutsche Post DHL Group. For shipments within Germany, the e-mail address is used to send a DHL Parcel Notification to the recipient. The e-mail address is not mandatory for shipments within Germany. In some countries the provision of a telephone number and/or e-mail address is mandatory for a delivery to a droppoint. If your recipient has objected to the disclosure of their telephone number and/or e-mail address, the shipment can only be delivered in these countries using the service Premium. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
