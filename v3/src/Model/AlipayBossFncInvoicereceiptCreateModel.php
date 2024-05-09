<?php
/**
 * AlipayBossFncInvoicereceiptCreateModel
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
 * AlipayBossFncInvoicereceiptCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayBossFncInvoicereceiptCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayBossFncInvoicereceiptCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eventCode' => 'string',
        'eventType' => 'string',
        'monthlyBill' => '\Alipay\OpenAPISDK\Model\ArMonthlyBillDTO',
        'msgId' => 'string',
        'outBizType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'eventCode' => null,
        'eventType' => null,
        'monthlyBill' => null,
        'msgId' => null,
        'outBizType' => null
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
        'eventCode' => 'event_code',
        'eventType' => 'event_type',
        'monthlyBill' => 'monthly_bill',
        'msgId' => 'msg_id',
        'outBizType' => 'out_biz_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eventCode' => 'setEventCode',
        'eventType' => 'setEventType',
        'monthlyBill' => 'setMonthlyBill',
        'msgId' => 'setMsgId',
        'outBizType' => 'setOutBizType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eventCode' => 'getEventCode',
        'eventType' => 'getEventType',
        'monthlyBill' => 'getMonthlyBill',
        'msgId' => 'getMsgId',
        'outBizType' => 'getOutBizType'
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
        $this->container['eventCode'] = $data['eventCode'] ?? null;
        $this->container['eventType'] = $data['eventType'] ?? null;
        $this->container['monthlyBill'] = $data['monthlyBill'] ?? null;
        $this->container['msgId'] = $data['msgId'] ?? null;
        $this->container['outBizType'] = $data['outBizType'] ?? null;
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
     * Gets eventCode
     *
     * @return string|null
     */
    public function getEventCode()
    {
        return $this->container['eventCode'];
    }

    /**
     * Sets eventCode
     *
     * @param string|null $eventCode 账单金额变更消息事件码  AR_MTHLY_BILL_CREATE:应收账单创建,  AR_MTHLY_BILL_CHANGE:应收金额更新
     *
     * @return self
     */
    public function setEventCode($eventCode)
    {
        $this->container['eventCode'] = $eventCode;

        return $this;
    }

    /**
     * Gets eventType
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string|null $eventType 账单金额变更消息事件类型  CREATE:创建事件,UPDATE:更新事件
     *
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets monthlyBill
     *
     * @return \Alipay\OpenAPISDK\Model\ArMonthlyBillDTO|null
     */
    public function getMonthlyBill()
    {
        return $this->container['monthlyBill'];
    }

    /**
     * Sets monthlyBill
     *
     * @param \Alipay\OpenAPISDK\Model\ArMonthlyBillDTO|null $monthlyBill monthlyBill
     *
     * @return self
     */
    public function setMonthlyBill($monthlyBill)
    {
        $this->container['monthlyBill'] = $monthlyBill;

        return $this;
    }

    /**
     * Gets msgId
     *
     * @return string|null
     */
    public function getMsgId()
    {
        return $this->container['msgId'];
    }

    /**
     * Sets msgId
     *
     * @param string|null $msgId 事件全局id，可以使用uuid
     *
     * @return self
     */
    public function setMsgId($msgId)
    {
        $this->container['msgId'] = $msgId;

        return $this;
    }

    /**
     * Gets outBizType
     *
     * @return string|null
     */
    public function getOutBizType()
    {
        return $this->container['outBizType'];
    }

    /**
     * Sets outBizType
     *
     * @param string|null $outBizType 消息来源 01:主站，02：芝麻，03:金融云,04:微贷
     *
     * @return self
     */
    public function setOutBizType($outBizType)
    {
        $this->container['outBizType'] = $outBizType;

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


