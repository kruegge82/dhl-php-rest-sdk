<?php
/**
 * Commodity
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\DHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Shipping API (Post & Parcel Germany)
 *
 * Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.
 *
 * The version of the OpenAPI document: 2.1.11
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\DHL\Model;

use \ArrayAccess;
use \kruegge82\DHL\ObjectSerializer;

/**
 * Commodity Class Doc Comment
 *
 * @category Class
 * @description Commodity line item (e.g. a t-shirt) for international shipments which require individual listing of goods. Each good must contain a description of the item, the amount of the item, the net weight of one single item and the value of one single item. If you ship 5 t-shirts, you need to include the weight and value of one single shirt. The correct final weight and value will be calculated automatically. The HS Code and the country of origin are optional.
 * @package  kruegge82\DHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Commodity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Commodity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_description' => 'string',
        'country_of_origin' => '\kruegge82\DHL\Model\Country',
        'hs_code' => 'string',
        'packaged_quantity' => 'int',
        'item_value' => '\kruegge82\DHL\Model\Value',
        'item_weight' => '\kruegge82\DHL\Model\Weight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_description' => null,
        'country_of_origin' => null,
        'hs_code' => null,
        'packaged_quantity' => 'int32',
        'item_value' => null,
        'item_weight' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'item_description' => false,
        'country_of_origin' => false,
        'hs_code' => false,
        'packaged_quantity' => false,
        'item_value' => false,
        'item_weight' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'item_description' => 'itemDescription',
        'country_of_origin' => 'countryOfOrigin',
        'hs_code' => 'hsCode',
        'packaged_quantity' => 'packagedQuantity',
        'item_value' => 'itemValue',
        'item_weight' => 'itemWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_description' => 'setItemDescription',
        'country_of_origin' => 'setCountryOfOrigin',
        'hs_code' => 'setHsCode',
        'packaged_quantity' => 'setPackagedQuantity',
        'item_value' => 'setItemValue',
        'item_weight' => 'setItemWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_description' => 'getItemDescription',
        'country_of_origin' => 'getCountryOfOrigin',
        'hs_code' => 'getHsCode',
        'packaged_quantity' => 'getPackagedQuantity',
        'item_value' => 'getItemValue',
        'item_weight' => 'getItemWeight'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('item_description', $data ?? [], null);
        $this->setIfExists('country_of_origin', $data ?? [], null);
        $this->setIfExists('hs_code', $data ?? [], null);
        $this->setIfExists('packaged_quantity', $data ?? [], null);
        $this->setIfExists('item_value', $data ?? [], null);
        $this->setIfExists('item_weight', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_description'] === null) {
            $invalidProperties[] = "'item_description' can't be null";
        }
        if ((mb_strlen($this->container['item_description']) > 256)) {
            $invalidProperties[] = "invalid value for 'item_description', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['item_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'item_description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['hs_code']) && (mb_strlen($this->container['hs_code']) > 11)) {
            $invalidProperties[] = "invalid value for 'hs_code', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['hs_code']) && (mb_strlen($this->container['hs_code']) < 6)) {
            $invalidProperties[] = "invalid value for 'hs_code', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['packaged_quantity'] === null) {
            $invalidProperties[] = "'packaged_quantity' can't be null";
        }
        if ($this->container['item_value'] === null) {
            $invalidProperties[] = "'item_value' can't be null";
        }
        if ($this->container['item_weight'] === null) {
            $invalidProperties[] = "'item_weight' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets item_description
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string $item_description A text that describes the commodity item. Only the first 50 characters of the description text is printed on the customs declaration form CN23.
     *
     * @return self
     */
    public function setItemDescription($item_description)
    {
        if (is_null($item_description)) {
            throw new \InvalidArgumentException('non-nullable item_description cannot be null');
        }
        if ((mb_strlen($item_description) > 256)) {
            throw new \InvalidArgumentException('invalid length for $item_description when calling Commodity., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($item_description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $item_description when calling Commodity., must be bigger than or equal to 1.');
        }

        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets country_of_origin
     *
     * @return \kruegge82\DHL\Model\Country|null
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param \kruegge82\DHL\Model\Country|null $country_of_origin country_of_origin
     *
     * @return self
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        if (is_null($country_of_origin)) {
            throw new \InvalidArgumentException('non-nullable country_of_origin cannot be null');
        }
        $this->container['country_of_origin'] = $country_of_origin;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string|null
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string|null $hs_code Harmonized System Code aka Customs tariff number.
     *
     * @return self
     */
    public function setHsCode($hs_code)
    {
        if (is_null($hs_code)) {
            throw new \InvalidArgumentException('non-nullable hs_code cannot be null');
        }
        if ((mb_strlen($hs_code) > 11)) {
            throw new \InvalidArgumentException('invalid length for $hs_code when calling Commodity., must be smaller than or equal to 11.');
        }
        if ((mb_strlen($hs_code) < 6)) {
            throw new \InvalidArgumentException('invalid length for $hs_code when calling Commodity., must be bigger than or equal to 6.');
        }

        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets packaged_quantity
     *
     * @return int
     */
    public function getPackagedQuantity()
    {
        return $this->container['packaged_quantity'];
    }

    /**
     * Sets packaged_quantity
     *
     * @param int $packaged_quantity How many items of that type are in the package
     *
     * @return self
     */
    public function setPackagedQuantity($packaged_quantity)
    {
        if (is_null($packaged_quantity)) {
            throw new \InvalidArgumentException('non-nullable packaged_quantity cannot be null');
        }
        $this->container['packaged_quantity'] = $packaged_quantity;

        return $this;
    }

    /**
     * Gets item_value
     *
     * @return \kruegge82\DHL\Model\Value
     */
    public function getItemValue()
    {
        return $this->container['item_value'];
    }

    /**
     * Sets item_value
     *
     * @param \kruegge82\DHL\Model\Value $item_value item_value
     *
     * @return self
     */
    public function setItemValue($item_value)
    {
        if (is_null($item_value)) {
            throw new \InvalidArgumentException('non-nullable item_value cannot be null');
        }
        $this->container['item_value'] = $item_value;

        return $this;
    }

    /**
     * Gets item_weight
     *
     * @return \kruegge82\DHL\Model\Weight
     */
    public function getItemWeight()
    {
        return $this->container['item_weight'];
    }

    /**
     * Sets item_weight
     *
     * @param \kruegge82\DHL\Model\Weight $item_weight item_weight
     *
     * @return self
     */
    public function setItemWeight($item_weight)
    {
        if (is_null($item_weight)) {
            throw new \InvalidArgumentException('non-nullable item_weight cannot be null');
        }
        $this->container['item_weight'] = $item_weight;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


