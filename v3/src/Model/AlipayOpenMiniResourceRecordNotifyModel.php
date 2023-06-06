<?php
/**
 * AlipayOpenMiniResourceRecordNotifyModel
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
 * AlipayOpenMiniResourceRecordNotifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniResourceRecordNotifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniResourceRecordNotifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authorId' => 'string',
        'miniAppId' => 'string',
        'params' => 'string',
        'siteId' => 'string',
        'source' => 'string',
        'taobaoId' => 'string',
        'taobaoNick' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authorId' => null,
        'miniAppId' => null,
        'params' => null,
        'siteId' => null,
        'source' => null,
        'taobaoId' => null,
        'taobaoNick' => null
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
        'authorId' => 'author_id',
        'miniAppId' => 'mini_app_id',
        'params' => 'params',
        'siteId' => 'site_id',
        'source' => 'source',
        'taobaoId' => 'taobao_id',
        'taobaoNick' => 'taobao_nick'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorId' => 'setAuthorId',
        'miniAppId' => 'setMiniAppId',
        'params' => 'setParams',
        'siteId' => 'setSiteId',
        'source' => 'setSource',
        'taobaoId' => 'setTaobaoId',
        'taobaoNick' => 'setTaobaoNick'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorId' => 'getAuthorId',
        'miniAppId' => 'getMiniAppId',
        'params' => 'getParams',
        'siteId' => 'getSiteId',
        'source' => 'getSource',
        'taobaoId' => 'getTaobaoId',
        'taobaoNick' => 'getTaobaoNick'
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
        $this->container['authorId'] = $data['authorId'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['params'] = $data['params'] ?? null;
        $this->container['siteId'] = $data['siteId'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['taobaoId'] = $data['taobaoId'] ?? null;
        $this->container['taobaoNick'] = $data['taobaoNick'] ?? null;
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
     * Gets authorId
     *
     * @return string|null
     */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
     * Sets authorId
     *
     * @param string|null $authorId 媒体唤起时传入的支付宝id
     *
     * @return self
     */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 支付宝appid，代表一个小程序的唯一标识
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets params
     *
     * @return string|null
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param string|null $params 媒体唤起时提供的额外参数值列表，这里可能有多个值，打平以后拼入。即url_decode(authcbparams)
     *
     * @return self
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets siteId
     *
     * @return string|null
     */
    public function getSiteId()
    {
        return $this->container['siteId'];
    }

    /**
     * Sets siteId
     *
     * @param string|null $siteId 回调的siteid 淘宝账号唯一
     *
     * @return self
     */
    public function setSiteId($siteId)
    {
        $this->container['siteId'] = $siteId;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 媒体来源，标识调用方
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets taobaoId
     *
     * @return string|null
     */
    public function getTaobaoId()
    {
        return $this->container['taobaoId'];
    }

    /**
     * Sets taobaoId
     *
     * @param string|null $taobaoId 淘宝id
     *
     * @return self
     */
    public function setTaobaoId($taobaoId)
    {
        $this->container['taobaoId'] = $taobaoId;

        return $this;
    }

    /**
     * Gets taobaoNick
     *
     * @return string|null
     */
    public function getTaobaoNick()
    {
        return $this->container['taobaoNick'];
    }

    /**
     * Sets taobaoNick
     *
     * @param string|null $taobaoNick 淘宝昵称
     *
     * @return self
     */
    public function setTaobaoNick($taobaoNick)
    {
        $this->container['taobaoNick'] = $taobaoNick;

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

