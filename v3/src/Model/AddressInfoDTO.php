<?php
/**
 * AddressInfoDTO
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
 * The version of the OpenAPI document: 2024-04-28
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
 * AddressInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddressInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'address' => 'string',
        'addressId' => 'string',
        'cityCode' => 'string',
        'cityName' => 'string',
        'community' => 'string',
        'enterpriseId' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'mark' => 'string',
        'poiId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'address' => null,
        'addressId' => null,
        'cityCode' => null,
        'cityName' => null,
        'community' => null,
        'enterpriseId' => null,
        'latitude' => null,
        'longitude' => null,
        'mark' => null,
        'poiId' => null
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
        'accountId' => 'account_id',
        'address' => 'address',
        'addressId' => 'address_id',
        'cityCode' => 'city_code',
        'cityName' => 'city_name',
        'community' => 'community',
        'enterpriseId' => 'enterprise_id',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'mark' => 'mark',
        'poiId' => 'poi_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'address' => 'setAddress',
        'addressId' => 'setAddressId',
        'cityCode' => 'setCityCode',
        'cityName' => 'setCityName',
        'community' => 'setCommunity',
        'enterpriseId' => 'setEnterpriseId',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'mark' => 'setMark',
        'poiId' => 'setPoiId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'address' => 'getAddress',
        'addressId' => 'getAddressId',
        'cityCode' => 'getCityCode',
        'cityName' => 'getCityName',
        'community' => 'getCommunity',
        'enterpriseId' => 'getEnterpriseId',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'mark' => 'getMark',
        'poiId' => 'getPoiId'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['addressId'] = $data['addressId'] ?? null;
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['cityName'] = $data['cityName'] ?? null;
        $this->container['community'] = $data['community'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['mark'] = $data['mark'] ?? null;
        $this->container['poiId'] = $data['poiId'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 共同账户id，当入参传入共同账户id时返回该值
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 详细地址
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets addressId
     *
     * @return string|null
     */
    public function getAddressId()
    {
        return $this->container['addressId'];
    }

    /**
     * Sets addressId
     *
     * @param string|null $addressId 地址id
     *
     * @return self
     */
    public function setAddressId($addressId)
    {
        $this->container['addressId'] = $addressId;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 市(国家统一行政规划编码)
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets cityName
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->container['cityName'];
    }

    /**
     * Sets cityName
     *
     * @param string|null $cityName 城市
     *
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->container['cityName'] = $cityName;

        return $this;
    }

    /**
     * Gets community
     *
     * @return string|null
     */
    public function getCommunity()
    {
        return $this->container['community'];
    }

    /**
     * Sets community
     *
     * @param string|null $community 小区/楼宇
     *
     * @return self
     */
    public function setCommunity($community)
    {
        $this->container['community'] = $community;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业id，当入参传入企业id时返回该值
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude 纬度
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude 经度
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets mark
     *
     * @return string|null
     */
    public function getMark()
    {
        return $this->container['mark'];
    }

    /**
     * Sets mark
     *
     * @param string|null $mark 备注
     *
     * @return self
     */
    public function setMark($mark)
    {
        $this->container['mark'] = $mark;

        return $this;
    }

    /**
     * Gets poiId
     *
     * @return string|null
     */
    public function getPoiId()
    {
        return $this->container['poiId'];
    }

    /**
     * Sets poiId
     *
     * @param string|null $poiId 地图poi
     *
     * @return self
     */
    public function setPoiId($poiId)
    {
        $this->container['poiId'] = $poiId;

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


