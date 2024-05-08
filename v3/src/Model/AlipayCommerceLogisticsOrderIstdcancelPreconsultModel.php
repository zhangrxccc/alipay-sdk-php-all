<?php
/**
 * AlipayCommerceLogisticsOrderIstdcancelPreconsultModel
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
 * AlipayCommerceLogisticsOrderIstdcancelPreconsultModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceLogisticsOrderIstdcancelPreconsultModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceLogisticsOrderIstdcancelPreconsultModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancelReason' => 'string',
        'cancelReasonId' => 'string',
        'logisticsCode' => 'string',
        'orderNo' => 'string',
        'outOrderNo' => 'string',
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
        'cancelReason' => null,
        'cancelReasonId' => null,
        'logisticsCode' => null,
        'orderNo' => null,
        'outOrderNo' => null,
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
        'cancelReason' => 'cancel_reason',
        'cancelReasonId' => 'cancel_reason_id',
        'logisticsCode' => 'logistics_code',
        'orderNo' => 'order_no',
        'outOrderNo' => 'out_order_no',
        'waybillNo' => 'waybill_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancelReason' => 'setCancelReason',
        'cancelReasonId' => 'setCancelReasonId',
        'logisticsCode' => 'setLogisticsCode',
        'orderNo' => 'setOrderNo',
        'outOrderNo' => 'setOutOrderNo',
        'waybillNo' => 'setWaybillNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancelReason' => 'getCancelReason',
        'cancelReasonId' => 'getCancelReasonId',
        'logisticsCode' => 'getLogisticsCode',
        'orderNo' => 'getOrderNo',
        'outOrderNo' => 'getOutOrderNo',
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
        $this->container['cancelReason'] = $data['cancelReason'] ?? null;
        $this->container['cancelReasonId'] = $data['cancelReasonId'] ?? null;
        $this->container['logisticsCode'] = $data['logisticsCode'] ?? null;
        $this->container['orderNo'] = $data['orderNo'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
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
     * Gets cancelReason
     *
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->container['cancelReason'];
    }

    /**
     * Sets cancelReason
     *
     * @param string|null $cancelReason 取消原因，取消原因id为i_6时必填
     *
     * @return self
     */
    public function setCancelReason($cancelReason)
    {
        $this->container['cancelReason'] = $cancelReason;

        return $this;
    }

    /**
     * Gets cancelReasonId
     *
     * @return string|null
     */
    public function getCancelReasonId()
    {
        return $this->container['cancelReasonId'];
    }

    /**
     * Sets cancelReasonId
     *
     * @param string|null $cancelReasonId 取消原因id
     *
     * @return self
     */
    public function setCancelReasonId($cancelReasonId)
    {
        $this->container['cancelReasonId'] = $cancelReasonId;

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
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 商家订单号，与order_no不能同时为空
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

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


