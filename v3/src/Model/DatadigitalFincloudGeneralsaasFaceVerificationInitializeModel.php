<?php
/**
 * DatadigitalFincloudGeneralsaasFaceVerificationInitializeModel
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
 * DatadigitalFincloudGeneralsaasFaceVerificationInitializeModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DatadigitalFincloudGeneralsaasFaceVerificationInitializeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatadigitalFincloudGeneralsaasFaceVerificationInitializeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizCode' => 'string',
        'certName' => 'string',
        'certNo' => 'string',
        'certType' => 'string',
        'faceReserveStrategy' => 'string',
        'identityType' => 'string',
        'nation' => 'string',
        'outerOrderNo' => 'string',
        'phoneNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizCode' => null,
        'certName' => null,
        'certNo' => null,
        'certType' => null,
        'faceReserveStrategy' => null,
        'identityType' => null,
        'nation' => null,
        'outerOrderNo' => null,
        'phoneNo' => null
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
        'bizCode' => 'biz_code',
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'faceReserveStrategy' => 'face_reserve_strategy',
        'identityType' => 'identity_type',
        'nation' => 'nation',
        'outerOrderNo' => 'outer_order_no',
        'phoneNo' => 'phone_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizCode' => 'setBizCode',
        'certName' => 'setCertName',
        'certNo' => 'setCertNo',
        'certType' => 'setCertType',
        'faceReserveStrategy' => 'setFaceReserveStrategy',
        'identityType' => 'setIdentityType',
        'nation' => 'setNation',
        'outerOrderNo' => 'setOuterOrderNo',
        'phoneNo' => 'setPhoneNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizCode' => 'getBizCode',
        'certName' => 'getCertName',
        'certNo' => 'getCertNo',
        'certType' => 'getCertType',
        'faceReserveStrategy' => 'getFaceReserveStrategy',
        'identityType' => 'getIdentityType',
        'nation' => 'getNation',
        'outerOrderNo' => 'getOuterOrderNo',
        'phoneNo' => 'getPhoneNo'
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
        $this->container['bizCode'] = $data['bizCode'] ?? null;
        $this->container['certName'] = $data['certName'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['certType'] = $data['certType'] ?? null;
        $this->container['faceReserveStrategy'] = $data['faceReserveStrategy'] ?? null;
        $this->container['identityType'] = $data['identityType'] ?? null;
        $this->container['nation'] = $data['nation'] ?? null;
        $this->container['outerOrderNo'] = $data['outerOrderNo'] ?? null;
        $this->container['phoneNo'] = $data['phoneNo'] ?? null;
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
     * Gets bizCode
     *
     * @return string|null
     */
    public function getBizCode()
    {
        return $this->container['bizCode'];
    }

    /**
     * Sets bizCode
     *
     * @param string|null $bizCode 人脸核身具体类型目前仅支持：DATA_DIGITAL_BIZ_CODE_FACE_VERIFICATION
     *
     * @return self
     */
    public function setBizCode($bizCode)
    {
        $this->container['bizCode'] = $bizCode;

        return $this;
    }

    /**
     * Gets certName
     *
     * @return string|null
     */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
     * Sets certName
     *
     * @param string|null $certName 真实姓名
     *
     * @return self
     */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo 证件号
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets certType
     *
     * @return string|null
     */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
     * Sets certType
     *
     * @param string|null $certType 证件类型，当前枚举支持： IDENTITY_CARD：身份证 RESIDENCE_HK_MC：港澳居民居住证 RESIDENCE_TAIWAN：台湾居民居住证
     *
     * @return self
     */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;

        return $this;
    }

    /**
     * Gets faceReserveStrategy
     *
     * @return string|null
     */
    public function getFaceReserveStrategy()
    {
        return $this->container['faceReserveStrategy'];
    }

    /**
     * Sets faceReserveStrategy
     *
     * @param string|null $faceReserveStrategy 人脸保存策略，非必填。具体取值为：reserve(保存活体人脸)/never(不保存活体人脸)，不传默认为reserve
     *
     * @return self
     */
    public function setFaceReserveStrategy($faceReserveStrategy)
    {
        $this->container['faceReserveStrategy'] = $faceReserveStrategy;

        return $this;
    }

    /**
     * Gets identityType
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identityType'];
    }

    /**
     * Sets identityType
     *
     * @param string|null $identityType 认证类型，固定值为：CERT_INFO
     *
     * @return self
     */
    public function setIdentityType($identityType)
    {
        $this->container['identityType'] = $identityType;

        return $this;
    }

    /**
     * Gets nation
     *
     * @return string|null
     */
    public function getNation()
    {
        return $this->container['nation'];
    }

    /**
     * Sets nation
     *
     * @param string|null $nation 国家地区代码，当证件类型为外国人永久居留证时必填。
     *
     * @return self
     */
    public function setNation($nation)
    {
        $this->container['nation'] = $nation;

        return $this;
    }

    /**
     * Gets outerOrderNo
     *
     * @return string|null
     */
    public function getOuterOrderNo()
    {
        return $this->container['outerOrderNo'];
    }

    /**
     * Sets outerOrderNo
     *
     * @param string|null $outerOrderNo 商户请求的唯一标识，商户要保证其唯一性，值为64位长度的字母数字组合。建议：前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列
     *
     * @return self
     */
    public function setOuterOrderNo($outerOrderNo)
    {
        $this->container['outerOrderNo'] = $outerOrderNo;

        return $this;
    }

    /**
     * Gets phoneNo
     *
     * @return string|null
     */
    public function getPhoneNo()
    {
        return $this->container['phoneNo'];
    }

    /**
     * Sets phoneNo
     *
     * @param string|null $phoneNo 手机号码
     *
     * @return self
     */
    public function setPhoneNo($phoneNo)
    {
        $this->container['phoneNo'] = $phoneNo;

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


