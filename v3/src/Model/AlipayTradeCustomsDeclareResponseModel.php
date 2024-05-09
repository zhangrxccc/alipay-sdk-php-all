<?php
/**
 * AlipayTradeCustomsDeclareResponseModel
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
 * AlipayTradeCustomsDeclareResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeCustomsDeclareResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeCustomsDeclareResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayDeclareNo' => 'string',
        'currency' => 'string',
        'identityCheck' => 'string',
        'outTradeNo' => 'string',
        'payCode' => 'string',
        'payTransactionId' => 'string',
        'totalAmount' => 'string',
        'tradeNo' => 'string',
        'verDept' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayDeclareNo' => null,
        'currency' => null,
        'identityCheck' => null,
        'outTradeNo' => null,
        'payCode' => null,
        'payTransactionId' => null,
        'totalAmount' => null,
        'tradeNo' => null,
        'verDept' => null
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
        'alipayDeclareNo' => 'alipay_declare_no',
        'currency' => 'currency',
        'identityCheck' => 'identity_check',
        'outTradeNo' => 'out_trade_no',
        'payCode' => 'pay_code',
        'payTransactionId' => 'pay_transaction_id',
        'totalAmount' => 'total_amount',
        'tradeNo' => 'trade_no',
        'verDept' => 'ver_dept'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayDeclareNo' => 'setAlipayDeclareNo',
        'currency' => 'setCurrency',
        'identityCheck' => 'setIdentityCheck',
        'outTradeNo' => 'setOutTradeNo',
        'payCode' => 'setPayCode',
        'payTransactionId' => 'setPayTransactionId',
        'totalAmount' => 'setTotalAmount',
        'tradeNo' => 'setTradeNo',
        'verDept' => 'setVerDept'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayDeclareNo' => 'getAlipayDeclareNo',
        'currency' => 'getCurrency',
        'identityCheck' => 'getIdentityCheck',
        'outTradeNo' => 'getOutTradeNo',
        'payCode' => 'getPayCode',
        'payTransactionId' => 'getPayTransactionId',
        'totalAmount' => 'getTotalAmount',
        'tradeNo' => 'getTradeNo',
        'verDept' => 'getVerDept'
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
        $this->container['alipayDeclareNo'] = $data['alipayDeclareNo'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['identityCheck'] = $data['identityCheck'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['payCode'] = $data['payCode'] ?? null;
        $this->container['payTransactionId'] = $data['payTransactionId'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
        $this->container['verDept'] = $data['verDept'] ?? null;
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
     * Gets alipayDeclareNo
     *
     * @return string|null
     */
    public function getAlipayDeclareNo()
    {
        return $this->container['alipayDeclareNo'];
    }

    /**
     * Sets alipayDeclareNo
     *
     * @param string|null $alipayDeclareNo 支付宝报关流水号。
     *
     * @return self
     */
    public function setAlipayDeclareNo($alipayDeclareNo)
    {
        $this->container['alipayDeclareNo'] = $alipayDeclareNo;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency 币种
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets identityCheck
     *
     * @return string|null
     */
    public function getIdentityCheck()
    {
        return $this->container['identityCheck'];
    }

    /**
     * Sets identityCheck
     *
     * @param string|null $identityCheck 订购人身份信息和支付人的身份信息验证结果。T表示商户传入的订购人姓名和身份证号和支付人的姓名和身份证号一致。F代表商户传入的订购人姓名和身份证号和支付人的姓名和身份证号不一致。对于同一笔报关单支付宝只会校验一次，如果多次重推不会返回此参数。
     *
     * @return self
     */
    public function setIdentityCheck($identityCheck)
    {
        $this->container['identityCheck'] = $identityCheck;

        return $this;
    }

    /**
     * Gets outTradeNo
     *
     * @return string|null
     */
    public function getOutTradeNo()
    {
        return $this->container['outTradeNo'];
    }

    /**
     * Sets outTradeNo
     *
     * @param string|null $outTradeNo 国际站外部订单号
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets payCode
     *
     * @return string|null
     */
    public function getPayCode()
    {
        return $this->container['payCode'];
    }

    /**
     * Sets payCode
     *
     * @param string|null $payCode 支付机构注册号
     *
     * @return self
     */
    public function setPayCode($payCode)
    {
        $this->container['payCode'] = $payCode;

        return $this;
    }

    /**
     * Gets payTransactionId
     *
     * @return string|null
     */
    public function getPayTransactionId()
    {
        return $this->container['payTransactionId'];
    }

    /**
     * Sets payTransactionId
     *
     * @param string|null $payTransactionId 清算流水号
     *
     * @return self
     */
    public function setPayTransactionId($payTransactionId)
    {
        $this->container['payTransactionId'] = $payTransactionId;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param string|null $totalAmount 交易总金额(单位:分)
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets tradeNo
     *
     * @return string|null
     */
    public function getTradeNo()
    {
        return $this->container['tradeNo'];
    }

    /**
     * Sets tradeNo
     *
     * @param string|null $tradeNo 支付宝推送到海关的支付单据号。
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

        return $this;
    }

    /**
     * Gets verDept
     *
     * @return string|null
     */
    public function getVerDept()
    {
        return $this->container['verDept'];
    }

    /**
     * Sets verDept
     *
     * @param string|null $verDept 清算机构标志（1-cup,2-null,3-other）
     *
     * @return self
     */
    public function setVerDept($verDept)
    {
        $this->container['verDept'] = $verDept;

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


