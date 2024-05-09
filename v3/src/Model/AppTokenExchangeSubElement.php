<?php
/**
 * AppTokenExchangeSubElement
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
 * AppTokenExchangeSubElement Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AppTokenExchangeSubElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppTokenExchangeSubElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appAuthToken' => 'string',
        'appRefreshToken' => 'string',
        'authAppId' => 'string',
        'expiresIn' => 'string',
        'reExpiresIn' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appAuthToken' => null,
        'appRefreshToken' => null,
        'authAppId' => null,
        'expiresIn' => null,
        'reExpiresIn' => null,
        'userId' => null
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
        'appAuthToken' => 'app_auth_token',
        'appRefreshToken' => 'app_refresh_token',
        'authAppId' => 'auth_app_id',
        'expiresIn' => 'expires_in',
        'reExpiresIn' => 're_expires_in',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appAuthToken' => 'setAppAuthToken',
        'appRefreshToken' => 'setAppRefreshToken',
        'authAppId' => 'setAuthAppId',
        'expiresIn' => 'setExpiresIn',
        'reExpiresIn' => 'setReExpiresIn',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appAuthToken' => 'getAppAuthToken',
        'appRefreshToken' => 'getAppRefreshToken',
        'authAppId' => 'getAuthAppId',
        'expiresIn' => 'getExpiresIn',
        'reExpiresIn' => 'getReExpiresIn',
        'userId' => 'getUserId'
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
        $this->container['appAuthToken'] = $data['appAuthToken'] ?? null;
        $this->container['appRefreshToken'] = $data['appRefreshToken'] ?? null;
        $this->container['authAppId'] = $data['authAppId'] ?? null;
        $this->container['expiresIn'] = $data['expiresIn'] ?? null;
        $this->container['reExpiresIn'] = $data['reExpiresIn'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets appAuthToken
     *
     * @return string|null
     */
    public function getAppAuthToken()
    {
        return $this->container['appAuthToken'];
    }

    /**
     * Sets appAuthToken
     *
     * @param string|null $appAuthToken 应用授权令牌
     *
     * @return self
     */
    public function setAppAuthToken($appAuthToken)
    {
        $this->container['appAuthToken'] = $appAuthToken;

        return $this;
    }

    /**
     * Gets appRefreshToken
     *
     * @return string|null
     */
    public function getAppRefreshToken()
    {
        return $this->container['appRefreshToken'];
    }

    /**
     * Sets appRefreshToken
     *
     * @param string|null $appRefreshToken 刷新令牌
     *
     * @return self
     */
    public function setAppRefreshToken($appRefreshToken)
    {
        $this->container['appRefreshToken'] = $appRefreshToken;

        return $this;
    }

    /**
     * Gets authAppId
     *
     * @return string|null
     */
    public function getAuthAppId()
    {
        return $this->container['authAppId'];
    }

    /**
     * Sets authAppId
     *
     * @param string|null $authAppId 授权商户appid
     *
     * @return self
     */
    public function setAuthAppId($authAppId)
    {
        $this->container['authAppId'] = $authAppId;

        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return string|null
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param string|null $expiresIn 过期时间
     *
     * @return self
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;

        return $this;
    }

    /**
     * Gets reExpiresIn
     *
     * @return string|null
     */
    public function getReExpiresIn()
    {
        return $this->container['reExpiresIn'];
    }

    /**
     * Sets reExpiresIn
     *
     * @param string|null $reExpiresIn 刷新令牌过期时间
     *
     * @return self
     */
    public function setReExpiresIn($reExpiresIn)
    {
        $this->container['reExpiresIn'] = $reExpiresIn;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 授权商户的user_id
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


