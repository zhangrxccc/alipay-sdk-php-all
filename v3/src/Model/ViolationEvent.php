<?php
/**
 * ViolationEvent
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
 * ViolationEvent Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ViolationEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ViolationEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'canAppeal' => 'bool',
        'canRectify' => 'bool',
        'punishAction' => 'string',
        'status' => 'string',
        'targetId' => 'string',
        'targetName' => 'string',
        'targetType' => 'string',
        'violationRecordId' => 'string',
        'violationTime' => 'string',
        'violationType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'canAppeal' => null,
        'canRectify' => null,
        'punishAction' => null,
        'status' => null,
        'targetId' => null,
        'targetName' => null,
        'targetType' => null,
        'violationRecordId' => null,
        'violationTime' => null,
        'violationType' => null
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
        'canAppeal' => 'can_appeal',
        'canRectify' => 'can_rectify',
        'punishAction' => 'punish_action',
        'status' => 'status',
        'targetId' => 'target_id',
        'targetName' => 'target_name',
        'targetType' => 'target_type',
        'violationRecordId' => 'violation_record_id',
        'violationTime' => 'violation_time',
        'violationType' => 'violation_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canAppeal' => 'setCanAppeal',
        'canRectify' => 'setCanRectify',
        'punishAction' => 'setPunishAction',
        'status' => 'setStatus',
        'targetId' => 'setTargetId',
        'targetName' => 'setTargetName',
        'targetType' => 'setTargetType',
        'violationRecordId' => 'setViolationRecordId',
        'violationTime' => 'setViolationTime',
        'violationType' => 'setViolationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canAppeal' => 'getCanAppeal',
        'canRectify' => 'getCanRectify',
        'punishAction' => 'getPunishAction',
        'status' => 'getStatus',
        'targetId' => 'getTargetId',
        'targetName' => 'getTargetName',
        'targetType' => 'getTargetType',
        'violationRecordId' => 'getViolationRecordId',
        'violationTime' => 'getViolationTime',
        'violationType' => 'getViolationType'
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
        $this->container['canAppeal'] = $data['canAppeal'] ?? null;
        $this->container['canRectify'] = $data['canRectify'] ?? null;
        $this->container['punishAction'] = $data['punishAction'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetName'] = $data['targetName'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
        $this->container['violationRecordId'] = $data['violationRecordId'] ?? null;
        $this->container['violationTime'] = $data['violationTime'] ?? null;
        $this->container['violationType'] = $data['violationType'] ?? null;
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
     * Gets canAppeal
     *
     * @return bool|null
     */
    public function getCanAppeal()
    {
        return $this->container['canAppeal'];
    }

    /**
     * Sets canAppeal
     *
     * @param bool|null $canAppeal 商家是否可以申诉
     *
     * @return self
     */
    public function setCanAppeal($canAppeal)
    {
        $this->container['canAppeal'] = $canAppeal;

        return $this;
    }

    /**
     * Gets canRectify
     *
     * @return bool|null
     */
    public function getCanRectify()
    {
        return $this->container['canRectify'];
    }

    /**
     * Sets canRectify
     *
     * @param bool|null $canRectify 商家是否可以整改
     *
     * @return self
     */
    public function setCanRectify($canRectify)
    {
        $this->container['canRectify'] = $canRectify;

        return $this;
    }

    /**
     * Gets punishAction
     *
     * @return string|null
     */
    public function getPunishAction()
    {
        return $this->container['punishAction'];
    }

    /**
     * Sets punishAction
     *
     * @param string|null $punishAction 处罚动作及有效期
     *
     * @return self
     */
    public function setPunishAction($punishAction)
    {
        $this->container['punishAction'] = $punishAction;

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
     * @param string|null $status 违规工单状态枚举
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
     * @param string|null $targetId 违规对象ID
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetName
     *
     * @return string|null
     */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
     * Sets targetName
     *
     * @param string|null $targetName 违规对象名称
     *
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;

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
     * @param string|null $targetType 违规对象类型 小程序ID:APPID  生活号ID:PUBLICID
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

        return $this;
    }

    /**
     * Gets violationRecordId
     *
     * @return string|null
     */
    public function getViolationRecordId()
    {
        return $this->container['violationRecordId'];
    }

    /**
     * Sets violationRecordId
     *
     * @param string|null $violationRecordId 支付宝侧生成的违规记录唯一标识
     *
     * @return self
     */
    public function setViolationRecordId($violationRecordId)
    {
        $this->container['violationRecordId'] = $violationRecordId;

        return $this;
    }

    /**
     * Gets violationTime
     *
     * @return string|null
     */
    public function getViolationTime()
    {
        return $this->container['violationTime'];
    }

    /**
     * Sets violationTime
     *
     * @param string|null $violationTime 违规时间，格式为 yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setViolationTime($violationTime)
    {
        $this->container['violationTime'] = $violationTime;

        return $this;
    }

    /**
     * Gets violationType
     *
     * @return string|null
     */
    public function getViolationType()
    {
        return $this->container['violationType'];
    }

    /**
     * Sets violationType
     *
     * @param string|null $violationType 即平台依据平台规范/规则，判定商户的违规类型
     *
     * @return self
     */
    public function setViolationType($violationType)
    {
        $this->container['violationType'] = $violationType;

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


