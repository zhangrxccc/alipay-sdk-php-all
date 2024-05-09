<?php
/**
 * RecruitEnrollInfo
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
 * RecruitEnrollInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RecruitEnrollInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecruitEnrollInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cities' => 'string[]',
        'enrollMerchant' => '\Alipay\OpenAPISDK\Model\RecruitEnrollMerchant',
        'materials' => '\Alipay\OpenAPISDK\Model\RecruitMaterial[]',
        'miniApps' => '\Alipay\OpenAPISDK\Model\RecruitMiniApp[]',
        'vouchers' => '\Alipay\OpenAPISDK\Model\RecruitVoucher[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cities' => null,
        'enrollMerchant' => null,
        'materials' => null,
        'miniApps' => null,
        'vouchers' => null
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
        'cities' => 'cities',
        'enrollMerchant' => 'enroll_merchant',
        'materials' => 'materials',
        'miniApps' => 'mini_apps',
        'vouchers' => 'vouchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cities' => 'setCities',
        'enrollMerchant' => 'setEnrollMerchant',
        'materials' => 'setMaterials',
        'miniApps' => 'setMiniApps',
        'vouchers' => 'setVouchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cities' => 'getCities',
        'enrollMerchant' => 'getEnrollMerchant',
        'materials' => 'getMaterials',
        'miniApps' => 'getMiniApps',
        'vouchers' => 'getVouchers'
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
        $this->container['cities'] = $data['cities'] ?? null;
        $this->container['enrollMerchant'] = $data['enrollMerchant'] ?? null;
        $this->container['materials'] = $data['materials'] ?? null;
        $this->container['miniApps'] = $data['miniApps'] ?? null;
        $this->container['vouchers'] = $data['vouchers'] ?? null;
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
     * Gets cities
     *
     * @return string[]|null
     */
    public function getCities()
    {
        return $this->container['cities'];
    }

    /**
     * Sets cities
     *
     * @param string[]|null $cities 报名提交的活动城市码，详见<a href=\"https://opendocs.alipay.com/pre-open/02r07u\" target=\"_blank\">活动城市码</a>
     *
     * @return self
     */
    public function setCities($cities)
    {
        $this->container['cities'] = $cities;

        return $this;
    }

    /**
     * Gets enrollMerchant
     *
     * @return \Alipay\OpenAPISDK\Model\RecruitEnrollMerchant|null
     */
    public function getEnrollMerchant()
    {
        return $this->container['enrollMerchant'];
    }

    /**
     * Sets enrollMerchant
     *
     * @param \Alipay\OpenAPISDK\Model\RecruitEnrollMerchant|null $enrollMerchant enrollMerchant
     *
     * @return self
     */
    public function setEnrollMerchant($enrollMerchant)
    {
        $this->container['enrollMerchant'] = $enrollMerchant;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \Alipay\OpenAPISDK\Model\RecruitMaterial[]|null
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param \Alipay\OpenAPISDK\Model\RecruitMaterial[]|null $materials 报名提交的素材
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets miniApps
     *
     * @return \Alipay\OpenAPISDK\Model\RecruitMiniApp[]|null
     */
    public function getMiniApps()
    {
        return $this->container['miniApps'];
    }

    /**
     * Sets miniApps
     *
     * @param \Alipay\OpenAPISDK\Model\RecruitMiniApp[]|null $miniApps 报名提交的小程序信息，是否必选取决于方案要求
     *
     * @return self
     */
    public function setMiniApps($miniApps)
    {
        $this->container['miniApps'] = $miniApps;

        return $this;
    }

    /**
     * Gets vouchers
     *
     * @return \Alipay\OpenAPISDK\Model\RecruitVoucher[]|null
     */
    public function getVouchers()
    {
        return $this->container['vouchers'];
    }

    /**
     * Sets vouchers
     *
     * @param \Alipay\OpenAPISDK\Model\RecruitVoucher[]|null $vouchers 报名提交的券信息，是否必选取决于方案要求
     *
     * @return self
     */
    public function setVouchers($vouchers)
    {
        $this->container['vouchers'] = $vouchers;

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


