<?php
/**
 * PaymentVoucherSendRule
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
 * PaymentVoucherSendRule Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentVoucherSendRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentVoucherSendRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'maxQuantityByDay' => 'int',
        'naturalPersonLimit' => 'bool',
        'phoneNumberLimit' => 'bool',
        'realNameLimit' => 'bool',
        'voucherQuantity' => 'int',
        'voucherQuantityLimitPerUser' => 'int',
        'voucherQuantityLimitPerUserPeriodType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'maxQuantityByDay' => null,
        'naturalPersonLimit' => null,
        'phoneNumberLimit' => null,
        'realNameLimit' => null,
        'voucherQuantity' => null,
        'voucherQuantityLimitPerUser' => null,
        'voucherQuantityLimitPerUserPeriodType' => null
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
        'maxQuantityByDay' => 'max_quantity_by_day',
        'naturalPersonLimit' => 'natural_person_limit',
        'phoneNumberLimit' => 'phone_number_limit',
        'realNameLimit' => 'real_name_limit',
        'voucherQuantity' => 'voucher_quantity',
        'voucherQuantityLimitPerUser' => 'voucher_quantity_limit_per_user',
        'voucherQuantityLimitPerUserPeriodType' => 'voucher_quantity_limit_per_user_period_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maxQuantityByDay' => 'setMaxQuantityByDay',
        'naturalPersonLimit' => 'setNaturalPersonLimit',
        'phoneNumberLimit' => 'setPhoneNumberLimit',
        'realNameLimit' => 'setRealNameLimit',
        'voucherQuantity' => 'setVoucherQuantity',
        'voucherQuantityLimitPerUser' => 'setVoucherQuantityLimitPerUser',
        'voucherQuantityLimitPerUserPeriodType' => 'setVoucherQuantityLimitPerUserPeriodType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maxQuantityByDay' => 'getMaxQuantityByDay',
        'naturalPersonLimit' => 'getNaturalPersonLimit',
        'phoneNumberLimit' => 'getPhoneNumberLimit',
        'realNameLimit' => 'getRealNameLimit',
        'voucherQuantity' => 'getVoucherQuantity',
        'voucherQuantityLimitPerUser' => 'getVoucherQuantityLimitPerUser',
        'voucherQuantityLimitPerUserPeriodType' => 'getVoucherQuantityLimitPerUserPeriodType'
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
        $this->container['maxQuantityByDay'] = $data['maxQuantityByDay'] ?? null;
        $this->container['naturalPersonLimit'] = $data['naturalPersonLimit'] ?? null;
        $this->container['phoneNumberLimit'] = $data['phoneNumberLimit'] ?? null;
        $this->container['realNameLimit'] = $data['realNameLimit'] ?? null;
        $this->container['voucherQuantity'] = $data['voucherQuantity'] ?? null;
        $this->container['voucherQuantityLimitPerUser'] = $data['voucherQuantityLimitPerUser'] ?? null;
        $this->container['voucherQuantityLimitPerUserPeriodType'] = $data['voucherQuantityLimitPerUserPeriodType'] ?? null;
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
     * Gets maxQuantityByDay
     *
     * @return int|null
     */
    public function getMaxQuantityByDay()
    {
        return $this->container['maxQuantityByDay'];
    }

    /**
     * Sets maxQuantityByDay
     *
     * @param int|null $maxQuantityByDay 设置此字段，允许指定单天最大发券数量。  限制: 每天发放张数*活动天数应小于等于优惠券发放总量
     *
     * @return self
     */
    public function setMaxQuantityByDay($maxQuantityByDay)
    {
        $this->container['maxQuantityByDay'] = $maxQuantityByDay;

        return $this;
    }

    /**
     * Gets naturalPersonLimit
     *
     * @return bool|null
     */
    public function getNaturalPersonLimit()
    {
        return $this->container['naturalPersonLimit'];
    }

    /**
     * Sets naturalPersonLimit
     *
     * @param bool|null $naturalPersonLimit 限制相同身份证号领取次数(voucher_quantity_limit_per_user)。默认false不限制。 枚举值 true：是 false：否
     *
     * @return self
     */
    public function setNaturalPersonLimit($naturalPersonLimit)
    {
        $this->container['naturalPersonLimit'] = $naturalPersonLimit;

        return $this;
    }

    /**
     * Gets phoneNumberLimit
     *
     * @return bool|null
     */
    public function getPhoneNumberLimit()
    {
        return $this->container['phoneNumberLimit'];
    }

    /**
     * Sets phoneNumberLimit
     *
     * @param bool|null $phoneNumberLimit 限制相同手机号领取次数(voucher_quantity_limit_per_user)。默认false不限制 枚举值 true：是 false：否
     *
     * @return self
     */
    public function setPhoneNumberLimit($phoneNumberLimit)
    {
        $this->container['phoneNumberLimit'] = $phoneNumberLimit;

        return $this;
    }

    /**
     * Gets realNameLimit
     *
     * @return bool|null
     */
    public function getRealNameLimit()
    {
        return $this->container['realNameLimit'];
    }

    /**
     * Sets realNameLimit
     *
     * @param bool|null $realNameLimit 限制支付宝实名用户才能领取支付券,默认为false表示不限制 枚举值 true\\false
     *
     * @return self
     */
    public function setRealNameLimit($realNameLimit)
    {
        $this->container['realNameLimit'] = $realNameLimit;

        return $this;
    }

    /**
     * Gets voucherQuantity
     *
     * @return int|null
     */
    public function getVoucherQuantity()
    {
        return $this->container['voucherQuantity'];
    }

    /**
     * Sets voucherQuantity
     *
     * @param int|null $voucherQuantity 发行券的总数量。 限制： 1、发放总个数最少1个 2、发放总个数最多99999999个
     *
     * @return self
     */
    public function setVoucherQuantity($voucherQuantity)
    {
        $this->container['voucherQuantity'] = $voucherQuantity;

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
     * @param int|null $voucherQuantityLimitPerUser 每人领取限制。 默认按照支付宝账号进行领取限制;  不填写或填入0表示没有领取限制.
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
     * @param string|null $voucherQuantityLimitPerUserPeriodType 周期限领配置,限制每人在固定周期内领取张数(voucher_quantity_limit_per_user),默认LIFE_CYCLE
     *
     * @return self
     */
    public function setVoucherQuantityLimitPerUserPeriodType($voucherQuantityLimitPerUserPeriodType)
    {
        $this->container['voucherQuantityLimitPerUserPeriodType'] = $voucherQuantityLimitPerUserPeriodType;

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


