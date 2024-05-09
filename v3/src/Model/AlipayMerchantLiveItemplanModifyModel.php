<?php
/**
 * AlipayMerchantLiveItemplanModifyModel
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
 * AlipayMerchantLiveItemplanModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMerchantLiveItemplanModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMerchantLiveItemplanModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => '\Alipay\OpenAPISDK\Model\ItemPlanContentDO[]',
        'endTime' => 'string',
        'opType' => 'string',
        'operatorAppid' => 'string',
        'operatorType' => 'string',
        'planName' => 'string',
        'startTime' => 'string',
        'status' => 'int',
        'targetId' => 'string',
        'targetRange' => 'string',
        'targetType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content' => null,
        'endTime' => null,
        'opType' => null,
        'operatorAppid' => null,
        'operatorType' => null,
        'planName' => null,
        'startTime' => null,
        'status' => null,
        'targetId' => null,
        'targetRange' => null,
        'targetType' => null
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
        'content' => 'content',
        'endTime' => 'end_time',
        'opType' => 'op_type',
        'operatorAppid' => 'operator_appid',
        'operatorType' => 'operator_type',
        'planName' => 'plan_name',
        'startTime' => 'start_time',
        'status' => 'status',
        'targetId' => 'target_id',
        'targetRange' => 'target_range',
        'targetType' => 'target_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'endTime' => 'setEndTime',
        'opType' => 'setOpType',
        'operatorAppid' => 'setOperatorAppid',
        'operatorType' => 'setOperatorType',
        'planName' => 'setPlanName',
        'startTime' => 'setStartTime',
        'status' => 'setStatus',
        'targetId' => 'setTargetId',
        'targetRange' => 'setTargetRange',
        'targetType' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'endTime' => 'getEndTime',
        'opType' => 'getOpType',
        'operatorAppid' => 'getOperatorAppid',
        'operatorType' => 'getOperatorType',
        'planName' => 'getPlanName',
        'startTime' => 'getStartTime',
        'status' => 'getStatus',
        'targetId' => 'getTargetId',
        'targetRange' => 'getTargetRange',
        'targetType' => 'getTargetType'
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
        $this->container['content'] = $data['content'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['opType'] = $data['opType'] ?? null;
        $this->container['operatorAppid'] = $data['operatorAppid'] ?? null;
        $this->container['operatorType'] = $data['operatorType'] ?? null;
        $this->container['planName'] = $data['planName'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetRange'] = $data['targetRange'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
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
     * Gets content
     *
     * @return \Alipay\OpenAPISDK\Model\ItemPlanContentDO[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Alipay\OpenAPISDK\Model\ItemPlanContentDO[]|null $content 投放内容，数组，内容为具体条目
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 可空，计划截止时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets opType
     *
     * @return string|null
     */
    public function getOpType()
    {
        return $this->container['opType'];
    }

    /**
     * Sets opType
     *
     * @param string|null $opType 针对投放内容的操作， 包含3种类型： 覆盖:OVERRIDE  追加:APPEND  删除:DELETE
     *
     * @return self
     */
    public function setOpType($opType)
    {
        $this->container['opType'] = $opType;

        return $this;
    }

    /**
     * Gets operatorAppid
     *
     * @return string|null
     */
    public function getOperatorAppid()
    {
        return $this->container['operatorAppid'];
    }

    /**
     * Sets operatorAppid
     *
     * @param string|null $operatorAppid 投放方标识，一般为小程序id
     *
     * @return self
     */
    public function setOperatorAppid($operatorAppid)
    {
        $this->container['operatorAppid'] = $operatorAppid;

        return $this;
    }

    /**
     * Gets operatorType
     *
     * @return string|null
     */
    public function getOperatorType()
    {
        return $this->container['operatorType'];
    }

    /**
     * Sets operatorType
     *
     * @param string|null $operatorType 投放方类型，生活号：LIFE_APP 达人：CONTENT_USER 小程序：TINYAPP
     *
     * @return self
     */
    public function setOperatorType($operatorType)
    {
        $this->container['operatorType'] = $operatorType;

        return $this;
    }

    /**
     * Gets planName
     *
     * @return string|null
     */
    public function getPlanName()
    {
        return $this->container['planName'];
    }

    /**
     * Sets planName
     *
     * @param string|null $planName 投放计划名，可空
     *
     * @return self
     */
    public function setPlanName($planName)
    {
        $this->container['planName'] = $planName;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 可空，计划生效时间
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status 计划状态 0待生效 1生效中 -1已作废
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
     * @param string|null $targetId 投放目标，一般为生活号id，多个逗号隔开
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetRange
     *
     * @return string|null
     */
    public function getTargetRange()
    {
        return $this->container['targetRange'];
    }

    /**
     * Sets targetRange
     *
     * @param string|null $targetRange 投放范围， 指主体内的具体子渠道，为空则任意子渠道
     *
     * @return self
     */
    public function setTargetRange($targetRange)
    {
        $this->container['targetRange'] = $targetRange;

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
     * @param string|null $targetType 投放目标类型 生活号：LIFE_APP  达人：CONTENT_USER  小程序:TINYAPP
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

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


