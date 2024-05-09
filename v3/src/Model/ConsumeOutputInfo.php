<?php
/**
 * ConsumeOutputInfo
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
 * ConsumeOutputInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConsumeOutputInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsumeOutputInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billNo' => 'string',
        'categoryName' => 'string',
        'consumeAmount' => 'string',
        'consumeDate' => 'string',
        'consumeTitle' => 'string',
        'payeeName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billNo' => null,
        'categoryName' => null,
        'consumeAmount' => null,
        'consumeDate' => null,
        'consumeTitle' => null,
        'payeeName' => null
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
        'billNo' => 'bill_no',
        'categoryName' => 'category_name',
        'consumeAmount' => 'consume_amount',
        'consumeDate' => 'consume_date',
        'consumeTitle' => 'consume_title',
        'payeeName' => 'payee_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billNo' => 'setBillNo',
        'categoryName' => 'setCategoryName',
        'consumeAmount' => 'setConsumeAmount',
        'consumeDate' => 'setConsumeDate',
        'consumeTitle' => 'setConsumeTitle',
        'payeeName' => 'setPayeeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billNo' => 'getBillNo',
        'categoryName' => 'getCategoryName',
        'consumeAmount' => 'getConsumeAmount',
        'consumeDate' => 'getConsumeDate',
        'consumeTitle' => 'getConsumeTitle',
        'payeeName' => 'getPayeeName'
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
        $this->container['billNo'] = $data['billNo'] ?? null;
        $this->container['categoryName'] = $data['categoryName'] ?? null;
        $this->container['consumeAmount'] = $data['consumeAmount'] ?? null;
        $this->container['consumeDate'] = $data['consumeDate'] ?? null;
        $this->container['consumeTitle'] = $data['consumeTitle'] ?? null;
        $this->container['payeeName'] = $data['payeeName'] ?? null;
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
     * Gets billNo
     *
     * @return string|null
     */
    public function getBillNo()
    {
        return $this->container['billNo'];
    }

    /**
     * Sets billNo
     *
     * @param string|null $billNo 支付宝交易号
     *
     * @return self
     */
    public function setBillNo($billNo)
    {
        $this->container['billNo'] = $billNo;

        return $this;
    }

    /**
     * Gets categoryName
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string|null $categoryName 账单分类
     *
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;

        return $this;
    }

    /**
     * Gets consumeAmount
     *
     * @return string|null
     */
    public function getConsumeAmount()
    {
        return $this->container['consumeAmount'];
    }

    /**
     * Sets consumeAmount
     *
     * @param string|null $consumeAmount 金额
     *
     * @return self
     */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;

        return $this;
    }

    /**
     * Gets consumeDate
     *
     * @return string|null
     */
    public function getConsumeDate()
    {
        return $this->container['consumeDate'];
    }

    /**
     * Sets consumeDate
     *
     * @param string|null $consumeDate 日期
     *
     * @return self
     */
    public function setConsumeDate($consumeDate)
    {
        $this->container['consumeDate'] = $consumeDate;

        return $this;
    }

    /**
     * Gets consumeTitle
     *
     * @return string|null
     */
    public function getConsumeTitle()
    {
        return $this->container['consumeTitle'];
    }

    /**
     * Sets consumeTitle
     *
     * @param string|null $consumeTitle 交易记录标题
     *
     * @return self
     */
    public function setConsumeTitle($consumeTitle)
    {
        $this->container['consumeTitle'] = $consumeTitle;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string|null $payeeName 商家名称
     *
     * @return self
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

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


