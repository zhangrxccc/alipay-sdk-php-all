<?php
/**
 * SubscribeRelation
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
 * SubscribeRelation Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubscribeRelation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscribeRelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'keepState' => 'string',
        'show' => 'bool',
        'subscribeState' => 'string',
        'subscribeType' => 'string',
        'templateId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'keepState' => null,
        'show' => null,
        'subscribeState' => null,
        'subscribeType' => null,
        'templateId' => null
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
        'keepState' => 'keep_state',
        'show' => 'show',
        'subscribeState' => 'subscribe_state',
        'subscribeType' => 'subscribe_type',
        'templateId' => 'template_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keepState' => 'setKeepState',
        'show' => 'setShow',
        'subscribeState' => 'setSubscribeState',
        'subscribeType' => 'setSubscribeType',
        'templateId' => 'setTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keepState' => 'getKeepState',
        'show' => 'getShow',
        'subscribeState' => 'getSubscribeState',
        'subscribeType' => 'getSubscribeType',
        'templateId' => 'getTemplateId'
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
        $this->container['keepState'] = $data['keepState'] ?? null;
        $this->container['show'] = $data['show'] ?? null;
        $this->container['subscribeState'] = $data['subscribeState'] ?? null;
        $this->container['subscribeType'] = $data['subscribeType'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
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
     * Gets keepState
     *
     * @return string|null
     */
    public function getKeepState()
    {
        return $this->container['keepState'];
    }

    /**
     * Sets keepState
     *
     * @param string|null $keepState 订阅保持状态，即用户勾选“总是保持以上选择，不再询问”选项时勾选的订阅状态。枚举值： 1：保持订阅。 0：保持拒绝订阅。 说明：若用户“总是保持以上选择，不再询问”选项，且选择订阅消息。下次触发消息订阅组件时，支付宝将自动发起一次静默订阅（不再拉起订阅组件，无需用户手动订阅）。
     *
     * @return self
     */
    public function setKeepState($keepState)
    {
        $this->container['keepState'] = $keepState;

        return $this;
    }

    /**
     * Gets show
     *
     * @return bool|null
     */
    public function getShow()
    {
        return $this->container['show'];
    }

    /**
     * Sets show
     *
     * @param bool|null $show 模板是否展示在订阅组件中。枚举值： true：订阅组件中展示查询的模板。 false：订阅组件中不展示模板
     *
     * @return self
     */
    public function setShow($show)
    {
        $this->container['show'] = $show;

        return $this;
    }

    /**
     * Gets subscribeState
     *
     * @return string|null
     */
    public function getSubscribeState()
    {
        return $this->container['subscribeState'];
    }

    /**
     * Sets subscribeState
     *
     * @param string|null $subscribeState 订阅状态。枚举值 0：拒绝订阅。 1：订阅
     *
     * @return self
     */
    public function setSubscribeState($subscribeState)
    {
        $this->container['subscribeState'] = $subscribeState;

        return $this;
    }

    /**
     * Gets subscribeType
     *
     * @return string|null
     */
    public function getSubscribeType()
    {
        return $this->container['subscribeType'];
    }

    /**
     * Sets subscribeType
     *
     * @param string|null $subscribeType 消息模板的订阅类型。枚举值： longterm：长期性订阅 onetime：一次性订阅
     *
     * @return self
     */
    public function setSubscribeType($subscribeType)
    {
        $this->container['subscribeType'] = $subscribeType;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 消息模板id
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

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


