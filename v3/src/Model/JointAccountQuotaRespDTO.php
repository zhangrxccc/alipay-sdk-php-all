<?php
/**
 * JointAccountQuotaRespDTO
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
 * JointAccountQuotaRespDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JointAccountQuotaRespDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JointAccountQuotaRespDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customBeginDate' => 'string',
        'customEndDate' => 'string',
        'quotaDimension' => 'string',
        'quotaRemain' => 'string',
        'quotaRemainCount' => 'string',
        'quotaTotal' => 'string',
        'quotaUsed' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customBeginDate' => null,
        'customEndDate' => null,
        'quotaDimension' => null,
        'quotaRemain' => null,
        'quotaRemainCount' => null,
        'quotaTotal' => null,
        'quotaUsed' => null
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
        'customBeginDate' => 'custom_begin_date',
        'customEndDate' => 'custom_end_date',
        'quotaDimension' => 'quota_dimension',
        'quotaRemain' => 'quota_remain',
        'quotaRemainCount' => 'quota_remain_count',
        'quotaTotal' => 'quota_total',
        'quotaUsed' => 'quota_used'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customBeginDate' => 'setCustomBeginDate',
        'customEndDate' => 'setCustomEndDate',
        'quotaDimension' => 'setQuotaDimension',
        'quotaRemain' => 'setQuotaRemain',
        'quotaRemainCount' => 'setQuotaRemainCount',
        'quotaTotal' => 'setQuotaTotal',
        'quotaUsed' => 'setQuotaUsed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customBeginDate' => 'getCustomBeginDate',
        'customEndDate' => 'getCustomEndDate',
        'quotaDimension' => 'getQuotaDimension',
        'quotaRemain' => 'getQuotaRemain',
        'quotaRemainCount' => 'getQuotaRemainCount',
        'quotaTotal' => 'getQuotaTotal',
        'quotaUsed' => 'getQuotaUsed'
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
        $this->container['customBeginDate'] = $data['customBeginDate'] ?? null;
        $this->container['customEndDate'] = $data['customEndDate'] ?? null;
        $this->container['quotaDimension'] = $data['quotaDimension'] ?? null;
        $this->container['quotaRemain'] = $data['quotaRemain'] ?? null;
        $this->container['quotaRemainCount'] = $data['quotaRemainCount'] ?? null;
        $this->container['quotaTotal'] = $data['quotaTotal'] ?? null;
        $this->container['quotaUsed'] = $data['quotaUsed'] ?? null;
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
     * Gets customBeginDate
     *
     * @return string|null
     */
    public function getCustomBeginDate()
    {
        return $this->container['customBeginDate'];
    }

    /**
     * Sets customBeginDate
     *
     * @param string|null $customBeginDate 额度生效起始日期，精确到分钟。 格式：yyyy-MM-dd HH:mm
     *
     * @return self
     */
    public function setCustomBeginDate($customBeginDate)
    {
        $this->container['customBeginDate'] = $customBeginDate;

        return $this;
    }

    /**
     * Gets customEndDate
     *
     * @return string|null
     */
    public function getCustomEndDate()
    {
        return $this->container['customEndDate'];
    }

    /**
     * Sets customEndDate
     *
     * @param string|null $customEndDate 额度失效结束日期，精确到分钟。 格式：yyyy-MM-dd HH:mm
     *
     * @return self
     */
    public function setCustomEndDate($customEndDate)
    {
        $this->container['customEndDate'] = $customEndDate;

        return $this;
    }

    /**
     * Gets quotaDimension
     *
     * @return string|null
     */
    public function getQuotaDimension()
    {
        return $this->container['quotaDimension'];
    }

    /**
     * Sets quotaDimension
     *
     * @param string|null $quotaDimension 额度维度
     *
     * @return self
     */
    public function setQuotaDimension($quotaDimension)
    {
        $this->container['quotaDimension'] = $quotaDimension;

        return $this;
    }

    /**
     * Gets quotaRemain
     *
     * @return string|null
     */
    public function getQuotaRemain()
    {
        return $this->container['quotaRemain'];
    }

    /**
     * Sets quotaRemain
     *
     * @param string|null $quotaRemain 剩余额度
     *
     * @return self
     */
    public function setQuotaRemain($quotaRemain)
    {
        $this->container['quotaRemain'] = $quotaRemain;

        return $this;
    }

    /**
     * Gets quotaRemainCount
     *
     * @return string|null
     */
    public function getQuotaRemainCount()
    {
        return $this->container['quotaRemainCount'];
    }

    /**
     * Sets quotaRemainCount
     *
     * @param string|null $quotaRemainCount 展示额度剩余可用次数，-1表示无限次
     *
     * @return self
     */
    public function setQuotaRemainCount($quotaRemainCount)
    {
        $this->container['quotaRemainCount'] = $quotaRemainCount;

        return $this;
    }

    /**
     * Gets quotaTotal
     *
     * @return string|null
     */
    public function getQuotaTotal()
    {
        return $this->container['quotaTotal'];
    }

    /**
     * Sets quotaTotal
     *
     * @param string|null $quotaTotal 协议额度
     *
     * @return self
     */
    public function setQuotaTotal($quotaTotal)
    {
        $this->container['quotaTotal'] = $quotaTotal;

        return $this;
    }

    /**
     * Gets quotaUsed
     *
     * @return string|null
     */
    public function getQuotaUsed()
    {
        return $this->container['quotaUsed'];
    }

    /**
     * Sets quotaUsed
     *
     * @param string|null $quotaUsed 已用额度
     *
     * @return self
     */
    public function setQuotaUsed($quotaUsed)
    {
        $this->container['quotaUsed'] = $quotaUsed;

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


