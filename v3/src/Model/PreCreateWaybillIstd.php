<?php
/**
 * PreCreateWaybillIstd
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
 * PreCreateWaybillIstd Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PreCreateWaybillIstd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PreCreateWaybillIstd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'couponFee' => 'string',
        'deliverFee' => 'string',
        'dispatchDuration' => 'int',
        'distance' => 'int',
        'fee' => 'string',
        'insuranceFee' => 'string',
        'logisticsCode' => 'string',
        'logisticsToken' => 'string',
        'payAmount' => 'string',
        'serviceCode' => 'string',
        'thirdCode' => 'string',
        'thirdSubCode' => 'string',
        'thirdSubMsg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'couponFee' => null,
        'deliverFee' => null,
        'dispatchDuration' => null,
        'distance' => null,
        'fee' => null,
        'insuranceFee' => null,
        'logisticsCode' => null,
        'logisticsToken' => null,
        'payAmount' => null,
        'serviceCode' => null,
        'thirdCode' => null,
        'thirdSubCode' => null,
        'thirdSubMsg' => null
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
        'couponFee' => 'coupon_fee',
        'deliverFee' => 'deliver_fee',
        'dispatchDuration' => 'dispatch_duration',
        'distance' => 'distance',
        'fee' => 'fee',
        'insuranceFee' => 'insurance_fee',
        'logisticsCode' => 'logistics_code',
        'logisticsToken' => 'logistics_token',
        'payAmount' => 'pay_amount',
        'serviceCode' => 'service_code',
        'thirdCode' => 'third_code',
        'thirdSubCode' => 'third_sub_code',
        'thirdSubMsg' => 'third_sub_msg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'couponFee' => 'setCouponFee',
        'deliverFee' => 'setDeliverFee',
        'dispatchDuration' => 'setDispatchDuration',
        'distance' => 'setDistance',
        'fee' => 'setFee',
        'insuranceFee' => 'setInsuranceFee',
        'logisticsCode' => 'setLogisticsCode',
        'logisticsToken' => 'setLogisticsToken',
        'payAmount' => 'setPayAmount',
        'serviceCode' => 'setServiceCode',
        'thirdCode' => 'setThirdCode',
        'thirdSubCode' => 'setThirdSubCode',
        'thirdSubMsg' => 'setThirdSubMsg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'couponFee' => 'getCouponFee',
        'deliverFee' => 'getDeliverFee',
        'dispatchDuration' => 'getDispatchDuration',
        'distance' => 'getDistance',
        'fee' => 'getFee',
        'insuranceFee' => 'getInsuranceFee',
        'logisticsCode' => 'getLogisticsCode',
        'logisticsToken' => 'getLogisticsToken',
        'payAmount' => 'getPayAmount',
        'serviceCode' => 'getServiceCode',
        'thirdCode' => 'getThirdCode',
        'thirdSubCode' => 'getThirdSubCode',
        'thirdSubMsg' => 'getThirdSubMsg'
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
        $this->container['couponFee'] = $data['couponFee'] ?? null;
        $this->container['deliverFee'] = $data['deliverFee'] ?? null;
        $this->container['dispatchDuration'] = $data['dispatchDuration'] ?? null;
        $this->container['distance'] = $data['distance'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['insuranceFee'] = $data['insuranceFee'] ?? null;
        $this->container['logisticsCode'] = $data['logisticsCode'] ?? null;
        $this->container['logisticsToken'] = $data['logisticsToken'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['serviceCode'] = $data['serviceCode'] ?? null;
        $this->container['thirdCode'] = $data['thirdCode'] ?? null;
        $this->container['thirdSubCode'] = $data['thirdSubCode'] ?? null;
        $this->container['thirdSubMsg'] = $data['thirdSubMsg'] ?? null;
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
     * Gets couponFee
     *
     * @return string|null
     */
    public function getCouponFee()
    {
        return $this->container['couponFee'];
    }

    /**
     * Sets couponFee
     *
     * @param string|null $couponFee 优惠券费用
     *
     * @return self
     */
    public function setCouponFee($couponFee)
    {
        $this->container['couponFee'] = $couponFee;

        return $this;
    }

    /**
     * Gets deliverFee
     *
     * @return string|null
     */
    public function getDeliverFee()
    {
        return $this->container['deliverFee'];
    }

    /**
     * Sets deliverFee
     *
     * @param string|null $deliverFee 运费
     *
     * @return self
     */
    public function setDeliverFee($deliverFee)
    {
        $this->container['deliverFee'] = $deliverFee;

        return $this;
    }

    /**
     * Gets dispatchDuration
     *
     * @return int|null
     */
    public function getDispatchDuration()
    {
        return $this->container['dispatchDuration'];
    }

    /**
     * Sets dispatchDuration
     *
     * @param int|null $dispatchDuration 预计骑手还剩多久接单（单位：秒）
     *
     * @return self
     */
    public function setDispatchDuration($dispatchDuration)
    {
        $this->container['dispatchDuration'] = $dispatchDuration;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return int|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param int|null $distance 配送距离(单位：米)
     *
     * @return self
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee 实际运费
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets insuranceFee
     *
     * @return string|null
     */
    public function getInsuranceFee()
    {
        return $this->container['insuranceFee'];
    }

    /**
     * Sets insuranceFee
     *
     * @param string|null $insuranceFee 保价费用
     *
     * @return self
     */
    public function setInsuranceFee($insuranceFee)
    {
        $this->container['insuranceFee'] = $insuranceFee;

        return $this;
    }

    /**
     * Gets logisticsCode
     *
     * @return string|null
     */
    public function getLogisticsCode()
    {
        return $this->container['logisticsCode'];
    }

    /**
     * Sets logisticsCode
     *
     * @param string|null $logisticsCode 即时配送公司编码
     *
     * @return self
     */
    public function setLogisticsCode($logisticsCode)
    {
        $this->container['logisticsCode'] = $logisticsCode;

        return $this;
    }

    /**
     * Gets logisticsToken
     *
     * @return string|null
     */
    public function getLogisticsToken()
    {
        return $this->container['logisticsToken'];
    }

    /**
     * Sets logisticsToken
     *
     * @param string|null $logisticsToken 配送公司可以返回此字段，当商家下单时候带上这个字段，保证在一段时间内运费不变
     *
     * @return self
     */
    public function setLogisticsToken($logisticsToken)
    {
        $this->container['logisticsToken'] = $logisticsToken;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return string|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param string|null $payAmount 支付金额，实际扣减的费用以此字段为准
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets serviceCode
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string|null $serviceCode 即时配送公司服务代码
     *
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    /**
     * Gets thirdCode
     *
     * @return string|null
     */
    public function getThirdCode()
    {
        return $this->container['thirdCode'];
    }

    /**
     * Sets thirdCode
     *
     * @param string|null $thirdCode 即时配送公司返回的响应码。10000表示业务处理成功，40004表示业务处理失败。
     *
     * @return self
     */
    public function setThirdCode($thirdCode)
    {
        $this->container['thirdCode'] = $thirdCode;

        return $this;
    }

    /**
     * Gets thirdSubCode
     *
     * @return string|null
     */
    public function getThirdSubCode()
    {
        return $this->container['thirdSubCode'];
    }

    /**
     * Sets thirdSubCode
     *
     * @param string|null $thirdSubCode 即时配送公司返回的错误码
     *
     * @return self
     */
    public function setThirdSubCode($thirdSubCode)
    {
        $this->container['thirdSubCode'] = $thirdSubCode;

        return $this;
    }

    /**
     * Gets thirdSubMsg
     *
     * @return string|null
     */
    public function getThirdSubMsg()
    {
        return $this->container['thirdSubMsg'];
    }

    /**
     * Sets thirdSubMsg
     *
     * @param string|null $thirdSubMsg 即时配送公司返回的错误描述
     *
     * @return self
     */
    public function setThirdSubMsg($thirdSubMsg)
    {
        $this->container['thirdSubMsg'] = $thirdSubMsg;

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


