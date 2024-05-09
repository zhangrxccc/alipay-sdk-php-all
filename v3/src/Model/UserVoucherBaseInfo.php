<?php
/**
 * UserVoucherBaseInfo
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
 * UserVoucherBaseInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserVoucherBaseInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserVoucherBaseInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'associateTradeNo' => 'string',
        'belongMerchantId' => 'string',
        'createTime' => 'string',
        'validBeginTime' => 'string',
        'validEndTime' => 'string',
        'voucherCode' => 'string',
        'voucherId' => 'string',
        'voucherMaxUseTimes' => 'int',
        'voucherName' => 'string',
        'voucherStatus' => 'string',
        'voucherUsedTimes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'associateTradeNo' => null,
        'belongMerchantId' => null,
        'createTime' => null,
        'validBeginTime' => null,
        'validEndTime' => null,
        'voucherCode' => null,
        'voucherId' => null,
        'voucherMaxUseTimes' => null,
        'voucherName' => null,
        'voucherStatus' => null,
        'voucherUsedTimes' => null
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
        'associateTradeNo' => 'associate_trade_no',
        'belongMerchantId' => 'belong_merchant_id',
        'createTime' => 'create_time',
        'validBeginTime' => 'valid_begin_time',
        'validEndTime' => 'valid_end_time',
        'voucherCode' => 'voucher_code',
        'voucherId' => 'voucher_id',
        'voucherMaxUseTimes' => 'voucher_max_use_times',
        'voucherName' => 'voucher_name',
        'voucherStatus' => 'voucher_status',
        'voucherUsedTimes' => 'voucher_used_times'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'associateTradeNo' => 'setAssociateTradeNo',
        'belongMerchantId' => 'setBelongMerchantId',
        'createTime' => 'setCreateTime',
        'validBeginTime' => 'setValidBeginTime',
        'validEndTime' => 'setValidEndTime',
        'voucherCode' => 'setVoucherCode',
        'voucherId' => 'setVoucherId',
        'voucherMaxUseTimes' => 'setVoucherMaxUseTimes',
        'voucherName' => 'setVoucherName',
        'voucherStatus' => 'setVoucherStatus',
        'voucherUsedTimes' => 'setVoucherUsedTimes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'associateTradeNo' => 'getAssociateTradeNo',
        'belongMerchantId' => 'getBelongMerchantId',
        'createTime' => 'getCreateTime',
        'validBeginTime' => 'getValidBeginTime',
        'validEndTime' => 'getValidEndTime',
        'voucherCode' => 'getVoucherCode',
        'voucherId' => 'getVoucherId',
        'voucherMaxUseTimes' => 'getVoucherMaxUseTimes',
        'voucherName' => 'getVoucherName',
        'voucherStatus' => 'getVoucherStatus',
        'voucherUsedTimes' => 'getVoucherUsedTimes'
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
        $this->container['associateTradeNo'] = $data['associateTradeNo'] ?? null;
        $this->container['belongMerchantId'] = $data['belongMerchantId'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['validBeginTime'] = $data['validBeginTime'] ?? null;
        $this->container['validEndTime'] = $data['validEndTime'] ?? null;
        $this->container['voucherCode'] = $data['voucherCode'] ?? null;
        $this->container['voucherId'] = $data['voucherId'] ?? null;
        $this->container['voucherMaxUseTimes'] = $data['voucherMaxUseTimes'] ?? null;
        $this->container['voucherName'] = $data['voucherName'] ?? null;
        $this->container['voucherStatus'] = $data['voucherStatus'] ?? null;
        $this->container['voucherUsedTimes'] = $data['voucherUsedTimes'] ?? null;
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
     * Gets associateTradeNo
     *
     * @return string|null
     */
    public function getAssociateTradeNo()
    {
        return $this->container['associateTradeNo'];
    }

    /**
     * Sets associateTradeNo
     *
     * @param string|null $associateTradeNo 若商家券操作过关联商户订单信息，则该字段返回商家券已关联的商户订单号。
     *
     * @return self
     */
    public function setAssociateTradeNo($associateTradeNo)
    {
        $this->container['associateTradeNo'] = $associateTradeNo;

        return $this;
    }

    /**
     * Gets belongMerchantId
     *
     * @return string|null
     */
    public function getBelongMerchantId()
    {
        return $this->container['belongMerchantId'];
    }

    /**
     * Sets belongMerchantId
     *
     * @param string|null $belongMerchantId 券归属商户
     *
     * @return self
     */
    public function setBelongMerchantId($belongMerchantId)
    {
        $this->container['belongMerchantId'] = $belongMerchantId;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 领券时间
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets validBeginTime
     *
     * @return string|null
     */
    public function getValidBeginTime()
    {
        return $this->container['validBeginTime'];
    }

    /**
     * Sets validBeginTime
     *
     * @param string|null $validBeginTime 券可使用的开始时间。 格式为：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setValidBeginTime($validBeginTime)
    {
        $this->container['validBeginTime'] = $validBeginTime;

        return $this;
    }

    /**
     * Gets validEndTime
     *
     * @return string|null
     */
    public function getValidEndTime()
    {
        return $this->container['validEndTime'];
    }

    /**
     * Sets validEndTime
     *
     * @param string|null $validEndTime 券可使用的结束时间。 格式为yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setValidEndTime($validEndTime)
    {
        $this->container['validEndTime'] = $validEndTime;

        return $this;
    }

    /**
     * Gets voucherCode
     *
     * @return string|null
     */
    public function getVoucherCode()
    {
        return $this->container['voucherCode'];
    }

    /**
     * Sets voucherCode
     *
     * @param string|null $voucherCode 用户领取的券码code,支付宝商家券活动才会返回券码，其他优惠券活动该值为空
     *
     * @return self
     */
    public function setVoucherCode($voucherCode)
    {
        $this->container['voucherCode'] = $voucherCode;

        return $this;
    }

    /**
     * Gets voucherId
     *
     * @return string|null
     */
    public function getVoucherId()
    {
        return $this->container['voucherId'];
    }

    /**
     * Sets voucherId
     *
     * @param string|null $voucherId 用户券 id。支付宝为用户优惠券唯一分配的 id。
     *
     * @return self
     */
    public function setVoucherId($voucherId)
    {
        $this->container['voucherId'] = $voucherId;

        return $this;
    }

    /**
     * Gets voucherMaxUseTimes
     *
     * @return int|null
     */
    public function getVoucherMaxUseTimes()
    {
        return $this->container['voucherMaxUseTimes'];
    }

    /**
     * Sets voucherMaxUseTimes
     *
     * @param int|null $voucherMaxUseTimes 券最大核销次数
     *
     * @return self
     */
    public function setVoucherMaxUseTimes($voucherMaxUseTimes)
    {
        $this->container['voucherMaxUseTimes'] = $voucherMaxUseTimes;

        return $this;
    }

    /**
     * Gets voucherName
     *
     * @return string|null
     */
    public function getVoucherName()
    {
        return $this->container['voucherName'];
    }

    /**
     * Sets voucherName
     *
     * @param string|null $voucherName 对消费者展示的券(商品)名称。
     *
     * @return self
     */
    public function setVoucherName($voucherName)
    {
        $this->container['voucherName'] = $voucherName;

        return $this;
    }

    /**
     * Gets voucherStatus
     *
     * @return string|null
     */
    public function getVoucherStatus()
    {
        return $this->container['voucherStatus'];
    }

    /**
     * Sets voucherStatus
     *
     * @param string|null $voucherStatus 券状态。SENDED:可用 USED:已核销(即完全使用), EXPIRED:已过期(只能查询6个月内数据)
     *
     * @return self
     */
    public function setVoucherStatus($voucherStatus)
    {
        $this->container['voucherStatus'] = $voucherStatus;

        return $this;
    }

    /**
     * Gets voucherUsedTimes
     *
     * @return int|null
     */
    public function getVoucherUsedTimes()
    {
        return $this->container['voucherUsedTimes'];
    }

    /**
     * Sets voucherUsedTimes
     *
     * @param int|null $voucherUsedTimes 券已核销次数
     *
     * @return self
     */
    public function setVoucherUsedTimes($voucherUsedTimes)
    {
        $this->container['voucherUsedTimes'] = $voucherUsedTimes;

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


