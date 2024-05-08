<?php
/**
 * PaymentVoucherUseRuleDetail
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
 * PaymentVoucherUseRuleDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentVoucherUseRuleDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentVoucherUseRuleDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fixVoucher' => '\Alipay\OpenAPISDK\Model\PaymentFixVoucher',
        'useMode' => 'string',
        'useUrl' => 'string',
        'voucherQuantityLimitPerUser' => 'int',
        'voucherQuantityLimitPerUserPeriodType' => 'string',
        'voucherValidPeriod' => '\Alipay\OpenAPISDK\Model\PaymentVoucherValidPeriod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fixVoucher' => null,
        'useMode' => null,
        'useUrl' => null,
        'voucherQuantityLimitPerUser' => null,
        'voucherQuantityLimitPerUserPeriodType' => null,
        'voucherValidPeriod' => null
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
        'fixVoucher' => 'fix_voucher',
        'useMode' => 'use_mode',
        'useUrl' => 'use_url',
        'voucherQuantityLimitPerUser' => 'voucher_quantity_limit_per_user',
        'voucherQuantityLimitPerUserPeriodType' => 'voucher_quantity_limit_per_user_period_type',
        'voucherValidPeriod' => 'voucher_valid_period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fixVoucher' => 'setFixVoucher',
        'useMode' => 'setUseMode',
        'useUrl' => 'setUseUrl',
        'voucherQuantityLimitPerUser' => 'setVoucherQuantityLimitPerUser',
        'voucherQuantityLimitPerUserPeriodType' => 'setVoucherQuantityLimitPerUserPeriodType',
        'voucherValidPeriod' => 'setVoucherValidPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fixVoucher' => 'getFixVoucher',
        'useMode' => 'getUseMode',
        'useUrl' => 'getUseUrl',
        'voucherQuantityLimitPerUser' => 'getVoucherQuantityLimitPerUser',
        'voucherQuantityLimitPerUserPeriodType' => 'getVoucherQuantityLimitPerUserPeriodType',
        'voucherValidPeriod' => 'getVoucherValidPeriod'
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
        $this->container['fixVoucher'] = $data['fixVoucher'] ?? null;
        $this->container['useMode'] = $data['useMode'] ?? null;
        $this->container['useUrl'] = $data['useUrl'] ?? null;
        $this->container['voucherQuantityLimitPerUser'] = $data['voucherQuantityLimitPerUser'] ?? null;
        $this->container['voucherQuantityLimitPerUserPeriodType'] = $data['voucherQuantityLimitPerUserPeriodType'] ?? null;
        $this->container['voucherValidPeriod'] = $data['voucherValidPeriod'] ?? null;
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
     * Gets fixVoucher
     *
     * @return \Alipay\OpenAPISDK\Model\PaymentFixVoucher|null
     */
    public function getFixVoucher()
    {
        return $this->container['fixVoucher'];
    }

    /**
     * Sets fixVoucher
     *
     * @param \Alipay\OpenAPISDK\Model\PaymentFixVoucher|null $fixVoucher fixVoucher
     *
     * @return self
     */
    public function setFixVoucher($fixVoucher)
    {
        $this->container['fixVoucher'] = $fixVoucher;

        return $this;
    }

    /**
     * Gets useMode
     *
     * @return string|null
     */
    public function getUseMode()
    {
        return $this->container['useMode'];
    }

    /**
     * Sets useMode
     *
     * @param string|null $useMode 核销跳转方式,默认CAN_USE(详情页展示可使用按钮)
     *
     * @return self
     */
    public function setUseMode($useMode)
    {
        $this->container['useMode'] = $useMode;

        return $this;
    }

    /**
     * Gets useUrl
     *
     * @return string|null
     */
    public function getUseUrl()
    {
        return $this->container['useUrl'];
    }

    /**
     * Sets useUrl
     *
     * @param string|null $useUrl 核销跳转链接 限制: 1、只有use_mode为SELF_LINK时该值有效且必传。 2、核销跳转链接必须是支付宝小程序链接。
     *
     * @return self
     */
    public function setUseUrl($useUrl)
    {
        $this->container['useUrl'] = $useUrl;

        return $this;
    }

    /**
     * Gets voucherQuantityLimitPerUser
     *
     * @return int|null
     */
    public function getVoucherQuantityLimitPerUser()
    {
        return $this->container['voucherQuantityLimitPerUser'];
    }

    /**
     * Sets voucherQuantityLimitPerUser
     *
     * @param int|null $voucherQuantityLimitPerUser 每个支付宝账号的核销次数限制。 默认不限制
     *
     * @return self
     */
    public function setVoucherQuantityLimitPerUser($voucherQuantityLimitPerUser)
    {
        $this->container['voucherQuantityLimitPerUser'] = $voucherQuantityLimitPerUser;

        return $this;
    }

    /**
     * Gets voucherQuantityLimitPerUserPeriodType
     *
     * @return string|null
     */
    public function getVoucherQuantityLimitPerUserPeriodType()
    {
        return $this->container['voucherQuantityLimitPerUserPeriodType'];
    }

    /**
     * Sets voucherQuantityLimitPerUserPeriodType
     *
     * @param string|null $voucherQuantityLimitPerUserPeriodType 核销次数限制周期配置。默认值LIFE_CYCLE表示限制每个支付宝账号在整个活动期间核销次数。
     *
     * @return self
     */
    public function setVoucherQuantityLimitPerUserPeriodType($voucherQuantityLimitPerUserPeriodType)
    {
        $this->container['voucherQuantityLimitPerUserPeriodType'] = $voucherQuantityLimitPerUserPeriodType;

        return $this;
    }

    /**
     * Gets voucherValidPeriod
     *
     * @return \Alipay\OpenAPISDK\Model\PaymentVoucherValidPeriod|null
     */
    public function getVoucherValidPeriod()
    {
        return $this->container['voucherValidPeriod'];
    }

    /**
     * Sets voucherValidPeriod
     *
     * @param \Alipay\OpenAPISDK\Model\PaymentVoucherValidPeriod|null $voucherValidPeriod voucherValidPeriod
     *
     * @return self
     */
    public function setVoucherValidPeriod($voucherValidPeriod)
    {
        $this->container['voucherValidPeriod'] = $voucherValidPeriod;

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


