<?php
/**
 * AliosOpenAutoInfoQueryResponseModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2024-04-18
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AliosOpenAutoInfoQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AliosOpenAutoInfoQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AliosOpenAutoInfoQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'engineNo' => 'string',
        'licenseNo' => 'string',
        'userActivationTime' => 'string',
        'vehicleType' => 'string',
        'vin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'engineNo' => null,
        'licenseNo' => null,
        'userActivationTime' => null,
        'vehicleType' => null,
        'vin' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'engineNo' => 'engine_no',
        'licenseNo' => 'license_no',
        'userActivationTime' => 'user_activation_time',
        'vehicleType' => 'vehicle_type',
        'vin' => 'vin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'engineNo' => 'setEngineNo',
        'licenseNo' => 'setLicenseNo',
        'userActivationTime' => 'setUserActivationTime',
        'vehicleType' => 'setVehicleType',
        'vin' => 'setVin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'engineNo' => 'getEngineNo',
        'licenseNo' => 'getLicenseNo',
        'userActivationTime' => 'getUserActivationTime',
        'vehicleType' => 'getVehicleType',
        'vin' => 'getVin'
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
        $this->container['engineNo'] = $data['engineNo'] ?? null;
        $this->container['licenseNo'] = $data['licenseNo'] ?? null;
        $this->container['userActivationTime'] = $data['userActivationTime'] ?? null;
        $this->container['vehicleType'] = $data['vehicleType'] ?? null;
        $this->container['vin'] = $data['vin'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets engineNo
     *
     * @return string|null
     */
    public function getEngineNo()
    {
        return $this->container['engineNo'];
    }

    /**
     * Sets engineNo
     *
     * @param string|null $engineNo 发动机号
     *
     * @return self
     */
    public function setEngineNo($engineNo)
    {
        $this->container['engineNo'] = $engineNo;

        return $this;
    }

    /**
     * Gets licenseNo
     *
     * @return string|null
     */
    public function getLicenseNo()
    {
        return $this->container['licenseNo'];
    }

    /**
     * Sets licenseNo
     *
     * @param string|null $licenseNo 车牌号
     *
     * @return self
     */
    public function setLicenseNo($licenseNo)
    {
        $this->container['licenseNo'] = $licenseNo;

        return $this;
    }

    /**
     * Gets userActivationTime
     *
     * @return string|null
     */
    public function getUserActivationTime()
    {
        return $this->container['userActivationTime'];
    }

    /**
     * Sets userActivationTime
     *
     * @param string|null $userActivationTime 用户激活时间
     *
     * @return self
     */
    public function setUserActivationTime($userActivationTime)
    {
        $this->container['userActivationTime'] = $userActivationTime;

        return $this;
    }

    /**
     * Gets vehicleType
     *
     * @return string|null
     */
    public function getVehicleType()
    {
        return $this->container['vehicleType'];
    }

    /**
     * Sets vehicleType
     *
     * @param string|null $vehicleType 车辆类型
     *
     * @return self
     */
    public function setVehicleType($vehicleType)
    {
        $this->container['vehicleType'] = $vehicleType;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return string|null
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param string|null $vin 车辆识别号码
     *
     * @return self
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

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


