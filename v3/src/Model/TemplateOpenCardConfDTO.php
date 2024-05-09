<?php
/**
 * TemplateOpenCardConfDTO
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
 * TemplateOpenCardConfDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TemplateOpenCardConfDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TemplateOpenCardConfDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardRights' => '\Alipay\OpenAPISDK\Model\TemplateRightsContentDTO[]',
        'conf' => 'string',
        'openCardSourceType' => 'string',
        'openCardUrl' => 'string',
        'sourceAppId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cardRights' => null,
        'conf' => null,
        'openCardSourceType' => null,
        'openCardUrl' => null,
        'sourceAppId' => null
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
        'cardRights' => 'card_rights',
        'conf' => 'conf',
        'openCardSourceType' => 'open_card_source_type',
        'openCardUrl' => 'open_card_url',
        'sourceAppId' => 'source_app_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardRights' => 'setCardRights',
        'conf' => 'setConf',
        'openCardSourceType' => 'setOpenCardSourceType',
        'openCardUrl' => 'setOpenCardUrl',
        'sourceAppId' => 'setSourceAppId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardRights' => 'getCardRights',
        'conf' => 'getConf',
        'openCardSourceType' => 'getOpenCardSourceType',
        'openCardUrl' => 'getOpenCardUrl',
        'sourceAppId' => 'getSourceAppId'
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
        $this->container['cardRights'] = $data['cardRights'] ?? null;
        $this->container['conf'] = $data['conf'] ?? null;
        $this->container['openCardSourceType'] = $data['openCardSourceType'] ?? null;
        $this->container['openCardUrl'] = $data['openCardUrl'] ?? null;
        $this->container['sourceAppId'] = $data['sourceAppId'] ?? null;
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
     * Gets cardRights
     *
     * @return \Alipay\OpenAPISDK\Model\TemplateRightsContentDTO[]|null
     */
    public function getCardRights()
    {
        return $this->container['cardRights'];
    }

    /**
     * Sets cardRights
     *
     * @param \Alipay\OpenAPISDK\Model\TemplateRightsContentDTO[]|null $cardRights 领卡权益信息
     *
     * @return self
     */
    public function setCardRights($cardRights)
    {
        $this->container['cardRights'] = $cardRights;

        return $this;
    }

    /**
     * Gets conf
     *
     * @return string|null
     */
    public function getConf()
    {
        return $this->container['conf'];
    }

    /**
     * Sets conf
     *
     * @param string|null $conf 配置，预留字段，暂时不用
     *
     * @return self
     */
    public function setConf($conf)
    {
        $this->container['conf'] = $conf;

        return $this;
    }

    /**
     * Gets openCardSourceType
     *
     * @return string|null
     */
    public function getOpenCardSourceType()
    {
        return $this->container['openCardSourceType'];
    }

    /**
     * Sets openCardSourceType
     *
     * @param string|null $openCardSourceType 开卡渠道类型
     *
     * @return self
     */
    public function setOpenCardSourceType($openCardSourceType)
    {
        $this->container['openCardSourceType'] = $openCardSourceType;

        return $this;
    }

    /**
     * Gets openCardUrl
     *
     * @return string|null
     */
    public function getOpenCardUrl()
    {
        return $this->container['openCardUrl'];
    }

    /**
     * Sets openCardUrl
     *
     * @param string|null $openCardUrl 开卡链接，必须http、https开头
     *
     * @return self
     */
    public function setOpenCardUrl($openCardUrl)
    {
        $this->container['openCardUrl'] = $openCardUrl;

        return $this;
    }

    /**
     * Gets sourceAppId
     *
     * @return string|null
     */
    public function getSourceAppId()
    {
        return $this->container['sourceAppId'];
    }

    /**
     * Sets sourceAppId
     *
     * @param string|null $sourceAppId 渠道APPID，提供领卡页面的服务提供方
     *
     * @return self
     */
    public function setSourceAppId($sourceAppId)
    {
        $this->container['sourceAppId'] = $sourceAppId;

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


