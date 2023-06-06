<?php
/**
 * AlipayCommerceLogisticsOrderInstantdeliveryCreateResponseModel
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
 * The version of the OpenAPI document: 2023-06-06
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
 * AlipayCommerceLogisticsOrderInstantdeliveryCreateResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceLogisticsOrderInstantdeliveryCreateResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceLogisticsOrderInstantdeliveryCreateResponseModel';

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
        'finishCode' => 'string',
        'insuranceFee' => 'string',
        'orderNo' => 'string',
        'payAmount' => 'string',
        'pickupCode' => 'string',
        'status' => 'string',
        'waybillNo' => 'string'
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
        'finishCode' => null,
        'insuranceFee' => null,
        'orderNo' => null,
        'payAmount' => null,
        'pickupCode' => null,
        'status' => null,
        'waybillNo' => null
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
        'finishCode' => 'finish_code',
        'insuranceFee' => 'insurance_fee',
        'orderNo' => 'order_no',
        'payAmount' => 'pay_amount',
        'pickupCode' => 'pickup_code',
        'status' => 'status',
        'waybillNo' => 'waybill_no'
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
        'finishCode' => 'setFinishCode',
        'insuranceFee' => 'setInsuranceFee',
        'orderNo' => 'setOrderNo',
        'payAmount' => 'setPayAmount',
        'pickupCode' => 'setPickupCode',
        'status' => 'setStatus',
        'waybillNo' => 'setWaybillNo'
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
        'finishCode' => 'getFinishCode',
        'insuranceFee' => 'getInsuranceFee',
        'orderNo' => 'getOrderNo',
        'payAmount' => 'getPayAmount',
        'pickupCode' => 'getPickupCode',
        'status' => 'getStatus',
        'waybillNo' => 'getWaybillNo'
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
        $this->container['finishCode'] = $data['finishCode'] ?? null;
        $this->container['insuranceFee'] = $data['insuranceFee'] ?? null;
        $this->container['orderNo'] = $data['orderNo'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['pickupCode'] = $data['pickupCode'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['waybillNo'] = $data['waybillNo'] ?? null;
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
     * @param int|null $dispatchDuration 预计骑手还剩多久接单，单位：秒
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
     * @param int|null $distance 配送距离
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
     * Gets finishCode
     *
     * @return string|null
     */
    public function getFinishCode()
    {
        return $this->container['finishCode'];
    }

    /**
     * Sets finishCode
     *
     * @param string|null $finishCode 收货码，骑手必须输入收货码才能完成订单妥投
     *
     * @return self
     */
    public function setFinishCode($finishCode)
    {
        $this->container['finishCode'] = $finishCode;

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
     * Gets orderNo
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string|null $orderNo 支付宝订单流水号
     *
     * @return self
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

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
     * @param string|null $payAmount 支付金额, 实际扣减的费用以此字段为准
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets pickupCode
     *
     * @return string|null
     */
    public function getPickupCode()
    {
        return $this->container['pickupCode'];
    }

    /**
     * Sets pickupCode
     *
     * @param string|null $pickupCode 取货码, 骑手必须输入取货码才能从商家取货
     *
     * @return self
     */
    public function setPickupCode($pickupCode)
    {
        $this->container['pickupCode'] = $pickupCode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 即时配送运单状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets waybillNo
     *
     * @return string|null
     */
    public function getWaybillNo()
    {
        return $this->container['waybillNo'];
    }

    /**
     * Sets waybillNo
     *
     * @param string|null $waybillNo 即时配送运单编号
     *
     * @return self
     */
    public function setWaybillNo($waybillNo)
    {
        $this->container['waybillNo'] = $waybillNo;

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

