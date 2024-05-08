<?php
/**
 * VoucherPackageActivityInfo
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
 * VoucherPackageActivityInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherPackageActivityInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherPackageActivityInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityBaseInfo' => '\Alipay\OpenAPISDK\Model\ActivityBaseInfo',
        'voucherAvailableScopeInfo' => '\Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo',
        'voucherDeductInfo' => '\Alipay\OpenAPISDK\Model\VoucherDeductInfo',
        'voucherDisplayPatternInfo' => '\Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo',
        'voucherSendModeInfo' => '\Alipay\OpenAPISDK\Model\VoucherSendModeInfo',
        'voucherUseRuleInfo' => '\Alipay\OpenAPISDK\Model\VoucherUseRuleInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityBaseInfo' => null,
        'voucherAvailableScopeInfo' => null,
        'voucherDeductInfo' => null,
        'voucherDisplayPatternInfo' => null,
        'voucherSendModeInfo' => null,
        'voucherUseRuleInfo' => null
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
        'activityBaseInfo' => 'activity_base_info',
        'voucherAvailableScopeInfo' => 'voucher_available_scope_info',
        'voucherDeductInfo' => 'voucher_deduct_info',
        'voucherDisplayPatternInfo' => 'voucher_display_pattern_info',
        'voucherSendModeInfo' => 'voucher_send_mode_info',
        'voucherUseRuleInfo' => 'voucher_use_rule_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityBaseInfo' => 'setActivityBaseInfo',
        'voucherAvailableScopeInfo' => 'setVoucherAvailableScopeInfo',
        'voucherDeductInfo' => 'setVoucherDeductInfo',
        'voucherDisplayPatternInfo' => 'setVoucherDisplayPatternInfo',
        'voucherSendModeInfo' => 'setVoucherSendModeInfo',
        'voucherUseRuleInfo' => 'setVoucherUseRuleInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityBaseInfo' => 'getActivityBaseInfo',
        'voucherAvailableScopeInfo' => 'getVoucherAvailableScopeInfo',
        'voucherDeductInfo' => 'getVoucherDeductInfo',
        'voucherDisplayPatternInfo' => 'getVoucherDisplayPatternInfo',
        'voucherSendModeInfo' => 'getVoucherSendModeInfo',
        'voucherUseRuleInfo' => 'getVoucherUseRuleInfo'
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
        $this->container['activityBaseInfo'] = $data['activityBaseInfo'] ?? null;
        $this->container['voucherAvailableScopeInfo'] = $data['voucherAvailableScopeInfo'] ?? null;
        $this->container['voucherDeductInfo'] = $data['voucherDeductInfo'] ?? null;
        $this->container['voucherDisplayPatternInfo'] = $data['voucherDisplayPatternInfo'] ?? null;
        $this->container['voucherSendModeInfo'] = $data['voucherSendModeInfo'] ?? null;
        $this->container['voucherUseRuleInfo'] = $data['voucherUseRuleInfo'] ?? null;
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
     * Gets activityBaseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null
     */
    public function getActivityBaseInfo()
    {
        return $this->container['activityBaseInfo'];
    }

    /**
     * Sets activityBaseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ActivityBaseInfo|null $activityBaseInfo activityBaseInfo
     *
     * @return self
     */
    public function setActivityBaseInfo($activityBaseInfo)
    {
        $this->container['activityBaseInfo'] = $activityBaseInfo;

        return $this;
    }

    /**
     * Gets voucherAvailableScopeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo|null
     */
    public function getVoucherAvailableScopeInfo()
    {
        return $this->container['voucherAvailableScopeInfo'];
    }

    /**
     * Sets voucherAvailableScopeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherAvailableScopeInfo|null $voucherAvailableScopeInfo voucherAvailableScopeInfo
     *
     * @return self
     */
    public function setVoucherAvailableScopeInfo($voucherAvailableScopeInfo)
    {
        $this->container['voucherAvailableScopeInfo'] = $voucherAvailableScopeInfo;

        return $this;
    }

    /**
     * Gets voucherDeductInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null
     */
    public function getVoucherDeductInfo()
    {
        return $this->container['voucherDeductInfo'];
    }

    /**
     * Sets voucherDeductInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDeductInfo|null $voucherDeductInfo voucherDeductInfo
     *
     * @return self
     */
    public function setVoucherDeductInfo($voucherDeductInfo)
    {
        $this->container['voucherDeductInfo'] = $voucherDeductInfo;

        return $this;
    }

    /**
     * Gets voucherDisplayPatternInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null
     */
    public function getVoucherDisplayPatternInfo()
    {
        return $this->container['voucherDisplayPatternInfo'];
    }

    /**
     * Sets voucherDisplayPatternInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDisplayPatternInfo|null $voucherDisplayPatternInfo voucherDisplayPatternInfo
     *
     * @return self
     */
    public function setVoucherDisplayPatternInfo($voucherDisplayPatternInfo)
    {
        $this->container['voucherDisplayPatternInfo'] = $voucherDisplayPatternInfo;

        return $this;
    }

    /**
     * Gets voucherSendModeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null
     */
    public function getVoucherSendModeInfo()
    {
        return $this->container['voucherSendModeInfo'];
    }

    /**
     * Sets voucherSendModeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSendModeInfo|null $voucherSendModeInfo voucherSendModeInfo
     *
     * @return self
     */
    public function setVoucherSendModeInfo($voucherSendModeInfo)
    {
        $this->container['voucherSendModeInfo'] = $voucherSendModeInfo;

        return $this;
    }

    /**
     * Gets voucherUseRuleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null
     */
    public function getVoucherUseRuleInfo()
    {
        return $this->container['voucherUseRuleInfo'];
    }

    /**
     * Sets voucherUseRuleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherUseRuleInfo|null $voucherUseRuleInfo voucherUseRuleInfo
     *
     * @return self
     */
    public function setVoucherUseRuleInfo($voucherUseRuleInfo)
    {
        $this->container['voucherUseRuleInfo'] = $voucherUseRuleInfo;

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


