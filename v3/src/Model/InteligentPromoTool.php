<?php
/**
 * InteligentPromoTool
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
 * InteligentPromoTool Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InteligentPromoTool implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InteligentPromoTool';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inteligentSendRule' => '\Alipay\OpenAPISDK\Model\InteligentSendRule',
        'inteligentVoucher' => '\Alipay\OpenAPISDK\Model\InteligentVoucher',
        'status' => 'string',
        'voucherNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inteligentSendRule' => null,
        'inteligentVoucher' => null,
        'status' => null,
        'voucherNo' => null
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
        'inteligentSendRule' => 'inteligent_send_rule',
        'inteligentVoucher' => 'inteligent_voucher',
        'status' => 'status',
        'voucherNo' => 'voucher_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inteligentSendRule' => 'setInteligentSendRule',
        'inteligentVoucher' => 'setInteligentVoucher',
        'status' => 'setStatus',
        'voucherNo' => 'setVoucherNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inteligentSendRule' => 'getInteligentSendRule',
        'inteligentVoucher' => 'getInteligentVoucher',
        'status' => 'getStatus',
        'voucherNo' => 'getVoucherNo'
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
        $this->container['inteligentSendRule'] = $data['inteligentSendRule'] ?? null;
        $this->container['inteligentVoucher'] = $data['inteligentVoucher'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['voucherNo'] = $data['voucherNo'] ?? null;
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
     * Gets inteligentSendRule
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentSendRule|null
     */
    public function getInteligentSendRule()
    {
        return $this->container['inteligentSendRule'];
    }

    /**
     * Sets inteligentSendRule
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentSendRule|null $inteligentSendRule inteligentSendRule
     *
     * @return self
     */
    public function setInteligentSendRule($inteligentSendRule)
    {
        $this->container['inteligentSendRule'] = $inteligentSendRule;

        return $this;
    }

    /**
     * Gets inteligentVoucher
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentVoucher|null
     */
    public function getInteligentVoucher()
    {
        return $this->container['inteligentVoucher'];
    }

    /**
     * Sets inteligentVoucher
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentVoucher|null $inteligentVoucher inteligentVoucher
     *
     * @return self
     */
    public function setInteligentVoucher($inteligentVoucher)
    {
        $this->container['inteligentVoucher'] = $inteligentVoucher;

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
     * @param string|null $status 单个营销工具的生效状态，当在招商部分券失效后会使用这个字段
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets voucherNo
     *
     * @return string|null
     */
    public function getVoucherNo()
    {
        return $this->container['voucherNo'];
    }

    /**
     * Sets voucherNo
     *
     * @param string|null $voucherNo 营销工具uid,创建营销活动时无需设置
     *
     * @return self
     */
    public function setVoucherNo($voucherNo)
    {
        $this->container['voucherNo'] = $voucherNo;

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


