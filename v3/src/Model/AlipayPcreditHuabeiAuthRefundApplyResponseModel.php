<?php
/**
 * AlipayPcreditHuabeiAuthRefundApplyResponseModel
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
 * AlipayPcreditHuabeiAuthRefundApplyResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayPcreditHuabeiAuthRefundApplyResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayPcreditHuabeiAuthRefundApplyResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authOptId' => 'string',
        'failReason' => 'string',
        'outRequestNo' => 'string',
        'retry' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authOptId' => null,
        'failReason' => null,
        'outRequestNo' => null,
        'retry' => null
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
        'authOptId' => 'auth_opt_id',
        'failReason' => 'fail_reason',
        'outRequestNo' => 'out_request_no',
        'retry' => 'retry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authOptId' => 'setAuthOptId',
        'failReason' => 'setFailReason',
        'outRequestNo' => 'setOutRequestNo',
        'retry' => 'setRetry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authOptId' => 'getAuthOptId',
        'failReason' => 'getFailReason',
        'outRequestNo' => 'getOutRequestNo',
        'retry' => 'getRetry'
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
        $this->container['authOptId'] = $data['authOptId'] ?? null;
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['retry'] = $data['retry'] ?? null;
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
     * Gets authOptId
     *
     * @return string|null
     */
    public function getAuthOptId()
    {
        return $this->container['authOptId'];
    }

    /**
     * Sets authOptId
     *
     * @param string|null $authOptId 授权支付单ID
     *
     * @return self
     */
    public function setAuthOptId($authOptId)
    {
        $this->container['authOptId'] = $authOptId;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string|null
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string|null $failReason 退款操作错误原因描述
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 外部请求号
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets retry
     *
     * @return bool|null
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry
     *
     * @param bool|null $retry 是否可重试
     *
     * @return self
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

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


