<?php
/**
 * FaceMerchantInfo
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
 * FaceMerchantInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FaceMerchantInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FaceMerchantInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'areaCode' => 'string',
        'brandCode' => 'string',
        'deviceMac' => 'string',
        'deviceNum' => 'string',
        'geo' => 'string',
        'group' => 'string',
        'merchantId' => 'string',
        'partnerId' => 'string',
        'storeCode' => 'string',
        'wifimac' => 'string',
        'wifiname' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'areaCode' => null,
        'brandCode' => null,
        'deviceMac' => null,
        'deviceNum' => null,
        'geo' => null,
        'group' => null,
        'merchantId' => null,
        'partnerId' => null,
        'storeCode' => null,
        'wifimac' => null,
        'wifiname' => null
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
        'areaCode' => 'area_code',
        'brandCode' => 'brand_code',
        'deviceMac' => 'device_mac',
        'deviceNum' => 'device_num',
        'geo' => 'geo',
        'group' => 'group',
        'merchantId' => 'merchant_id',
        'partnerId' => 'partner_id',
        'storeCode' => 'store_code',
        'wifimac' => 'wifimac',
        'wifiname' => 'wifiname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areaCode' => 'setAreaCode',
        'brandCode' => 'setBrandCode',
        'deviceMac' => 'setDeviceMac',
        'deviceNum' => 'setDeviceNum',
        'geo' => 'setGeo',
        'group' => 'setGroup',
        'merchantId' => 'setMerchantId',
        'partnerId' => 'setPartnerId',
        'storeCode' => 'setStoreCode',
        'wifimac' => 'setWifimac',
        'wifiname' => 'setWifiname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areaCode' => 'getAreaCode',
        'brandCode' => 'getBrandCode',
        'deviceMac' => 'getDeviceMac',
        'deviceNum' => 'getDeviceNum',
        'geo' => 'getGeo',
        'group' => 'getGroup',
        'merchantId' => 'getMerchantId',
        'partnerId' => 'getPartnerId',
        'storeCode' => 'getStoreCode',
        'wifimac' => 'getWifimac',
        'wifiname' => 'getWifiname'
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
        $this->container['areaCode'] = $data['areaCode'] ?? null;
        $this->container['brandCode'] = $data['brandCode'] ?? null;
        $this->container['deviceMac'] = $data['deviceMac'] ?? null;
        $this->container['deviceNum'] = $data['deviceNum'] ?? null;
        $this->container['geo'] = $data['geo'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['merchantId'] = $data['merchantId'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['storeCode'] = $data['storeCode'] ?? null;
        $this->container['wifimac'] = $data['wifimac'] ?? null;
        $this->container['wifiname'] = $data['wifiname'] ?? null;
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
     * Gets areaCode
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->container['areaCode'];
    }

    /**
     * Sets areaCode
     *
     * @param string|null $areaCode 区域编码
     *
     * @return self
     */
    public function setAreaCode($areaCode)
    {
        $this->container['areaCode'] = $areaCode;

        return $this;
    }

    /**
     * Gets brandCode
     *
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->container['brandCode'];
    }

    /**
     * Sets brandCode
     *
     * @param string|null $brandCode 品牌编码
     *
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->container['brandCode'] = $brandCode;

        return $this;
    }

    /**
     * Gets deviceMac
     *
     * @return string|null
     */
    public function getDeviceMac()
    {
        return $this->container['deviceMac'];
    }

    /**
     * Sets deviceMac
     *
     * @param string|null $deviceMac 机具Mac地址
     *
     * @return self
     */
    public function setDeviceMac($deviceMac)
    {
        $this->container['deviceMac'] = $deviceMac;

        return $this;
    }

    /**
     * Gets deviceNum
     *
     * @return string|null
     */
    public function getDeviceNum()
    {
        return $this->container['deviceNum'];
    }

    /**
     * Sets deviceNum
     *
     * @param string|null $deviceNum 机具编码
     *
     * @return self
     */
    public function setDeviceNum($deviceNum)
    {
        $this->container['deviceNum'] = $deviceNum;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return string|null
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param string|null $geo 经纬度
     *
     * @return self
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group 机具分组编码
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string|null $merchantId 商户ID
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId ISV ID
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets storeCode
     *
     * @return string|null
     */
    public function getStoreCode()
    {
        return $this->container['storeCode'];
    }

    /**
     * Sets storeCode
     *
     * @param string|null $storeCode 门店编码
     *
     * @return self
     */
    public function setStoreCode($storeCode)
    {
        $this->container['storeCode'] = $storeCode;

        return $this;
    }

    /**
     * Gets wifimac
     *
     * @return string|null
     */
    public function getWifimac()
    {
        return $this->container['wifimac'];
    }

    /**
     * Sets wifimac
     *
     * @param string|null $wifimac WI-FI Mac地址
     *
     * @return self
     */
    public function setWifimac($wifimac)
    {
        $this->container['wifimac'] = $wifimac;

        return $this;
    }

    /**
     * Gets wifiname
     *
     * @return string|null
     */
    public function getWifiname()
    {
        return $this->container['wifiname'];
    }

    /**
     * Sets wifiname
     *
     * @param string|null $wifiname WI-FI 名称
     *
     * @return self
     */
    public function setWifiname($wifiname)
    {
        $this->container['wifiname'] = $wifiname;

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


