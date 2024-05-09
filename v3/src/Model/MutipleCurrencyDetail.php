<?php
/**
 * MutipleCurrencyDetail
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
 * MutipleCurrencyDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MutipleCurrencyDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MutipleCurrencyDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extInfo' => 'string',
        'paymentAmount' => 'string',
        'paymentCurrency' => 'string',
        'settlementAmount' => 'string',
        'settlementCurrency' => 'string',
        'transAmount' => 'string',
        'transCurrency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extInfo' => null,
        'paymentAmount' => null,
        'paymentCurrency' => null,
        'settlementAmount' => null,
        'settlementCurrency' => null,
        'transAmount' => null,
        'transCurrency' => null
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
        'extInfo' => 'ext_info',
        'paymentAmount' => 'payment_amount',
        'paymentCurrency' => 'payment_currency',
        'settlementAmount' => 'settlement_amount',
        'settlementCurrency' => 'settlement_currency',
        'transAmount' => 'trans_amount',
        'transCurrency' => 'trans_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extInfo' => 'setExtInfo',
        'paymentAmount' => 'setPaymentAmount',
        'paymentCurrency' => 'setPaymentCurrency',
        'settlementAmount' => 'setSettlementAmount',
        'settlementCurrency' => 'setSettlementCurrency',
        'transAmount' => 'setTransAmount',
        'transCurrency' => 'setTransCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extInfo' => 'getExtInfo',
        'paymentAmount' => 'getPaymentAmount',
        'paymentCurrency' => 'getPaymentCurrency',
        'settlementAmount' => 'getSettlementAmount',
        'settlementCurrency' => 'getSettlementCurrency',
        'transAmount' => 'getTransAmount',
        'transCurrency' => 'getTransCurrency'
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
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['paymentAmount'] = $data['paymentAmount'] ?? null;
        $this->container['paymentCurrency'] = $data['paymentCurrency'] ?? null;
        $this->container['settlementAmount'] = $data['settlementAmount'] ?? null;
        $this->container['settlementCurrency'] = $data['settlementCurrency'] ?? null;
        $this->container['transAmount'] = $data['transAmount'] ?? null;
        $this->container['transCurrency'] = $data['transCurrency'] ?? null;
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
     * Gets extInfo
     *
     * @return string|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param string|null $extInfo 扩展字段
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets paymentAmount
     *
     * @return string|null
     */
    public function getPaymentAmount()
    {
        return $this->container['paymentAmount'];
    }

    /**
     * Sets paymentAmount
     *
     * @param string|null $paymentAmount 支付金额，单位为该币种基础计价单位，如人民币为：元
     *
     * @return self
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->container['paymentAmount'] = $paymentAmount;

        return $this;
    }

    /**
     * Gets paymentCurrency
     *
     * @return string|null
     */
    public function getPaymentCurrency()
    {
        return $this->container['paymentCurrency'];
    }

    /**
     * Sets paymentCurrency
     *
     * @param string|null $paymentCurrency 支付币种
     *
     * @return self
     */
    public function setPaymentCurrency($paymentCurrency)
    {
        $this->container['paymentCurrency'] = $paymentCurrency;

        return $this;
    }

    /**
     * Gets settlementAmount
     *
     * @return string|null
     */
    public function getSettlementAmount()
    {
        return $this->container['settlementAmount'];
    }

    /**
     * Sets settlementAmount
     *
     * @param string|null $settlementAmount 清算金额，单位为该币种基础计价单位，如人民币为：元
     *
     * @return self
     */
    public function setSettlementAmount($settlementAmount)
    {
        $this->container['settlementAmount'] = $settlementAmount;

        return $this;
    }

    /**
     * Gets settlementCurrency
     *
     * @return string|null
     */
    public function getSettlementCurrency()
    {
        return $this->container['settlementCurrency'];
    }

    /**
     * Sets settlementCurrency
     *
     * @param string|null $settlementCurrency 清算币种
     *
     * @return self
     */
    public function setSettlementCurrency($settlementCurrency)
    {
        $this->container['settlementCurrency'] = $settlementCurrency;

        return $this;
    }

    /**
     * Gets transAmount
     *
     * @return string|null
     */
    public function getTransAmount()
    {
        return $this->container['transAmount'];
    }

    /**
     * Sets transAmount
     *
     * @param string|null $transAmount 转账金额，单位为该币种基础计价单位，如人民币为：元
     *
     * @return self
     */
    public function setTransAmount($transAmount)
    {
        $this->container['transAmount'] = $transAmount;

        return $this;
    }

    /**
     * Gets transCurrency
     *
     * @return string|null
     */
    public function getTransCurrency()
    {
        return $this->container['transCurrency'];
    }

    /**
     * Sets transCurrency
     *
     * @param string|null $transCurrency 转账币种
     *
     * @return self
     */
    public function setTransCurrency($transCurrency)
    {
        $this->container['transCurrency'] = $transCurrency;

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


