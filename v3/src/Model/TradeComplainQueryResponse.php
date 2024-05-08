<?php
/**
 * TradeComplainQueryResponse
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
 * TradeComplainQueryResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TradeComplainQueryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TradeComplainQueryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'complainEventId' => 'string',
        'complainReason' => 'string',
        'content' => 'string',
        'gmtCreate' => 'string',
        'gmtFinished' => 'string',
        'gmtModified' => 'string',
        'images' => 'string[]',
        'leafCategoryName' => 'string',
        'merchantOrderNo' => 'string',
        'phoneNo' => 'string',
        'status' => 'string',
        'targetId' => 'string',
        'targetType' => 'string',
        'tradeNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'complainEventId' => null,
        'complainReason' => null,
        'content' => null,
        'gmtCreate' => null,
        'gmtFinished' => null,
        'gmtModified' => null,
        'images' => null,
        'leafCategoryName' => null,
        'merchantOrderNo' => null,
        'phoneNo' => null,
        'status' => null,
        'targetId' => null,
        'targetType' => null,
        'tradeNo' => null
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
        'complainEventId' => 'complain_event_id',
        'complainReason' => 'complain_reason',
        'content' => 'content',
        'gmtCreate' => 'gmt_create',
        'gmtFinished' => 'gmt_finished',
        'gmtModified' => 'gmt_modified',
        'images' => 'images',
        'leafCategoryName' => 'leaf_category_name',
        'merchantOrderNo' => 'merchant_order_no',
        'phoneNo' => 'phone_no',
        'status' => 'status',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'tradeNo' => 'trade_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'complainEventId' => 'setComplainEventId',
        'complainReason' => 'setComplainReason',
        'content' => 'setContent',
        'gmtCreate' => 'setGmtCreate',
        'gmtFinished' => 'setGmtFinished',
        'gmtModified' => 'setGmtModified',
        'images' => 'setImages',
        'leafCategoryName' => 'setLeafCategoryName',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'phoneNo' => 'setPhoneNo',
        'status' => 'setStatus',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType',
        'tradeNo' => 'setTradeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'complainEventId' => 'getComplainEventId',
        'complainReason' => 'getComplainReason',
        'content' => 'getContent',
        'gmtCreate' => 'getGmtCreate',
        'gmtFinished' => 'getGmtFinished',
        'gmtModified' => 'getGmtModified',
        'images' => 'getImages',
        'leafCategoryName' => 'getLeafCategoryName',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'phoneNo' => 'getPhoneNo',
        'status' => 'getStatus',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType',
        'tradeNo' => 'getTradeNo'
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
        $this->container['complainEventId'] = $data['complainEventId'] ?? null;
        $this->container['complainReason'] = $data['complainReason'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtFinished'] = $data['gmtFinished'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['leafCategoryName'] = $data['leafCategoryName'] ?? null;
        $this->container['merchantOrderNo'] = $data['merchantOrderNo'] ?? null;
        $this->container['phoneNo'] = $data['phoneNo'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
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
     * Gets complainEventId
     *
     * @return string|null
     */
    public function getComplainEventId()
    {
        return $this->container['complainEventId'];
    }

    /**
     * Sets complainEventId
     *
     * @param string|null $complainEventId 支付宝侧投诉单号
     *
     * @return self
     */
    public function setComplainEventId($complainEventId)
    {
        $this->container['complainEventId'] = $complainEventId;

        return $this;
    }

    /**
     * Gets complainReason
     *
     * @return string|null
     */
    public function getComplainReason()
    {
        return $this->container['complainReason'];
    }

    /**
     * Sets complainReason
     *
     * @param string|null $complainReason 投诉原因
     *
     * @return self
     */
    public function setComplainReason($complainReason)
    {
        $this->container['complainReason'] = $complainReason;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content 已经扣除了我的钱，为什么再次扣款？？？
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 投诉单创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtFinished
     *
     * @return string|null
     */
    public function getGmtFinished()
    {
        return $this->container['gmtFinished'];
    }

    /**
     * Sets gmtFinished
     *
     * @param string|null $gmtFinished 投诉单结束时间
     *
     * @return self
     */
    public function setGmtFinished($gmtFinished)
    {
        $this->container['gmtFinished'] = $gmtFinished;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 投诉单修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[]|null $images 投诉图片
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets leafCategoryName
     *
     * @return string|null
     */
    public function getLeafCategoryName()
    {
        return $this->container['leafCategoryName'];
    }

    /**
     * Sets leafCategoryName
     *
     * @param string|null $leafCategoryName 投诉诉求
     *
     * @return self
     */
    public function setLeafCategoryName($leafCategoryName)
    {
        $this->container['leafCategoryName'] = $leafCategoryName;

        return $this;
    }

    /**
     * Gets merchantOrderNo
     *
     * @return string|null
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string|null $merchantOrderNo 商家订单号
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets phoneNo
     *
     * @return string|null
     */
    public function getPhoneNo()
    {
        return $this->container['phoneNo'];
    }

    /**
     * Sets phoneNo
     *
     * @param string|null $phoneNo 投诉人电话号码
     *
     * @return self
     */
    public function setPhoneNo($phoneNo)
    {
        $this->container['phoneNo'] = $phoneNo;

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
     * @param string|null $status 状态 商家处理中：MERCHANT_PROCESSING 商家已反馈：MERCHANT_FEEDBACKED 投诉已完结：FINISHED 投诉已撤销：CANCELLED 平台处理中：PLATFORM_PROCESSING 平台处理完结：PLATFORM_FINISH 系统关闭：CLOSED
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 应用id，例如小程序id、生活号id、商家pid
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 应用类型 小程序为：APPID 生活号为：PUBLICID 商家为：PID
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

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
     * @param string|null $tradeNo 支付宝交易号
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

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


