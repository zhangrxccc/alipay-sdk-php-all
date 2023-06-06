<?php
/**
 * AlipayOpenAgentFacetofaceSignModel
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
 * AlipayOpenAgentFacetofaceSignModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAgentFacetofaceSignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAgentFacetofaceSignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'batchNo' => 'string',
        'businessLicenseMobile' => 'string',
        'businessLicenseNo' => 'string',
        'dateLimitation' => 'string',
        'longTerm' => 'bool',
        'mccCode' => 'string',
        'rate' => 'string',
        'shopAddress' => '\Alipay\OpenAPISDK\Model\SignAddressInfo',
        'shopName' => 'string',
        'signAndAuth' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'batchNo' => null,
        'businessLicenseMobile' => null,
        'businessLicenseNo' => null,
        'dateLimitation' => null,
        'longTerm' => null,
        'mccCode' => null,
        'rate' => null,
        'shopAddress' => null,
        'shopName' => null,
        'signAndAuth' => null
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
        'batchNo' => 'batch_no',
        'businessLicenseMobile' => 'business_license_mobile',
        'businessLicenseNo' => 'business_license_no',
        'dateLimitation' => 'date_limitation',
        'longTerm' => 'long_term',
        'mccCode' => 'mcc_code',
        'rate' => 'rate',
        'shopAddress' => 'shop_address',
        'shopName' => 'shop_name',
        'signAndAuth' => 'sign_and_auth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batchNo' => 'setBatchNo',
        'businessLicenseMobile' => 'setBusinessLicenseMobile',
        'businessLicenseNo' => 'setBusinessLicenseNo',
        'dateLimitation' => 'setDateLimitation',
        'longTerm' => 'setLongTerm',
        'mccCode' => 'setMccCode',
        'rate' => 'setRate',
        'shopAddress' => 'setShopAddress',
        'shopName' => 'setShopName',
        'signAndAuth' => 'setSignAndAuth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batchNo' => 'getBatchNo',
        'businessLicenseMobile' => 'getBusinessLicenseMobile',
        'businessLicenseNo' => 'getBusinessLicenseNo',
        'dateLimitation' => 'getDateLimitation',
        'longTerm' => 'getLongTerm',
        'mccCode' => 'getMccCode',
        'rate' => 'getRate',
        'shopAddress' => 'getShopAddress',
        'shopName' => 'getShopName',
        'signAndAuth' => 'getSignAndAuth'
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
        $this->container['batchNo'] = $data['batchNo'] ?? null;
        $this->container['businessLicenseMobile'] = $data['businessLicenseMobile'] ?? null;
        $this->container['businessLicenseNo'] = $data['businessLicenseNo'] ?? null;
        $this->container['dateLimitation'] = $data['dateLimitation'] ?? null;
        $this->container['longTerm'] = $data['longTerm'] ?? null;
        $this->container['mccCode'] = $data['mccCode'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['shopAddress'] = $data['shopAddress'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
        $this->container['signAndAuth'] = $data['signAndAuth'] ?? null;
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
     * Gets batchNo
     *
     * @return string|null
     */
    public function getBatchNo()
    {
        return $this->container['batchNo'];
    }

    /**
     * Sets batchNo
     *
     * @param string|null $batchNo 代商户操作事务编号，通过https://opendocs.alipay.com/apis/api_50/alipay.open.agent.create (开启代商户签约、创建应用事务)接口进行事务创建后获取。
     *
     * @return self
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

        return $this;
    }

    /**
     * Gets businessLicenseMobile
     *
     * @return string|null
     */
    public function getBusinessLicenseMobile()
    {
        return $this->container['businessLicenseMobile'];
    }

    /**
     * Sets businessLicenseMobile
     *
     * @param string|null $businessLicenseMobile 被邀请授权的营业执照法人手机号码，上传非同人营业执照时必填
     *
     * @return self
     */
    public function setBusinessLicenseMobile($businessLicenseMobile)
    {
        $this->container['businessLicenseMobile'] = $businessLicenseMobile;

        return $this;
    }

    /**
     * Gets businessLicenseNo
     *
     * @return string|null
     */
    public function getBusinessLicenseNo()
    {
        return $this->container['businessLicenseNo'];
    }

    /**
     * Sets businessLicenseNo
     *
     * @param string|null $businessLicenseNo 营业执照号码
     *
     * @return self
     */
    public function setBusinessLicenseNo($businessLicenseNo)
    {
        $this->container['businessLicenseNo'] = $businessLicenseNo;

        return $this;
    }

    /**
     * Gets dateLimitation
     *
     * @return string|null
     */
    public function getDateLimitation()
    {
        return $this->container['dateLimitation'];
    }

    /**
     * Sets dateLimitation
     *
     * @param string|null $dateLimitation 营业期限
     *
     * @return self
     */
    public function setDateLimitation($dateLimitation)
    {
        $this->container['dateLimitation'] = $dateLimitation;

        return $this;
    }

    /**
     * Gets longTerm
     *
     * @return bool|null
     */
    public function getLongTerm()
    {
        return $this->container['longTerm'];
    }

    /**
     * Sets longTerm
     *
     * @param bool|null $longTerm 营业期限是否长期有效
     *
     * @return self
     */
    public function setLongTerm($longTerm)
    {
        $this->container['longTerm'] = $longTerm;

        return $this;
    }

    /**
     * Gets mccCode
     *
     * @return string|null
     */
    public function getMccCode()
    {
        return $this->container['mccCode'];
    }

    /**
     * Sets mccCode
     *
     * @param string|null $mccCode 商家经营类目编码。参见 <a href=\"https://opendocs.alipay.com/open/01n22g#%E5%95%86%E5%AE%B6%E7%BB%8F%E8%90%A5%E7%B1%BB%E7%9B%AE\">商家经营类目2.0</a> 中的“一级类目code_二级类目code”。
     *
     * @return self
     */
    public function setMccCode($mccCode)
    {
        $this->container['mccCode'] = $mccCode;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string|null $rate 服务费率（%），0.38~0.6 之间（小数点后两位，可取0.38%及0.6%）。 当签约且授权标识 sign_and_auth=true 时，该费率信息必填。
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets shopAddress
     *
     * @return \Alipay\OpenAPISDK\Model\SignAddressInfo|null
     */
    public function getShopAddress()
    {
        return $this->container['shopAddress'];
    }

    /**
     * Sets shopAddress
     *
     * @param \Alipay\OpenAPISDK\Model\SignAddressInfo|null $shopAddress shopAddress
     *
     * @return self
     */
    public function setShopAddress($shopAddress)
    {
        $this->container['shopAddress'] = $shopAddress;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName 店铺名称
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets signAndAuth
     *
     * @return bool|null
     */
    public function getSignAndAuth()
    {
        return $this->container['signAndAuth'];
    }

    /**
     * Sets signAndAuth
     *
     * @param bool|null $signAndAuth 签约且授权标识，默认为false，只进行签约操作； 如果设置为true，则表示签约成功后，会自动进行应用授权操作。
     *
     * @return self
     */
    public function setSignAndAuth($signAndAuth)
    {
        $this->container['signAndAuth'] = $signAndAuth;

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

