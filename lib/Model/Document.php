<?php
/**
 * Document
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
 * The version of the OpenAPI document: 2.1.10
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
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
 * Document Class Doc Comment
 *
 * @category Class
 * @description Encoded document. All types of labels and documents.
 * @package  kruegge82\DHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Document implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'b64' => 'string',
        'zpl2' => 'string',
        'url' => 'string',
        'file_format' => 'string',
        'print_format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'b64' => null,
        'zpl2' => null,
        'url' => null,
        'file_format' => null,
        'print_format' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'b64' => false,
        'zpl2' => false,
        'url' => false,
        'file_format' => false,
        'print_format' => false
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
        'b64' => 'b64',
        'zpl2' => 'zpl2',
        'url' => 'url',
        'file_format' => 'fileFormat',
        'print_format' => 'printFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'b64' => 'setB64',
        'zpl2' => 'setZpl2',
        'url' => 'setUrl',
        'file_format' => 'setFileFormat',
        'print_format' => 'setPrintFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'b64' => 'getB64',
        'zpl2' => 'getZpl2',
        'url' => 'getUrl',
        'file_format' => 'getFileFormat',
        'print_format' => 'getPrintFormat'
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

    public const FILE_FORMAT_ZPL2 = 'ZPL2';
    public const FILE_FORMAT_PDF = 'PDF';
    public const PRINT_FORMAT_A4_PT = 'A4-PT';
    public const PRINT_FORMAT_A4 = 'A4';
    public const PRINT_FORMAT__910_300_700 = '910-300-700';
    public const PRINT_FORMAT__910_300_700_O_Z_OZ = '910-300-700-oZ/oz';
    public const PRINT_FORMAT__910_300_300 = '910-300-300';
    public const PRINT_FORMAT__910_300_300_OZ = '910-300-300-oz';
    public const PRINT_FORMAT__910_300_710 = '910-300-710';
    public const PRINT_FORMAT__910_300_600_610 = '910-300-600/610';
    public const PRINT_FORMAT__910_300_400_410 = '910-300-400/410';
    public const PRINT_FORMAT__100X70MM = '100x70mm';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFileFormatAllowableValues()
    {
        return [
            self::FILE_FORMAT_ZPL2,
            self::FILE_FORMAT_PDF,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrintFormatAllowableValues()
    {
        return [
            self::PRINT_FORMAT_A4_PT,
            self::PRINT_FORMAT_A4,
            self::PRINT_FORMAT__910_300_700,
            self::PRINT_FORMAT__910_300_700_O_Z_OZ,
            self::PRINT_FORMAT__910_300_300,
            self::PRINT_FORMAT__910_300_300_OZ,
            self::PRINT_FORMAT__910_300_710,
            self::PRINT_FORMAT__910_300_600_610,
            self::PRINT_FORMAT__910_300_400_410,
            self::PRINT_FORMAT__100X70MM,
        ];
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
        $this->setIfExists('b64', $data ?? [], null);
        $this->setIfExists('zpl2', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('file_format', $data ?? [], null);
        $this->setIfExists('print_format', $data ?? [], null);
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

        $allowedValues = $this->getFileFormatAllowableValues();
        if (!is_null($this->container['file_format']) && !in_array($this->container['file_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'file_format', must be one of '%s'",
                $this->container['file_format'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPrintFormatAllowableValues();
        if (!is_null($this->container['print_format']) && !in_array($this->container['print_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'print_format', must be one of '%s'",
                $this->container['print_format'],
                implode("', '", $allowedValues)
            );
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
     * Gets b64
     *
     * @return string|null
     */
    public function getB64()
    {
        return $this->container['b64'];
    }

    /**
     * Sets b64
     *
     * @param string|null $b64 The Base64 encoded byte stream
     *
     * @return self
     */
    public function setB64($b64)
    {
        if (is_null($b64)) {
            throw new \InvalidArgumentException('non-nullable b64 cannot be null');
        }
        $this->container['b64'] = $b64;

        return $this;
    }

    /**
     * Gets zpl2
     *
     * @return string|null
     */
    public function getZpl2()
    {
        return $this->container['zpl2'];
    }

    /**
     * Sets zpl2
     *
     * @param string|null $zpl2 The document in zpl encoding
     *
     * @return self
     */
    public function setZpl2($zpl2)
    {
        if (is_null($zpl2)) {
            throw new \InvalidArgumentException('non-nullable zpl2 cannot be null');
        }
        $this->container['zpl2'] = $zpl2;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL reference to download document
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets file_format
     *
     * @return string|null
     */
    public function getFileFormat()
    {
        return $this->container['file_format'];
    }

    /**
     * Sets file_format
     *
     * @param string|null $file_format format of the encoded bytes
     *
     * @return self
     */
    public function setFileFormat($file_format)
    {
        if (is_null($file_format)) {
            throw new \InvalidArgumentException('non-nullable file_format cannot be null');
        }
        $allowedValues = $this->getFileFormatAllowableValues();
        if (!in_array($file_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'file_format', must be one of '%s'",
                    $file_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['file_format'] = $file_format;

        return $this;
    }

    /**
     * Gets print_format
     *
     * @return string|null
     */
    public function getPrintFormat()
    {
        return $this->container['print_format'];
    }

    /**
     * Sets print_format
     *
     * @param string|null $print_format The print format used. Customs documents and cash on delivery documents can only be returned in format A4.
     *
     * @return self
     */
    public function setPrintFormat($print_format)
    {
        if (is_null($print_format)) {
            throw new \InvalidArgumentException('non-nullable print_format cannot be null');
        }
        $allowedValues = $this->getPrintFormatAllowableValues();
        if (!in_array($print_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'print_format', must be one of '%s'",
                    $print_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['print_format'] = $print_format;

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


